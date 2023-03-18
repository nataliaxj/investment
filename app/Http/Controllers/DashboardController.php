<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\NewsletterSubscriber;
use App\Models\Plan;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->getBalance() == 0)
        {
            return view('user.d-prompt');
        }
        $plans = Plan::all();
        return view('dashboard', compact('plans'));
    }

    public function deposit()
    {
        $currencies = Currency::all();
        return view('user.deposit', compact('currencies'));
    }

    public function getPayment($id)
    {
        $payment = auth()->user()->deposits()->where('id', $id)->with('currency')->first();

        if (!$payment) abort(404);

        return view('user.payment', compact('payment'));
    }

    public function storeDeposit(Request $request)
    {
        
        $this->validate($request, [
            'amount' => ['required', 'integer', 'min:500'],
            'currency' => ['required',]
        ]);

        $user = auth()->user();
        $check = $user->deposits()->where('amount', $request->amount)->where('currency_id', $request->currency)->where('status', 'Pending')->first();
        if($check) {
            FacadesSession::flash('pending_payment', "You have a pending payment of same amount and currency. Click on Transactions to complete it");
            return back();
        }

        $deposit = new Deposit();

        $deposit->amount = $request->amount;
        $deposit->currency_id = $request->currency;
        $deposit->user_id = Auth::id();
        $deposit->save();

        $user->userDetails()->increment('deposits');

        return redirect()->route('payment', $deposit->id);
    }

    public function updatePayment(Request $request, $id)
    {
        $deposit = Deposit::find($id);

        $deposit->tx_hash = $request->txHash;
        $deposit->status = "Processing";
        $deposit->save();

        FacadesSession::flash('txHash', "Transaction updated successfully");
        return back();
    }

    public function invest()
    {
        $user = auth()->user();
        if ($user->getBalance() == 0)
        {
            return view('user.d-prompt');
        }

        $plans = Plan::all();

        return view("user.invest", compact('plans'));
    }

    public function investStore(Request $request)
    {
        $this->validate($request, [
            'plan' => 'required',
            'amount' => 'required'
        ]);

        $user = auth()->user();
        $plan = Plan::find($request->plan);

        if ($request->amount < $plan->minimum_investment || $request->amount > $plan->maximum_investment)
        {
            FacadesSession::flash('amountError', "The inputted amount exceeds the maximum or minimum amount for the chosen plan");

            return back();
        }

        if ($request->amount > $user->getBalance()) {
            FacadesSession::flash('amountError', "The inputted amount is greater than your balance, Please deposit to continue");

            return back();
        }

        $investment = new Investment();

        $investment->user_id = Auth::id();
        $investment->plan_id = $request->plan;
        $investment->amount = $request->amount;

        $investment->save();

        // $user->userDetails()->decrement('balance', $request->amount);

        return redirect()->route('investments');
    }
   
    public function investments()
    {
        $user = auth()->user();
        $investments = $user->investments()->with('plan')->orderBy('created_at', 'desc')->get();
        
        foreach ($investments as $key => $investment) {
            if ($investment->is_active) {
                $start_time = strtotime($investment->created_at);
                $duration = strtotime($investment->plan->duration, $start_time);
                $end_time = strtotime(now());

                $diff = $end_time - $start_time;

                if ($end_time > $duration) {
                    $investment->is_active = false;
                    $investment->save();

                    $user->userDetails()->increment('balance', $investment->totalProfits());

                }
            }
        }

        return view('user.investments', compact('investments'));
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => "required|email|unique:newsletter_subscribers"
        ]);
        $subscriber = new NewsletterSubscriber();
        $subscriber->email = $request->email;

        $subscriber->save();

        FacadesSession::flash('newsletter', "User subscribed successfully");

        return redirect()->back();
    }

    public function plans()
    {
        $plans = Plan::all();

        return view('user.plans', compact('plans'));
    }

    public function withdraw()
    {
        $currencies = Currency::all();
        return view('user.withdraw', compact('currencies'));
    }

    public function withdrawalSave(Request $request)
    {
        $this->validate($request, [
            'amount' => "required|integer",
            'currency' => 'required|integer',
            'wallet' => 'required|min:20'
        ]);

        $withdrawable = Auth::user()->withdrawable();
        if ($request->amount > $withdrawable) {
            FacadesSession::flash("withdrawErr", "You can only withdraw a maximum of $".$withdrawable);
            return back();
        }

        $withdrawal = new Withdrawal();

        $withdrawal->currency_id = $request->currency;
        $withdrawal->amount = $request->amount;
        $withdrawal->wallet_address = $request->wallet;
        $withdrawal->user_id = Auth::id();

        $withdrawal->save();

        FacadesSession::flash("withdrawSuccess", "Your withdrawal of ".$request->amount."has been submitted for processing");

        return back();

    }

    public function transactions()
    {
        $deposits = Auth::user()->deposits()->with('currency')->get();
        $withdrawals = Auth::user()->withdrawals()->with('currency')->get();
        $investments = Auth::user()->investments()->with('plan')->get();

        return view('user.transactions', compact('deposits', 'withdrawals', 'investments'));
    }
}

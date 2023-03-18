<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'address',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetails()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function name()
    {
        return $this->first_name." ".$this->last_name;
    }

    function getTotalInvestmentsUSD()
    {
        $investments = $this->investments;
        $totalInvestment = 0;

        foreach ($investments as $key => $investment) {
            $totalInvestment = $totalInvestment + $investment->amount;
        }

        return $totalInvestment;
    }

    function getTotalDeposits()
    {
        $deposits = $this->deposits;
        $totalDeposits = 0;

        foreach ($deposits as $key => $deposit) {
            if ($deposit->status == "Confirmed") {
                $totalDeposits = $totalDeposits + $deposit->amount;
            }
        }

        return $totalDeposits;
    }

    function getBalance()
    {
        $profit = $this->userDetails->balance;
        $totalDeposits = $this->getTotalDeposits();

        return $totalDeposits + $profit;
    }

    function getTotalROI()
    {
        $investments = $this->getTotalInvestmentsUSD();
        $profits = $this->userDetails->balance;

        if ($profits == 0) return 0;

        $roi = ($investments / $profits) * 100;

        return $roi;
    }

    function getUninvestedAmount()
    {
        $inv = $this->getTotalInvestmentsUSD();
        $dep = $this->getTotalDeposits();

        return $dep - $inv;
    }

    function withdrawable()
    {
        $bal = $this->getBalance();
        $uninvested = $this->getUninvestedAmount();

        return $bal - $uninvested;
    }
}

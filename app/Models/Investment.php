<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function getDays($duration)
    {
        $start = time();
        $end = strtotime($duration);

        $diff = $end - $start;
        $days =  round($diff / (60 * 60 * 24));

        return $days;
    }

    public function totalPercentage()
    {
        $start_date = new DateTime($this->created_at);
        $end_date = new DateTime();
        $duration_days = $this->getDays($this->plan->duration);
        $daily_profit = $this->plan->profit_daily;

        $interval = $start_date->diff($end_date);
        $days = $interval->format('%a');

        if ((int)$days > $duration_days) $days = $duration_days;

        $total_profit_percentage = $days * $daily_profit;

        return $total_profit_percentage;
    }

    public function totalProfits()
    {
        $total_profit_percentage = $this->totalPercentage();
        $investment_amount = $this->amount;

        $total_profit_dollars = ($total_profit_percentage / 100) * $investment_amount;

        return $total_profit_dollars;
    }

    public function getTotalProfits()
    {
        $total_profit_dollars = $this->totalProfits();
        $total_profit_percentage = $this->totalPercentage();
        
        return "$".$total_profit_dollars." (".$total_profit_percentage."%)";

    }
}

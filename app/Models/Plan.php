<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;


    public function getTotalROI($duration, $profit_daily)
    {
        $start = time();
        $end = strtotime($duration);

        $diff = $end - $start;
        $days =  round($diff / (60 * 60 * 24));

        $total_roi = $days * $profit_daily;

        return $total_roi;
    }


}

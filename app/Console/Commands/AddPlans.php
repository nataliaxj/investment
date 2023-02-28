<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Plan;

class AddPlans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plans:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Plan::truncate();

        $this->info('Inserting plans...');

        $plans = [
            [
                "name" => "Standard Plan",
                "minimum_investment" => "500",
                "maximum_investment" => "4999",
                "profit_daily" => "8",
                "duration" => "1 Week"
            ],
            [
                "name" => "Premium Plan",
                "minimum_investment" => "5000",
                "maximum_investment" => "9999",
                "profit_daily" => "10",
                "duration" => "11 Days"
            ],
            [
                "name" => "Professional Plan",
                "minimum_investment" => "10000",
                "maximum_investment" => "19999",
                "profit_daily" => "12",
                "duration" => "2 Weeks"
            ],
            [
                "name" => "Mercury",
                "minimum_investment" => "20000",
                "maximum_investment" => "29999",
                "profit_daily" => "14",
                "duration" => "2 Weeks"
            ],
            [
                "name" => "Venus",
                "minimum_investment" => "30000",
                "maximum_investment" => "39999",
                "profit_daily" => "15",
                "duration" => "1 Month"
            ],
            [
                "name" => "Jupiter Plan",
                "minimum_investment" => "40000",
                "maximum_investment" => "99999",
                "profit_daily" => "17",
                "duration" => "1 Month"
            ],
            [
                "name" => "Diamond Plan",
                "minimum_investment" => "100000",
                "maximum_investment" => "100000",
                "profit_daily" => "20",
                "duration" => "1 Month"
            ],
        ];

        foreach ($plans as $key => $plan) {
            $planModel = new Plan();

            $planModel->name = $plan["name"];
            $planModel->minimum_investment = $plan["minimum_investment"];
            $planModel->maximum_investment = $plan["maximum_investment"];
            $planModel->profit_daily = $plan["profit_daily"];
            $planModel->duration = $plan["duration"];

            $planModel->save();
        }
        

        $this->line('Process Complete!!');

        
        return true;
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Currency;

class AddCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:add';

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
        Currency::truncate();
        $this->info('Inserting plans...');
        $currencies = [
            [
                "name" => "btc",
                "address" => "0x2d0B193778eD8A19dEd11995634250694C493147_btc"
            ],
            [
                "name" => "eth",
                "address" => "0x2d0B193778eD8A19dEd11995634250694C493147_eth"
            ],
            [
                "name" => "bnb",
                "address" => "0x2d0B193778eD8A19dEd11995634250694C493147_bnb"
            ]
        ];

        foreach ($currencies as $key => $currency) {
            $currencyModel = new Currency();
            $currencyModel->name = $currency["name"];
            $currencyModel->address = $currency['address'];

            $currencyModel->save();
        }

        $this->line('Process Complete!!');

        return true;
    }
}

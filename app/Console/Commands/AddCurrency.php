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
                "address" => "bc1qck8kk3jv7em8fcjxz0zrpfvslat56x4nkzkuxj"
            ],
            [
                "name" => "eth",
                "address" => "0x900f776Af4882DF3b46C22A26Cc487A50A215E84"
            ],
            [
                "name" => "bnb",
                "address" => "0x900f776Af4882DF3b46C22A26Cc487A50A215E84"
            ],
            [
                "name" => "usdt",
                "address" => "TG8uqM7wsgWmfh2hCo5PAbAebzBvKNKkwV"
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

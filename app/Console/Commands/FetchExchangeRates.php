<?php

namespace App\Console\Commands;

use App\Models\ExchangeRate;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-exchange-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'AZN-USD, AZN-TRY və AZN-RUB məzənnələrini API-dən çəkib bazaya yazır/yeniəlləyir';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Mezmneler API-den yuklenir');

        $response = Http::get('https://v6.exchangerate-api.com/v6/74ccf18b97d2e906e89b368a/latest/azn');

        if($response->failed()){
            $this->error('API-den melumat alinmadi');
            return;
        }

        $data = $response->json();

        if($data['result'] !== 'success'){
            $this->error('Api neticesi ugursuz oldu');
            return;
        }

        $baseCode = $data['base_code'];
        $rates = $data['conversion_rates'];
        $lastUpdated = date('Y-m-d H:i:s', strtotime($data['time_last_update_utc']));
        $currencies = ['USD','TRY','RUB'];

        foreach($currencies as $targetCode){
            $rate = $rates[$targetCode];

            ExchangeRate::updateOrCreate([
                'base_code' => $baseCode,
                'target_code' => $targetCode,
            ],
            [
               'rate' => $rate,
               'last_updated_at' => $lastUpdated,
            ]
        );
        $this->info("{$baseCode}-{$targetCode} mezemnesi yazildi: {$rate}");
        }
        $this->info("Mezemne ugurla yenilendi");
    }
}

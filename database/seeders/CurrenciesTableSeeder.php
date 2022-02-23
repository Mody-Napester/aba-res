<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => '{"en":"Egyptian Pound","ar":"جنيه مصري"}', 'code' => 'EGP', 'symbol' => 'EGP'],
            ['name' => '{"en":"Jordan Dinar","ar":"دينار اردني"}', 'code' => 'JOD', 'symbol' => 'JOD'],
            ['name' => '{"en":"United States dollar","ar":"دولار الولايات المتحدة"}', 'code' => 'USD', 'symbol' => 'USD'],
            ['name' => '{"en":"Euro","ar":"اليورو"}', 'code' => 'EUR', 'symbol' => 'EUR'],
            ['name' => '{"en":"Saudi riyal","ar":"ريال سعودي"}', 'code' => 'SAR', 'symbol' => 'SAR'],
        ];

        foreach ($data as $row_key => $row){
            if(!Currency::getOneBy(['name' => $row['name']])){
                $resource = Currency::create([
                    'uuid' => (string)Uuid::generate(config('vars.uuid_version')),
                    'name' => $row['name'],
                    'code' => $row['code'],
                    'symbol' => $row['symbol'],
                ]);
            }
        }
    }
}

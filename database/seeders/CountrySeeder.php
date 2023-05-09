<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Country::truncate();
        $csvData = fopen(base_path('database/csv/countries.csv'), 'r');
        $withoutHeader = true;

        while(($data = fgetcsv($csvData, 555, ',')) !== false){
            if(!$withoutHeader){
                Country::create([
                    'id' => $data[0],
                    'name' => $data[1],
                    'iso3' => $data[2],
                    'iso2' => $data[3],
                    'numeric_code' => $data[4],
                    'phone_code' => $data[5],
                    'capital' => $data[6],
                    'region' => $data[12],
                    'subregion' => $data[13],
                ]);
            }
            $withoutHeader = false;
        }

        fclose($csvData);
    }
}

<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        City::truncate();
//        $csvData = fopen(base_path('database/csv/cities.csv'), 'r');
//        $withoutHeader = true;
//
//        while(($data = fgetcsv($csvData, 555, ',')) !== false){
//            if(!$withoutHeader){
//                City::create([
//                    'id' => $data[0],
//                    'name' => $data[1],
//                    'state_id' => $data[2],
//                ]);
//            }
//            $withoutHeader = false;
//        }
//
//        fclose($csvData);

        $path = base_path('database/sql/siac_db_public_cities.sql');
        DB::unprepared(file_get_contents($path));
    }
}

<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
//        State::truncate();
//        $csvData = fopen(base_path('database/csv/states.csv'), 'r');
//        $withoutHeader = true;
//
//        while(($data = fgetcsv($csvData, 555, ',')) !== false){
//            if(!$withoutHeader){
//                State::create([
//                    'id' => $data[0],
//                    'name' => $data[1],
//                    'country_id' => $data[2],
//                ]);
//            }
//            $withoutHeader = false;
//        }
//
//        fclose($csvData);

        $path = base_path('database/sql/siac_db_public_states.sql');
        DB::unprepared(file_get_contents($path));
    }
}

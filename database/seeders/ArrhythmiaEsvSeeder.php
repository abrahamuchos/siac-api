<?php

namespace Database\Seeders;

use App\Models\ArrhythmiaEsv;
use App\Models\Background;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArrhythmiaEsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $backgrounds = Background::get(['id']);

        foreach ($backgrounds as $background){
            // Random create Arrhythmia ESV to backgrounds
            if(random_int(0,1)){
                ArrhythmiaEsv::factory()
                    ->create([
                       'background_id' => $background->id
                    ]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\ArrhythmiaOther;
use App\Models\Background;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArrhythmiaOtherSeeder extends Seeder
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
            // Random create Others Arrhythmia to backgrounds
            if(random_int(0,1)){
                ArrhythmiaOther::factory()
                    ->create([
                        'background_id' => $background->id
                    ]);
            }
        }
    }

}

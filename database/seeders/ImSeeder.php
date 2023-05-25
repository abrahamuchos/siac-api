<?php

namespace Database\Seeders;

use App\Models\Background;
use App\Models\Im;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImSeeder extends Seeder
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
            // Random create IMs to backgrounds
            if(random_int(0,1)){
                Im::factory()
                    ->create([
                        'background_id' => $background->id
                    ]);
            }
        }
    }

}

<?php

namespace Database\Seeders;

use App\Models\Background;
use App\Models\Disease;
use App\Models\FamilyBackground;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilyBackgroundSeeder extends Seeder
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
        $diseases = Disease::find(9)->childDiseases()->get();

        foreach ($backgrounds as $background) {
            if (($background->id % 2) == 0) {
                FamilyBackground::factory()
                    ->hasAttached($diseases->random(random_int(1,2)))
                    ->create([
                        'background_id' => $background->id
                    ]);
                //Random create 1 or 2 diseases per background
                if(random_int(0,1)){
                    FamilyBackground::factory()
                        ->hasAttached($diseases->random(random_int(1,2)))
                        ->create([
                            'background_id' => $background->id
                        ]);
                }

            }
        }
    }
}


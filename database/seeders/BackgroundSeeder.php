<?php

namespace Database\Seeders;

use App\Models\Background;
use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        $iecas = Treatment::where('treatment_id', '=', 2)->get();

        for ($i = 0; $i <= 9; $i++) {
            // Alternamos algunos antecedentes con tratamientos y reacciones
            if($i%2 == 0){
                $drug = $iecas->random(1)->first();
                Background::factory(1)
                    ->hasAttached($drug, function () use ($drug) {
                        return ['drug_reaction_id' => $drug->parentTreatment()->first()->drugReactions()->get()->random(1)->first()->id];
                    })
                    ->create();
            }else{
                Background::factory(1)
                    ->create();
            }
        }

    }
}

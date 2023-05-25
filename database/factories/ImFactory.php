<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Im>
 */
class ImFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $q = (bool) random_int(0,1);
        $noQ = (bool) random_int(0,1);
        if(!$q && !$noQ){
            $q = true;
        }elseif($q && $noQ){
            $q = false;
        }

        return [
            'background_id' => null,
            'q' => !$noQ && $q,
            'no_q' => !$q && $noQ,
            'year' => ($q || $noQ ? random_int(2000, 2020) : null),
            'location' => ($q || $noQ ? fake()->text(random_int(55, 100)) : null)
        ];
    }
}

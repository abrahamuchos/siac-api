<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Material;
use App\Models\ParaclinicalExamination;
use App\Models\Pending;
use App\Models\Workplan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workplan>
 */
class WorkplanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'nutrition' => (random_int(0, 1) ? fake()->text(random_int(100,500)) : null),
            'exercise' => (random_int(0, 1) ? fake()->text(random_int(100,500)) : null),
            'other_paraclinical_examination' => (random_int(0, 1) ? fake()->text(100) : null),
            'other_consultation' => (random_int(0, 1) ? fake()->text(100) : null),
        ];
    }

    public function configure(): WorkplanFactory
    {
        return $this->afterCreating(function (Workplan $workplan) {
            $this->_paraclinicalExaminations($workplan);
            $this->_consultation($workplan);
            $this->_material($workplan);
        });
    }

    /**
     * Associate paraclinical examiniation with workplan
     *
     * @param Workplan $workplan
     *
     * @return void
     */
    private function _paraclinicalExaminations(Workplan $workplan): void
    {
        $paraclinical = ParaclinicalExamination::get();
        $workplan
            ->paraclinicalExams()
            ->attach([
                $paraclinical->random(2)->first()->id,
                $paraclinical->random(2)->last()->id,
            ]);

    }

    /**
     * Associate consultation with workplan
     *
     * @param Workplan $workplan
     *
     * @return void
     */
    private function _consultation(Workplan $workplan): void
    {
        $specialist = Consultation::where('consultation_id', '=', 1)->get();
        $inter = Consultation::where('consultation_id', '=', 12)->get();
        $workplan
            ->consultations()
            ->attach([
                $specialist->random(1)->first()->id,
                $inter->random(1)->first()->id
            ]);
    }

    private function _material(Workplan $workplan): void
    {
        /*
         * TODO: Esto escoge materials random, pero el deber ser es que materials pertenece a un UM
         * y la historia medica (medical records) también debe ser del mismo UM.
        */
        $material = Material::get()->random(1)->first();
        $workplan
            ->materials()
            ->attach([$material->id]);
    }


}

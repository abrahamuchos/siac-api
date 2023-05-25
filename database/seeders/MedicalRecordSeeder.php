<?php

namespace Database\Seeders;

use App\Models\Anthropometry;
use App\Models\AtherogenicDyslipidemia;
use App\Models\Background;
use App\Models\Breath;
use App\Models\Diagnostic;
use App\Models\DyslipidemiaReduceResidualRisk;
use App\Models\Echocardiogram;
use App\Models\Electrocardiogram;
use App\Models\FindRisk;
use App\Models\GlomerularFiltration;
use App\Models\Hvi;
use App\Models\InterheartRisk;
use App\Models\LaboratoryTest;
use App\Models\Lifestyle;
use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\PhysicalActivity;
use App\Models\PhysicalExam;
use App\Models\PulseMeanArterialPressure;
use App\Models\Recipe;
use App\Models\Report;
use App\Models\SmokingDate;
use App\Models\Treatment;
use App\Models\VitalSign;
use App\Models\Workplan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MedicalRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
        $patients = Patient::whereFirstConsultation(false)->with('appointments')->get();

        foreach ($patients as $patient) {
            $firstAppointment = $patient->appointments->first();

            foreach ($patient->appointments as $appointment) {
                if ($appointment->is($firstAppointment)) {
//                    First consultation (with background)
                    MedicalRecord::factory()
                        ->create([
                            'appointment_id' => $appointment->id,
                            'background_id' => $this->_background(),
                            'anthropometry_id' => (random_int(0, 1) ? $this->_anthropometry() : null),
                            'physical_exam_id' => (random_int(0, 1) ? $this->_physicalExam() : null),
                            'electrocardiogram_id' => (random_int(0, 1) ? $this->_electrocardiogram() : null),
                            'echocardiogram_id' => (random_int(0, 1) ? $this->_echocardiogram() : null),
                            'lifestyle_id' => (random_int(0, 1) ? $this->_lifestyle() : null),
                            'vital_sign_id' => (random_int(0, 1) ? $this->_vitalSign() : null),
                            'diagnostic_id' => (random_int(0, 1) ? $this->_diagnostic() : null),
                            'workplan_id' => (random_int(0, 1) ? $this->_workplan() : null),
                            'recipe_id' => $this->_recipe(),
                            'report_id' => (random_int(0, 1) ? $this->_report() : null),

                            //Algorithms and Formulas
                            'pulse_mean_arterial_pressure_id' => (random_int(0, 1) ? $this->_pulsePressure() : null),
                            'interheart_risk_id' => (random_int(0, 1) ? $this->_interheartRisk() : null),
                            'find_risk_id' => (random_int(0, 1) ? $this->_findRisk() : null),
                            'glomerular_filtration_id' => (random_int(0, 1) ? $this->_glomerular() : null),
                            'hvi_id' => (random_int(0, 1) ? $this->_hvi() : null),
                            'atherogenic_dyslipidemia_id' => (random_int(0,
                                1) ? $this->_atherogenicDyslipidemia() : null),
                            'dyslipidemia_reduce_residual_risk_id' => (random_int(0,
                                1) ? $this->_residualRisk() : null),

                        ]);
                } else {
//                    Regular consultation
                    $regularConsultation = MedicalRecord::factory()
                        ->create([
                            'appointment_id' => $appointment->id,
                            'anthropometry_id' => (random_int(0, 1) ? $this->_anthropometry() : null),
                            'physical_exam_id' => (random_int(0, 1) ? $this->_physicalExam() : null),
                            'electrocardiogram_id' => (random_int(0, 1) ? $this->_electrocardiogram() : null),
                            'echocardiogram_id' => (random_int(0, 1) ? $this->_echocardiogram() : null),
                            'lifestyle_id' => (random_int(0, 1) ? $this->_lifestyle() : null),
                            'vital_sign_id' => (random_int(0, 1) ? $this->_vitalSign() : null),
                            'diagnostic_id' => (random_int(0, 1) ? $this->_diagnostic() : null),
                            'workplan_id' => (random_int(0, 1) ? $this->_workplan() : null),
                            'recipe_id' => $this->_recipe(),
                            'report_id' => (random_int(0, 1) ? $this->_report() : null),

                            //Algorithms and Formulas
                            'pulse_mean_arterial_pressure_id' => (random_int(0, 1) ? $this->_pulsePressure() : null),
                            'interheart_risk_id' => (random_int(0, 1) ? $this->_interheartRisk() : null),
                            'find_risk_id' => (random_int(0, 1) ? $this->_findRisk() : null),
                            'glomerular_filtration_id' => (random_int(0, 1) ? $this->_glomerular() : null),
                            'hvi_id' => (random_int(0, 1) ? $this->_hvi() : null),
                            'atherogenic_dyslipidemia_id' => (random_int(0,
                                1) ? $this->_atherogenicDyslipidemia() : null),
                            'dyslipidemia_reduce_residual_risk_id' => (random_int(0,
                                1) ? $this->_residualRisk() : null),
                        ]);
                    // Create random laboratory test
                    if(random_int(0,1)){
                        $this->_laboratoryTest($regularConsultation);
                    }
                }
            }
        }

    }

    /**
     * Create a new records for background
     * @return int - Background id
     * @throws \Exception
     */
    private function _background(): int
    {
        $iecas = Treatment::where('treatment_id', '=', 2)->get();

        //Random background with treatments and drugs reactions
        if (random_int(0, 1)) {
            $drug = $iecas->random(1)->first();
            $background = Background::factory()
                ->hasAttached($drug, function () use ($drug) {
                    return [
                        'drug_reaction_id' => $drug->parentTreatment()->first()->drugReactions()->get()->random(1)->first()->id
                    ];
                })
                ->create();
        } else {
            $background = Background::factory()->create();
        }

        return $background->id;
    }

    /**
     * Create a new record to anthropometry
     * @return int - id anthropometry
     */
    private function _anthropometry(): int
    {
        $anthropometry = Anthropometry::factory()->create();
        return $anthropometry->id;
    }

    /**
     * Create a new record to PhysicalExam and associate with Breath
     * @return int
     */
    private function _physicalExam(): int
    {
        $physicalExam = PhysicalExam::factory()
            ->has(Breath::factory()->count(2), 'breaths')
            ->create();

        return $physicalExam->id;
    }

    /**
     * Create a new record to Electrocardiogram
     * @return int
     */
    private function _electrocardiogram(): int
    {
        $electrocardiogram = Electrocardiogram::factory()->create();

        return $electrocardiogram->id;
    }

    /**
     * Create a new record to Electrocardiogram
     * @return int
     */
    private function _echocardiogram(): int
    {
        $echocardiogram = Echocardiogram::factory()->create();

        return $echocardiogram->id;
    }

    /**
     * Create a new record to Lifestyle
     * @return int
     */
    private function _lifestyle(): int
    {
        $lifestyle = Lifestyle::factory()
            ->has(PhysicalActivity::factory(), 'physicalActivities')
            ->create();

        return $lifestyle->id;
    }

    /**
     * Create a new record to vital sign
     * @return int
     */
    private function _vitalSign(): int
    {
        $vitalSign = VitalSign::factory()->create();

        return $vitalSign->id;
    }

    /**
     * Create new record to Diagnostic and random associate with Smoking dates
     * @return int - Diagnostic id
     * @throws \Exception
     */
    private function _diagnostic(): int
    {
        if (random_int(0, 1)) {
            $diagnostic = Diagnostic::factory()
                ->has(SmokingDate::factory(), 'smokingDates')
                ->create([
                    'smoking' => true,
                    'has_been_smoking' => true,
                    'start_date_smoking' => '2015-09-01 00:00:00',
                    'smoking_type' => random_int(141, 145),
                    'ever_quit_smoking' => true,
                    'quit_smoking' => true,
                    'brief_counseling' => false,
                    'time_first_cigar_type' => random_int(204, 207),
                    'cant_cigar_type' => random_int(209, 212),
                    'first_hours_cigar' => true,
                    'smoking_sick' => false,
                    'smoking_prohibited_place' => false,
                    'dislike_cigar_type' => random_int(214, 215),
                    'fagertom_score' => random_int(0, 11),
                ]);
        } else {
            $diagnostic = Diagnostic::factory()->create();
        }

        return $diagnostic->id;
    }

    /**
     * Create new record to Workplan
     * @return int
     */
    private function _workplan(): int
    {
        $workplan = Workplan::factory()->create();

        return $workplan->id;
    }

    /**
     * Create a new record to Recipe
     * @return int - Recipe id
     */
    private function _recipe(): int
    {
        $recipe = Recipe::factory()->create();

        return $recipe->id;
    }

    /**
     * Create a new record to Report
     * @return int - Report id
     */
    private function _report(): int
    {
        $report = Report::factory()->create();

        return $report->id;
    }

    /**
     * Create a new record to Pulse mean arterial and Pressure
     * @return int - Pulse mean arterial and Pressure id
     */
    private function _pulsePressure(): int
    {
        $pulsePressure = PulseMeanArterialPressure::factory()->create();

        return $pulsePressure->id;
    }

    /**
     * Create a new record to Interheart Risk
     * @return int - Interheart Risk id
     */
    private function _interheartRisk(): int
    {
        $interheartRisk = InterheartRisk::factory()->create();

        return $interheartRisk->id;
    }

    /**
     * Create a new record to find risk
     * @return int - id
     */
    private function _findRisk(): int
    {
        $findRisk = FindRisk::factory()->create();

        return $findRisk->id;
    }

    /**
     * Create a new record to Glomerular Filtration
     * @return int - id
     */
    private function _glomerular(): int
    {
        $glomerular = GlomerularFiltration::factory()->create();

        return $glomerular->id;
    }

    /**
     * Create a new record to HVI
     * @return int - id
     */
    private function _hvi(): int
    {
        $hvi = Hvi::factory()->create();

        return $hvi->id;
    }

    /**
     * Create a new record to Atherogenic Dyslipidemia
     * @return int - id
     */
    private function _atherogenicDyslipidemia(): int
    {
        $atherogenic = AtherogenicDyslipidemia::factory()->create();

        return $atherogenic->id;
    }

    /**
     * Create a new record to Dyslipidemia Reduce Residual Risk
     * @return int - id
     */
    private function _residualRisk(): int
    {
        $residualRisk = DyslipidemiaReduceResidualRisk::factory()->create();

        return $residualRisk->id;
    }

    /**
     * Create association of medical record with laboratory test
     *
     * @param MedicalRecord $regularConsultation
     *
     * @return void
     */
    private function _laboratoryTest(MedicalRecord $regularConsultation): void
    {
        $labTest = LaboratoryTest::get();
        $regularConsultation
            ->labTests()
            ->attach(
                $labTest->random(),
                [
                    'laboratory_test_id' => $labTest->random()->id,
                    'result' => fake()->randomFloat(2, 10, 100),
                    'src' => 'https://placehold.co/800x400?text=LabTest',
                    'test_date' => Carbon::now()
                ]
            );
    }
}

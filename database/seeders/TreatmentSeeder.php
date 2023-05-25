<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\DrugReaction;
use App\Models\OtherFrequency;
use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * @property  Attribute $units
 */
class TreatmentSeeder extends Seeder
{

    public $units, $unitsVolume;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->units = Attribute::find(3)->childAttributes()->get();
        $this->unitsVolume = Attribute::find(14)->childAttributes()->get();

        $this->_antiHta();
        $this->_lipidLowering();
        $this->_antiDiabetic();
        $this->_antithrombotic();
        $this->_polypill();

    }

    /**
     * AntiHTA treatments
     * @return void
     */
    private function _antiHta(): void
    {
        $antiHta = Treatment::create([
            'name' => 'Antihipertensivos',
            'unit_type' => 1
        ]);

        $drugsReactions = DrugReaction::whereIn('id', array(1, 2, 3))->get();
//        $antiHta->
        $iecas = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'IECAS',
            'unit_type' => 1
        ]);
        $iecas->drugReactions()->attach($drugsReactions);

        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Benazepril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 10,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Captopril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 12.5,
            'dose_max' => 150,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Cilazapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 1.25,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Enalapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 5,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Espirapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 3,
            'dose_max' => 6,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Moexipril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 7.5,
            'dose_max' => 30,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Perindopril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 4,
            'dose_max' => 16,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Quinapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 10,
            'dose_max' => 80,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Ramipril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Fosinopril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 10,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Lisinopril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 10,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Imidapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Trandolapril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 1,
            'dose_max' => 4,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iecas->id,
            'name' => 'Zofenopril',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 30,
            'dose_max' => 60,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //BRA
        $bra = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'BRA',
            'unit_type' => 1
        ]);
        $bra->drugReactions()->attach($drugsReactions);

        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Candesartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 8,
            'dose_max' => 32,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Eprosartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 600,
            'dose_max' => 800,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Irbesartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 150,
            'dose_max' => 300,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Losartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 50,
            'dose_max' => 100,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Olmesartan medoxomilo',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 20,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Telmisartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 20,
            'dose_max' => 80,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bra->id,
            'name' => 'Valsartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 80,
            'dose_max' => 320,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Beta Bloqueadores
        $bloq = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'Beta Bloq',
            'unit_type' => 1
        ]);
        $bloq->drugReactions()->attach(DrugReaction::whereIn('id', array(4, 5, 12))->get());

        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Atenolol',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 25,
            'dose_max' => 100,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Bisoprolol',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Carvedilol',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 50,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Metoprolol',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 50,
            'dose_max' => 200,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Nebivolol',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 5,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Propanolol IR',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 80,
            'dose_max' => 160,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $bloq->id,
            'name' => 'Propanolol LA',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 80,
            'dose_max' => 161,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        // ARNI
        $arni = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'ARNI',
            'unit_type' => 1
        ]);
        $arni->drugReactions()->attach(DrugReaction::whereIn('id', array(7, 8, 9))->get());
        Treatment::create([
            'treatment_id' => $arni->id,
            'name' => 'Sacubitril / Valsartan',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 80,
            'dose_max' => 320,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Ca Antagonista
        $ca = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'Ca Antagonista',
            'unit_type' => 1
        ]);
        $ca->drugReactions()->attach(DrugReaction::whereIn('id', array(10, 3))->get());
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Amlodipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 5,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Felodipina',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 6,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Isradipina',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Nicardipina',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => false,
            'dose_min' => 20,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Nifedipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 30,
            'dose_max' => 30,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Nifedipina LP/XP',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 30,
            'dose_max' => 90,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Nisoldipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Lacidipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2,
            'dose_max' => 6,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Manidipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Barnidipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Lecardipina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Verapamilo',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => false,
            'dose_min' => 120,
            'dose_max' => 480,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $ca->id,
            'name' => 'Diltiazem',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 120,
            'dose_max' => 360,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        //Bloqu. de receptores de Mineralocorticoides (Ant. Mineralocorticoides)
        $antMineralocorticoides = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'Ant. Mineralocorticoides',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $antMineralocorticoides->id,
            'name' => 'Espironolactona',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 50,
            'dose_max' => 400,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $antMineralocorticoides->id,
            'name' => 'Esplerenona',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 25,
            'dose_max' => 50,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        //Diurético
        $diuretico = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'Diurético',
            'unit_type' => 1
        ]);
        //Diurético - Tiazidas y similares
        $tiazidas = Treatment::create([
            'treatment_id' => $diuretico->id,
            'name' => 'Tiazidas y similares',
            'unit_type' => 1
        ]);
        $tiazidas->drugReactions()->attach(DrugReaction::whereIn('id', array(11, 4, 12, 13))->get());
        Treatment::create([
            'treatment_id' => $tiazidas->id,
            'name' => 'Clortalidona',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 12.5,
            'dose_max' => 25,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $tiazidas->id,
            'name' => 'Indapamida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 1.25,
            'dose_max' => 2.5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $tiazidas->id,
            'name' => 'Hidroclorotiazida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 25,
            'dose_max' => 50,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $tiazidas->id,
            'name' => 'Metolazona',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 2.5,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Diurético - Asa
        $asa = Treatment::create([
            'treatment_id' => $diuretico->id,
            'name' => 'Asa',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $asa->id,
            'name' => 'Bumetamida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 0.5,
            'dose_max' => 2,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $asa->id,
            'name' => 'Furosemida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 20,
            'dose_max' => 80,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $asa->id,
            'name' => 'Torsemida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 5,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Diurético - Ant Recp mineralocorticoides
        $mine = Treatment::create([
            'treatment_id' => $diuretico->id,
            'name' => 'Ant Recp mineralocorticoides',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $mine->id,
            'name' => 'Amilorida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 5,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $mine->id,
            'name' => 'Espironolactona',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 25,
            'dose_max' => 100,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        //I SLGT-2
        $slgt = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'I SLGT-2',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Canagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 100,
            'dose_max' => 300,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Empagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Dapagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        //Terapias adicionales
        $terapy = Treatment::create([
            'treatment_id' => $antiHta->id,
            'name' => 'Terapias adicionales2',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $terapy->id,
            'name' => 'Hierro (endovenoso)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $terapy->id,
            'name' => 'Omecamtiv mecarbil',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $terapy->id,
            'name' => 'Vericiguat',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 1
        ]);
    }

    /**
     * Hipolipemiantes
     * @return void
     */
    private function _lipidLowering(): void
    {
        $lipid = Treatment::create([
            'name' => 'Hipolipemiantes',
            'unit_type' => 1
        ]);

        //Estatinas - statins
        $statins = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'Estatinas',
            'unit_type' => 1
        ]);
        $statins->drugReactions()->attach(DrugReaction::whereIn('id', array(14))->get());
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Atorvastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Lovastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 40,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Pravastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 40,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Simvastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 20,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Pitavastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2,
            'dose_max' => 4,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $statins->id,
            'name' => 'Rosuvastatina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 5,
            'dose_max' => 40,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //EZT
        $ezt = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'EZT',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        $ezt->drugReactions()->attach(DrugReaction::whereIn('id', array(14))->get());

        // Fibratos - fibrates
        $fibrates = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'Fibratos',
            'unit_type' => 1
        ]);
        $fibrates->drugReactions()->attach(DrugReaction::whereIn('id', array(14, 15, 16 , 18))->get());
        Treatment::create([
            'treatment_id' => $fibrates->id,
            'name' => 'Gembribrozil',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 900,
            'dose_max' => 1200,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $fibrates->id,
            'name' => 'Fenofibrato',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => false,
            'dose_min' => 100,
            'dose_max' => 300,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $fibrates->id,
            'name' => 'Bezafibrato',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => false,
            'dose_min' => 400,
            'dose_max' => 600,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $fibrates->id,
            'name' => 'Bezafibrato LP',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 400,
            'dose_max' => 600,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        // Omega 3
        $omega = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'Omega 3',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'EPA',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 500,
            'dose_max' => 1000,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'EPA-DHA',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 500,
            'dose_max' => 1000,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //  IPCSK9
        $ipcsk9 = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'IPCSK9',
            'unit_type' => 1
        ]);
        $evo = Treatment::create([
            'treatment_id' => $ipcsk9->id,
            'name' => 'Evolocumab',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 140,
            'dose_max' => 420,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        OtherFrequency::create([
            'treatment_id' => $evo->id,
            'name' => '1 cada 2 semanas - 1 vez al mes'
        ]);
        $boco = Treatment::create([
            'treatment_id' => $ipcsk9->id,
            'name' => 'Bococizumab (Inyectado)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 150,
            'dose_max' => 150,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        OtherFrequency::create([
            'treatment_id' => $boco->id,
            'name' => '1 cada 2 semanas'
        ]);
        $aliro = Treatment::create([
            'treatment_id' => $ipcsk9->id,
            'name' => 'Alirocumab (Inyectado)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 75,
            'dose_max' => 75,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        OtherFrequency::create([
            'treatment_id' => $aliro->id,
            'name' => '1 cada 2 semanas'
        ]);


        //Ácido bempedoico
        Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'Ácido bempedoico',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 180,
            'dose_max' => 180,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        // Inclisiran
        $incli = Treatment::create([
            'treatment_id' => $lipid->id,
            'name' => 'Inclisiran',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 284,
            'dose_max' => 284,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        OtherFrequency::create([
            'treatment_id' => $incli->id,
            'name' => 'Subcutáneo, 1 dosis , 2da dosis en tres meses y luego cada 6 meses'
        ]);
    }

    /**
     * @return void
     */
    private function _antiDiabetic(): void
    {
        // Antidiabéticos - Prediabetes
        $prediabetic = Treatment::create([
            'name' => 'Antidiabéticos - Prediabetes',
            'unit_type' => 1
        ]);
        $met1 = Treatment::create([
            'treatment_id' => $prediabetic->id,
            'name' => 'Metformina',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 250,
            'dose_max' => 500,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        $met1->drugReactions()->attach(DrugReaction::whereIn('id', array(18))->get());

        // Antidiabéticos - Diabetes
        $diabetic = Treatment::create([
            'name' => 'Antidiabéticos - Diabetes',
            'unit_type' => 1
        ]);
        //Metformina
        $met2 = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Metformina',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 500,
            'dose_max' => 850,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        $met2->drugReactions()->attach(DrugReaction::whereIn('id', array(18))->get());

        //Insulina - Insulin
        $insulin = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Insulina',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $insulin->id,
            'name' => 'Rápida (regular) - Plumas',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 3,
            'dose_max' => 15,
            'unit_type' => $this->unitsVolume->filter(fn($unit) => $unit->value === 'mL')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $insulin->id,
            'name' => 'Rápida (regular) - Vial',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->unitsVolume->filter(fn($unit) => $unit->value === 'mL')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $insulin->id,
            'name' => 'Intermedia: NPH',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->unitsVolume->filter(fn($unit) => $unit->value === 'mL')->first()->id
        ]);

        //Sulfonilúreas
        $sulfo = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Sulfonilúreas',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $sulfo->id,
            'name' => 'Glibenclamida (gliburida)',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2.5,
            'dose_max' => 15,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $sulfo->id,
            'name' => 'Gliclazida',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 30,
            'dose_max' => 120,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $sulfo->id,
            'name' => 'Glimepirida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2,
            'dose_max' => 8,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $sulfo->id,
            'name' => 'Glipizida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2.5,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $sulfo->id,
            'name' => 'Glisentida',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2.5,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Glinidas
        $glinidas = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Glinidas',
            'unit_type' => 1
        ]);
        $glinidas->drugReactions()->attach(DrugReaction::whereIn('id', array(19))->get());
        Treatment::create([
            'treatment_id' => $glinidas->id,
            'name' => 'Repaglinida',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => true,
            'frequency_qid' => true,
            'dose_min' => 4,
            'dose_max' => 16,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //Glitazonas
        $glitazonas = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Glitazonas',
            'unit_type' => 1
        ]);
        $glitazonas->drugReactions()->attach(DrugReaction::whereIn('id', array(10, 14, 20, 24, 23, 21,22))->get());
        Treatment::create([
            'treatment_id' => $glitazonas->id,
            'name' => 'Rosiglitazona',
            'frequency_qd' => true,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 4,
            'dose_max' => 8,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $glitazonas->id,
            'name' => 'Pioglitazona',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 15,
            'dose_max' => 45,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        // Inhibidores DPP-4 (I DPP-4)
        $iddp4 = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Inhibidores DPP-4 (I DPP-4)',
            'unit_type' => 1
        ]);
        $iddp4->drugReactions()->attach(DrugReaction::whereIn('id', array(10, 25, 26, 27, 28, 30, 29))->get());
        Treatment::create([
            'treatment_id' => $iddp4->id,
            'name' => 'Sitagliptina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 100,
            'dose_max' => 100,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iddp4->id,
            'name' => 'Saxagliptina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2.5,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iddp4->id,
            'name' => 'Alogliptina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 25,
            'dose_max' => 25,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iddp4->id,
            'name' => 'Vildagliptina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 50,
            'dose_max' => 50,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $iddp4->id,
            'name' => 'Linagliptina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 2.5,
            'dose_max' => 1000,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);

        //I SLGT-2
        $slgt = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'I SLGT-2',
            'unit_type' => 1
        ]);
        $slgt->drugReactions()->attach(DrugReaction::whereIn('id', array(31, 32, 33))->get());
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Canagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 100,
            'dose_max' => 300,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Empagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $slgt->id,
            'name' => 'Dapagliflozina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);


        // Ag Rec GLP-1
        $glp = Treatment::create([
            'treatment_id' => $diabetic->id,
            'name' => 'Ag Rec GLP-1',
            'unit_type' => 1
        ]);
        $glp->drugReactions()->attach(DrugReaction::whereIn('id', array(27, 26, 34))->get());
        $dula = Treatment::create([
            'treatment_id' => $glp->id,
            'name' => 'Dulaglutida',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $dula->id,
            'name' => '1 vez por semana'
        ]);

        $sema = Treatment::create([
            'treatment_id' => $glp->id,
            'name' => 'Semaglutida - Pluma',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $sema->id,
            'name' => 'La dosis inicial es 0,25 mg de semaglutida una vez a la semana. Después de 4 semanas, se debe incrementar la dosis a 0,5 mg una vez a la semana. Transcurridas al menos 4 semanas con una dosis de 0,5 mg una vez a la semana, esta se puede incrementar a 1 mg una vez a la semana para mejorar aún más el control glucémico. Después de un mínimo de 4 semanas con una dosis de 1 mg una vez a la semana, la dosis se puede aumentar a 2 mg una vez a la semana para mejorar aún más el control glucémico.'
        ]);

        $sema2 = Treatment::create([
            'treatment_id' => $glp->id,
            'name' => 'Semaglutida (Oral)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $sema2->id,
            'name' => '3 mg 1 diaria x mes , luego se aumenta a 7mg por un mes. Si se necesita se lleva a 14mg'
        ]);


    }

    /**
     * @return void
     */
    private function _antithrombotic(): void
    {
        $antiTrom = Treatment::create([
            'name' => 'Antitrombotico',
            'unit_type' => 1
        ]);
        //Antiagregantes plaquetarios
        $plaq = Treatment::create([
            'treatment_id' => $antiTrom->id,
            'name' => 'Antiagregantes plaquetarios',
            'unit_type' => 1
        ]);
        $plaq->drugReactions()->attach(DrugReaction::whereIn('id', array(35, 36, 37))->get());

        Treatment::create([
            'treatment_id' => $plaq->id,
            'name' => 'Aspirina',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 100,
            'dose_max' => 300,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $plaq->id,
            'name' => 'Plasugrel',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 10,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        $cloro = Treatment::create([
            'treatment_id' => $plaq->id,
            'name' => 'Clopidogrel',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $cloro->id,
            'name' => 'Dosis de carga de 300mg v.o., preferible 600mg.  Mantenimiento con 75mg/día'
        ]);

        $tica = Treatment::create([
            'treatment_id' => $plaq->id,
            'name' => 'Ticagrelor',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $tica->id,
            'name' => 'Dosis de carga 80 mg y se continúa con 90 mg dos veces al día.'
        ]);


        //Anticoagulantes Orales
        $plaqOral = Treatment::create([
            'treatment_id' => $antiTrom->id,
            'name' => 'Anticoagulantes Orales',
            'unit_type' => 1
        ]);
        Treatment::create([
            'treatment_id' => $plaqOral->id,
            'name' => 'Apixaban',
            'frequency_qd' => false,
            'frequency_bid' => true,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 5,
            'dose_max' => 5,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $plaqOral->id,
            'name' => 'Rivaroxaban',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 15,
            'dose_max' => 20,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $plaqOral->id,
            'name' => 'Dabigatran',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 75,
            'dose_max' => 150,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        Treatment::create([
            'treatment_id' => $plaqOral->id,
            'name' => 'Antagonista Viatamina K',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => 4,
            'dose_max' => 10,
            'unit_type' => $this->units->filter(fn($unit) => $unit->value === 'mg')->first()->id
        ]);
        $hepa = Treatment::create([
            'treatment_id' => $plaqOral->id,
            'name' => 'Heparina de bajo peso molecular',
            'frequency_qd' => true,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        OtherFrequency::create([
            'treatment_id' => $hepa->id,
            'name' => '1 mg/kg por vía subcutánea cada 12 horas o 1,5 mg/kg por vía subcutánea 1 vez al día'
        ]);
    }

    /**
     * @return void
     */
    private function _polypill(): void
    {
        $poli = Treatment::create([
            'name' => 'Polipíldora',
            'unit_type' => 1
        ]);

        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(20mg) / ramipril(2,5 mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(20mg) / ramipril( 5mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(20mg) / ramipril( 10mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(40mg) / ramipril( 2,5mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(40mg) / ramipril( 5mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
        Treatment::create([
            'treatment_id' => $poli->id,
            'name' => 'AAS (100mg) / atorvastatina(40mg) / ramipril( 10mg)',
            'frequency_qd' => false,
            'frequency_bid' => false,
            'frequency_tid' => false,
            'frequency_qid' => false,
            'dose_min' => null,
            'dose_max' => null,
            'unit_type' => 2
        ]);
    }
}

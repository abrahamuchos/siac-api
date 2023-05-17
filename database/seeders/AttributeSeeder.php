<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        /* Unidades de medición */

//      Others types
        Attribute::create([
            'name' => 'N/A'
        ]);
        Attribute::create([
            'name' => 'Mixto'
        ]);

//        Unidades de Peso - SI
        $weight = Attribute::create([
            'name' => 'Unidades de masa - SI'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'Kilogramo',
            'value' => 'kg'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'Hectogramo ',
            'value' => 'hg'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'Decagramo',
            'value' => 'dag'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'Gramo',
            'value' => 'g'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'decigramo',
            'value' => 'dg'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'centigramo',
            'value' => 'cg'
        ]);
        Attribute::create([
            'attribute_id' => $weight->id,
            'name' => 'miligramo',
            'value' => 'mg'
        ]);

//        Unidades de Peso - Sistema Ingles
        $weightEnglish = Attribute::create([
            'name' => 'Unidades de masa - Inglesa'
        ]);
        Attribute::create([
            'attribute_id' => $weightEnglish->id,
            'name' => 'Libra',
            'value' => 'lb'
        ]);
        Attribute::create([
            'attribute_id' => $weightEnglish->id,
            'name' => 'Onza',
            'value' => 'oz'
        ]);

//        Unidades de volumen - SI
        $volume = Attribute::create([
            'name' => 'Unidades de volumen - SI'
        ]);
        Attribute::create([
            'attribute_id' => $volume->id,
            'name' => 'Litro',
            'value' => 'L'
        ]);
        Attribute::create([
            'attribute_id' => $volume->id,
            'name' => 'decilitro',
            'value' => 'L'
        ]);
        Attribute::create([
            'attribute_id' => $volume->id,
            'name' => 'centilitro',
            'value' => 'cL'
        ]);
        Attribute::create([
            'attribute_id' => $volume->id,
            'name' => 'mililitro',
            'value' => 'mL'
        ]);

//        Unidades de longitud - SI
        $lonSI = Attribute::create([
            'name' => 'Unidades de longitud - SI'
        ]);
        Attribute::create([
            'attribute_id' => $lonSI->id,
            'name' => 'Metro',
            'value' => 'm'
        ]);
        Attribute::create([
            'attribute_id' => $lonSI->id,
            'name' => 'Centímetro',
            'value' => 'cm'
        ]);
        Attribute::create([
            'attribute_id' => $lonSI->id,
            'name' => 'milímetro',
            'value' => 'mm'
        ]);

//        Unidades de longitud - English
        $lonEnglish = Attribute::create([
            'name' => 'Unidades de longitud - Inglesa'
        ]);
        Attribute::create([
            'attribute_id' => $lonEnglish->id,
            'name' => 'Pie',
            'value' => 'ft'
        ]);
        Attribute::create([
            'attribute_id' => $lonEnglish->id,
            'name' => 'Pulgadas',
            'value' => 'in'
        ]);

//      Temp - SI
        $temp = Attribute::create([
            'name' => 'Unidades de temperatura - SI'
        ]);
        Attribute::create([
            'attribute_id' => $temp->id,
            'name' => 'grados Celsius',
            'value' => '°C'
        ]);

//        Temp - English
        $tempEnglish = Attribute::create([
            'name' => 'Unidades de temperatura - Inglesa'
        ]);
        Attribute::create([
            'attribute_id' => $tempEnglish->id,
            'name' => 'grados Fahrenheit',
            'value' => '°F'
        ]);

//        Unidades frecuencia cardiaca
        $unit = Attribute::create([
            'name' => 'Unidades de frecuencia cardíaca'
        ]);
        Attribute::create([
            'attribute_id' => $unit->id,
            'name' => 'Latidos por minuto',
            'value' => 'lat x min'
        ]);

//        Unidades de tiempo - SI
        $unitTime = Attribute::create([
            'name' => 'Unidades de tiempo - SI'
        ]);
        Attribute::create([
            'attribute_id' => $unitTime->id,
            'name' => 'segundo',
            'value' => 'seg'
        ]);
        Attribute::create([
            'attribute_id' => $unitTime->id,
            'name' => 'milisegundo',
            'value' => 'ms'
        ]);
        Attribute::create([
            'attribute_id' => $unitTime->id,
            'name' => 'microsegundo',
            'value' => 'µs'
        ]);
        Attribute::create([
            'attribute_id' => $unitTime->id,
            'name' => 'nanosegundo',
            'value' => 'ns'
        ]);

//      Otras unidades de medición
        $others = Attribute::create([
            'name' => 'Otras unidades de medición'
        ]);
        Attribute::create([
            'attribute_id' => $others->id,
            'name' => 'Grados',
            'value' => '°'
        ]);
        Attribute::create([
            'attribute_id' => $others->id,
            'name' => 'Revolución por minuto',
            'value' => 'rpm'
        ]);
        Attribute::create([
            'attribute_id' => $others->id,
            'name' => 'Milímetro de mercurio',
            'value' => 'mmHg'
        ]);
        Attribute::create([
            'attribute_id' => $others->id,
            'name' => 'Kilogramo por metro cuadrado',
            'value' => 'Kg/m2'
        ]);
        Attribute::create([
            'attribute_id' => $others->id,
            'name' => 'Metro cuadrado',
            'value' => 'm2'
        ]);
        /* End unidades de medición */


        // Tipo de documento
        $documentType = Attribute::create([
            'name' => 'Tipo de documento'
        ]);
        Attribute::create([
            'attribute_id' => $documentType->id,
            'name' => 'cédula de identidad',
            'value' => 'CI'
        ]);
        Attribute::create([
            'attribute_id' => $documentType->id,
            'name' => 'cédula de ciudadanía',
            'value' => 'CC'
        ]);
        Attribute::create([
            'attribute_id' => $documentType->id,
            'name' => 'Documento Nacional de Identidad',
            'value' => 'DNI'
        ]);
        Attribute::create([
            'attribute_id' => $documentType->id,
            'name' => 'Pasaporte',
            'value' => 'PAS'
        ]);
        Attribute::create([
            'attribute_id' => $documentType->id,
            'name' => 'Otro',
            'value' => 'Otro'
        ]);

        // Grade
        $grade = Attribute::create([
            'name' => 'Tipo de grado'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Doctor',
            'value' => 'Dr.'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Doctora',
            'value' => 'Dra.'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Licenciado',
            'value' => 'Lic.'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Licenciada',
            'value' => 'Lcda.'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Señor',
            'value' => 'Sr.'
        ]);
        Attribute::create([
            'attribute_id' => $grade->id,
            'name' => 'Señora',
            'value' => 'Sra.'
        ]);

        // Days
        $day = Attribute::create([
            'name' => 'Dias de la semana'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Lunes',
            'value' => 'Lun.'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Martes',
            'value' => 'Mar.'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Miércoles',
            'value' => 'Mié.'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Jueves',
            'value' => 'Jue'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Viernes',
            'value' => 'Vie.'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Sábado',
            'value' => 'Sáb.'
        ]);
        Attribute::create([
            'attribute_id' => $day->id,
            'name' => 'Domingo',
            'value' => 'Dom.'
        ]);

        // Blood type
        $blood = Attribute::create([
            'name' => 'Tipo de sangre'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'A positivo (A +)',
            'value' => 'A+'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'A negativo (A-)	',
            'value' => 'A-'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'B positivo (B +)	',
            'value' => 'B+'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'B negativo (B-)	',
            'value' => 'B-'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'AB positivo (AB+)	',
            'value' => 'AB+'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'AB negativo (AB-)',
            'value' => 'AB-'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'O positivo (O+)',
            'value' => 'O+'
        ]);
        Attribute::create([
            'attribute_id' => $blood->id,
            'name' => 'O negativo (O-)',
            'value' => 'O-'
        ]);

        // Race
        $race = Attribute::create([
            'name' => 'Razas/Etnicidad'
        ]);
        Attribute::create([
            'attribute_id' => $race->id,
            'name' => 'Caucásico',
        ]);
        Attribute::create([
            'attribute_id' => $race->id,
            'name' => 'Afroamericano',
        ]);
        Attribute::create([
            'attribute_id' => $race->id,
            'name' => 'Afrocaribeño',
        ]);
        Attribute::create([
            'attribute_id' => $race->id,
            'name' => 'Indígena',
        ]);
        Attribute::create([
            'attribute_id' => $race->id,
            'name' => 'Mestizo',
        ]);

        // Cancelar Cita
        $reason = Attribute::create([
            'name' => 'Razones para cancelar cita'
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'No asistió',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Razones económicas',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'No se pudo contactar',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Se mudó de ciudad',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Falleció',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Está hospitalizado',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Salió de viaje',
        ]);
        Attribute::create([
            'attribute_id' => $reason->id,
            'name' => 'Otras razones',
        ]);

//        Tiempo de diagnostico
        $time = Attribute::create([
            'name' => 'Tiempo de diagnostico'
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => 'Menos de un año',
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => 'Entre 1 y 2 años',
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => '3 a 4 años',
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => '4 a 5 años',
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => '5 a 10 años',
        ]);
        Attribute::create([
            'attribute_id' => $time->id,
            'name' => 'Más de 10 años',
        ]);

//        Parentesco
        $kinship = Attribute::create([
            'name' => 'Parentesco'
        ]);
        Attribute::create([
            'attribute_id' => $kinship->id,
            'name' => 'Padre',
        ]);
        Attribute::create([
            'attribute_id' => $kinship->id,
            'name' => 'Madre',
        ]);
        Attribute::create([
            'attribute_id' => $kinship->id,
            'name' => 'Hermano',
        ]);
        Attribute::create([
            'attribute_id' => $kinship->id,
            'name' => 'Hermana',
        ]);

//        Números, (Puentes, Vaso, Stend)
        $numbers = Attribute::create([
            'name' => 'Numeros (opciones)'
        ]);
        Attribute::create([
            'attribute_id' => $numbers->id,
            'name' => '1',
        ]);
        Attribute::create([
            'attribute_id' => $numbers->id,
            'name' => '2',
        ]);
        Attribute::create([
            'attribute_id' => $numbers->id,
            'name' => '3',
        ]);
        Attribute::create([
            'attribute_id' => $numbers->id,
            'name' => '+3',
        ]);

//         Enfermedad Arterial Periférica - Territorio
        $territory = Attribute::create([
            'name' => 'Enfermedad Arterial Periférica - Territorio'
        ]);
        Attribute::create([
            'attribute_id' => $territory->id,
            'name' => 'Lorem ipsum',
        ]);
        Attribute::create([
            'attribute_id' => $territory->id,
            'name' => 'Nam nec laoreet leo',
        ]);

//        Aspecto general
        $aspect = Attribute::create([
            'name' => 'Aspecto General'
        ]);
        Attribute::create([
            'attribute_id' => $aspect->id,
            'name' => 'Bueno',
        ]);
        Attribute::create([
            'attribute_id' => $aspect->id,
            'name' => 'Regular',
        ]);
        Attribute::create([
            'attribute_id' => $aspect->id,
            'name' => 'Mal',
        ]);

//      Apex caractaristicas
        $apex = Attribute::create([
            'name' => 'Apex Características'
        ]);
        Attribute::create([
            'attribute_id' => $apex->id,
            'name' => 'Normokinético',
        ]);
        Attribute::create([
            'attribute_id' => $apex->id,
            'name' => 'Sostenido',
        ]);
        Attribute::create([
            'attribute_id' => $apex->id,
            'name' => 'Hiperdinámico',
        ]);

//        Auscultación R1 y R2
        $aus = Attribute::create([
            'name' => 'Auscultación R1 y R2'
        ]);
        Attribute::create([
            'attribute_id' => $aus->id,
            'name' => '',
        ]);
        Attribute::create([
            'attribute_id' => $aus->id,
            'name' => 'Único',
        ]);
        Attribute::create([
            'attribute_id' => $aus->id,
            'name' => 'Desdoblado',
        ]);

//        Tipos de soplos (breath)
        $breaht = Attribute::create([
            'name' => 'Tipo de soplos'
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Sistólico',
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Diastólico',
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Continuo',
        ]);

//        Tipos de focos (breath)
        $focus = Attribute::create([
            'name' => 'Tipo de focos (soplos)'
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Aórtico',
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Mitral',
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Tricuspideo',
        ]);
        Attribute::create([
            'attribute_id' => $breaht->id,
            'name' => 'Pulmonar',
        ]);


//        Tipo de ejercicios
        $exercise = Attribute::create([
            'name' => 'Unidades de tiempo - SI'
        ]);
        Attribute::create([
            'attribute_id' => $exercise->id,
            'name' => 'Aeróbico',
        ]);
        Attribute::create([
            'attribute_id' => $exercise->id,
            'name' => 'Resistencia',
        ]);

//      HTA riesgo
        $htaRisk = Attribute::create([
            'name' => 'HTA riesgo'
        ]);
        Attribute::create([
            'attribute_id' => $htaRisk->id,
            'name' => 'Leve',
        ]);
        Attribute::create([
            'attribute_id' => $htaRisk->id,
            'name' => 'Moderado',
        ]);
        Attribute::create([
            'attribute_id' => $htaRisk->id,
            'name' => 'Alto',
        ]);
        Attribute::create([
            'attribute_id' => $htaRisk->id,
            'name' => 'Muy Alto',
        ]);

//        Tipo dislipidemia
        $dysRisk = Attribute::create([
            'name' => 'Tipo dislipidemia'
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => 'Predominio LDL',
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => 'Aterogénica',
        ]);

//        Tipo de tabaco
        $tobacco = Attribute::create([
            'name' => 'Tipo tabaco'
        ]);
        Attribute::create([
            'attribute_id' => $tobacco->id,
            'name' => 'Cigarrillo',
        ]);
        Attribute::create([
            'attribute_id' => $tobacco->id,
            'name' => 'Vaper',
        ]);
        Attribute::create([
            'attribute_id' => $tobacco->id,
            'name' => 'Masticable',
        ]);
        Attribute::create([
            'attribute_id' => $tobacco->id,
            'name' => 'Pipa de agua',
        ]);
        Attribute::create([
            'attribute_id' => $tobacco->id,
            'name' => 'Otros',
        ]);

//        Opciones interheart
        $interHeart = Attribute::create([
            'name' => 'Opciones para el riesgo inter heart'
        ]);
        $tabaco = Attribute::create([
            'attribute_id' => $interHeart->id,
            'name' => '¿El paciente consume tabaco?',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $tabaco->id,
            'name' => 'Fui fumador (No ha fumado en los ultimos 12 meses)',
            'value' => 2,
        ]);
        $question = Attribute::create([
            'attribute_id' => $tabaco->id,
            'name' => 'Soy fumador actual o fumo con regularidad en los ultimos 12 meses',
        ]);
        Attribute::create([
            'attribute_id' => $question->id,
            'name' => '1 - 5 cigarros al dia',
            'value' => 2,
        ]);
        Attribute::create([
            'attribute_id' => $question->id,
            'name' => '6 - 10 cigarros al dia',
            'value' => 4,
        ]);
        Attribute::create([
            'attribute_id' => $question->id,
            'name' => '11 - 15 cigarros al dia',
            'value' => 6,
        ]);
        Attribute::create([
            'attribute_id' => $question->id,
            'name' => '16  - 20 cigarros al dia',
            'value' => 7,
        ]);
        Attribute::create([
            'attribute_id' => $question->id,
            'name' => 'Mas de 20 cigarros al dia',
            'value' => 11,
        ]);
        $question2 = Attribute::create([
            'attribute_id' => $interHeart->id,
            'name' => 'En los ultimos 12 meses,  a estado expuesto al humo del cigarro de otras personas?',
        ]);
        Attribute::create([
            'attribute_id' => $question2->id,
            'name' => 'No ha estado expuesto',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $question2->id,
            'name' => 'Expuesto menos de 1 hora semanal',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $question2->id,
            'name' => 'Expuesto 1 hora o mas semanal',
            'value' => 2,
        ]);
        $waist = Attribute::create([
            'attribute_id' => $interHeart->id,
            'name' => 'Relacion cintura - cadera',
        ]);
        Attribute::create([
            'attribute_id' => $waist->id,
            'name' => 'Cuartil 1: menor a 0,873',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $waist->id,
            'name' => 'Cuartil 2 y 3: 0,873 - 0,963',
            'value' => 2,
        ]);
        Attribute::create([
            'attribute_id' => $waist->id,
            'name' => 'Cuartil 4: mayor a 0,964',
            'value' => 4,
        ]);
        $stress = Attribute::create([
            'attribute_id' => $interHeart->id,
            'name' => 'Cuanto estres ha sentido en su trabajo y en casa en el ultimo año?',
        ]);
        Attribute::create([
            'attribute_id' => $stress->id,
            'name' => 'Ninguno o muy poco periodos',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $stress->id,
            'name' => 'Varios periodos o estres permanente',
            'value' => 3,
        ]);

//        Find risk opciones
        $findRisk = Attribute::create([
            'name' => 'Opciones para find risk'
        ]);
        $activity = Attribute::create([
            'attribute_id' => $findRisk->id,
            'name' => 'Actividad física'
        ]);
        Attribute::create([
            'attribute_id' => $activity->id,
            'name' => 'Mas o igual de 4h semanales',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $activity->id,
            'name' => 'Menos de 4h semanales',
            'value' => 2,
        ]);
        $diabetes = Attribute::create([
            'attribute_id' => $findRisk->id,
            'name' => 'Actividad física'
        ]);
        Attribute::create([
            'attribute_id' => $diabetes->id,
            'name' => 'No',
            'value' => 0,
        ]);
        Attribute::create([
            'attribute_id' => $diabetes->id,
            'name' => 'Sí, familiar de segundo grado',
            'value' => 3,
        ]);
        Attribute::create([
            'attribute_id' => $diabetes->id,
            'name' => 'Sí, familiar de primer grado',
            'value' => 5,
        ]);

//        Opciones para dislipidemia aterogénica
        $dyslipidemia = Attribute::create([
            'name' => 'Opciones para dislipidemia aterogénica (Algoritmo)'
        ]);
        $cvr = Attribute::create([
            'attribute_id' => $dyslipidemia->id,
            'name' => 'RCV (Riesgo cardiovascular)',
        ]);
        Attribute::create([
            'attribute_id' => $cvr->id,
            'name' => 'Moderado',
        ]);
        Attribute::create([
            'attribute_id' => $cvr->id,
            'name' => 'Alto',
        ]);
        Attribute::create([
            'attribute_id' => $cvr->id,
            'name' => 'Muy alto RCV, diabetes o ECV',
        ]);
        $result = Attribute::create([
            'attribute_id' => $dyslipidemia->id,
            'name' => 'Resultado',
        ]);
        Attribute::create([
            'attribute_id' => $result->id,
            'name' => 'Intensificar cambios estilo de vida + estatina. No cumple objetivos TG y cHDL añadir fenofibrato',
        ]);
        Attribute::create([
            'attribute_id' => $result->id,
            'name' => 'Estatina + fenofibrato',
        ]);

//        Dyslipidemia to reduce residual risk
        $dyslipidemiaResidual = Attribute::create([
            'name' => 'Opciones para dislipidemia aterogénica (Algoritmo)'
        ]);
        $dysRisk = Attribute::create([
            'attribute_id' => $dyslipidemiaResidual->id,
            'name' => 'Indique el riesgo del paciente',
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => 'cLDL Menor igual a 70 mg/dL (Alto riesgo)',
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => 'cLDL Menor igual a 55 mg/dL (Muy alto riesgo)',
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => '¿Ha tenido un evento nuevo a pesar de su Tto. con estatinas? cLDL menor igual a 55 mg/dL ',
        ]);
        Attribute::create([
            'attribute_id' => $dysRisk->id,
            'name' => 'Ninguna de las anteriores',
        ]);
        $dysResult = Attribute::create([
            'attribute_id' => $dyslipidemiaResidual->id,
            'name' => 'Resultado',
        ]);
        Attribute::create([
            'attribute_id' => $dysResult->id,
            'name' => 'EPA,  Fibratos',
        ]);
        Attribute::create([
            'attribute_id' => $dysResult->id,
            'name' => 'Mantener Tto. por un periodo de tiempo indefinido',
        ]);
        Attribute::create([
            'attribute_id' => $dysResult->id,
            'name' => 'PCSK9i, EZT',
        ]);

//        Has Bled
        $hasBled = Attribute::create([
            'name' => 'Opciones para Has Bled'
        ]);
        $hasBledRisk = Attribute::create([
            'attribute_id' => $hasBled->id,
            'name' => 'Riesgo',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRisk->id,
            'name' => 'Relativamente Bajo',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRisk->id,
            'name' => 'Moderado',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRisk->id,
            'name' => 'Alto',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRisk->id,
            'name' => 'Muy Alto',
        ]);
        $hasBledRecommendation = Attribute::create([
            'attribute_id' => $hasBled->id,
            'name' => 'Riesgo',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRecommendation->id,
            'name' => 'Se debe considerar la anticoagulación',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRecommendation->id,
            'name' => 'Se puede considerar la anticoagulación',
        ]);
        Attribute::create([
            'attribute_id' => $hasBledRecommendation->id,
            'name' => 'Se deben considerar alternativas a la anticoagulación',
        ]);

//        Test de Fagerstrom
        $testFar = Attribute::create([
            'name' => 'Opciones para Test de Fagerstrom'
        ]);
        $cigarTime = Attribute::create([
            'attribute_id' => $testFar->id,
            'name' => '¿Cuánto tiempo pasa entre que se levanta y se fuma su primer cigarrillo?',
        ]);
        Attribute::create([
            'attribute_id' => $cigarTime->id,
            'name' => 'Hasta 5 minutos',
        ]);
        Attribute::create([
            'attribute_id' => $cigarTime->id,
            'name' => 'De 6 a 30 minutos',
        ]);
        Attribute::create([
            'attribute_id' => $cigarTime->id,
            'name' => 'De 31 a 60 minutos',
        ]);
        Attribute::create([
            'attribute_id' => $cigarTime->id,
            'name' => 'Más de 60 minutos',
        ]);
        $cigarPerDay = Attribute::create([
            'attribute_id' => $testFar->id,
            'name' => '¿Cuánto tiempo pasa entre que se levanta y se fuma su primer cigarrillo?',
        ]);
        Attribute::create([
            'attribute_id' => $cigarPerDay->id,
            'name' => 'Menos de 10 cigarrillos/día',
        ]);
        Attribute::create([
            'attribute_id' => $cigarPerDay->id,
            'name' => 'Entre 11 y 20 cigarrillos/día',
        ]);
        Attribute::create([
            'attribute_id' => $cigarPerDay->id,
            'name' => 'Entre 21 y 30 cigarrillos/día',
        ]);
        Attribute::create([
            'attribute_id' => $cigarPerDay->id,
            'name' => '31 o más cigarrillos',
        ]);
        $cigarDislike = Attribute::create([
            'attribute_id' => $testFar->id,
            'name' => '¿Qué cigarrillo le desagrada más dejar de fumar? (Options)',
        ]);
        Attribute::create([
            'attribute_id' => $cigarDislike->id,
            'name' => 'El primero de la mañana',
        ]);
        Attribute::create([
            'attribute_id' => $cigarDislike->id,
            'name' => 'Cualquier otro',
        ]);


    }


}

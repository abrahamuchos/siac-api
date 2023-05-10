<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\ConsultationHour;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class ConsultationHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $doctors = User::whereHas('roles', function(Builder $query){
           return $query->where('id', '=' ,Role::MD_ROLE);
        })->get();

        $days = Attribute::whereAttributeId('56')->get();
        $fakeStartHour = Array ('08:00:00', '09:00:00', '10:15:00', '11:15:00');
        $fakeEndHour = Array ('17:00:00', '18:00:00', '18:30:00', '19:15:00');

        foreach ($doctors as $doctor){
            foreach ($days as $day){
                ConsultationHour::factory()
                    ->create([
                        'doctor_id' => $doctor->id,
                        'day_type' => $day->id,
                        'start_time' => $fakeStartHour[array_rand($fakeStartHour)],
                        'end_time' => $fakeEndHour[array_rand($fakeEndHour)]
                    ]);
            }

        }

    }
}

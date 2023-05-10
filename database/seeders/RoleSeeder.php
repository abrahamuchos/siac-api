<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'Unidad médica (Um)'
        ]);
        Role::create([
            'name' => 'doctor (Md)'
        ]);
        Role::create([
            'name' => 'Asistente médica (As)'
        ]);
        Role::create([
            'name' => 'Secretaria (S)'
        ]);

    }
}

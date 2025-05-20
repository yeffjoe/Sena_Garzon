<?php

namespace Database\Seeders;

// database/seeders/RoleSeeder.php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'Aprendiz']);
        Role::create(['name' => 'Instructor']);
        Role::create(['name' => 'Administrador']);
    }
}

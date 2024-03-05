<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. Datos de relleno
     */
    public function run(): void
    {
        // $this->call(CursoSeeder::class); Solo usar cuando se quiera llenar la base de datos con datos propio y no generados automatiamente con el comendo php artisan migrate:fresh --seed
        Curso::factory(50)->create();
        User::Factory(10)->create();
    }
}

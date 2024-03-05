<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $curso = new Curso();
        // $curso->name = 'Laravel';
        // $curso->descripcion = 'El mejor framework de PhP';
        // $curso->categoria = 'Desarrollo web';
        // $curso-> save();
        Curso::factory(50)->create();

    }
}

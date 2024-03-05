<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Termwind\Components\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Curso::class;

    public function definition(): array
    {
        return [
            'name' => $this-> faker->sentence(),
            'slug' => $this->faker->slug(),
            'descripcion' => $this-> faker->Paragraph(),
            'categoria' => $this-> faker-> randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}

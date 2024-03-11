<?php

namespace Database\Factories;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titolo' => $this->faker->sentence(1),
            'autore' => $this->faker->name(),
            'anno' => $this->faker->year(),
            'prezzo' => $this->faker->randomFloat(2, 0, 100),
            'categoria_id' => Categoria::get()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = ['Docente', 'Direccion', 'No Docente', 'Auxiliar', 'Administrativo'];

        return [
            'idPuesto' => $this->faker->bothify("???####"),
            'nombre' => $this->faker->jobTitle(),
            'tipo' => $this->faker->randomElement($tipos),
        ];
    }
}

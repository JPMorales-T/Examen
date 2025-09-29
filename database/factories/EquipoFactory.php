<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cliente;
use App\Models\Marca;
use App\Models\Modelo;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $modelo = Modelo::first();
        if (!$modelo) {
            $modelo = Modelo::factory()->create();
        }

        return [
            'numero_serie' => $this->faker->text($this->faker->numberBetween(5, 45)),
            'cliente_id' => $this->faker->word,
            'modelo_id' => $this->faker->word,
            'marca_id' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Estado;
use App\Models\Tecnico;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $tecnico = Tecnico::first();
        if (!$tecnico) {
            $tecnico = Tecnico::factory()->create();
        }

        return [
            'fecha' => $this->faker->date('Y-m-d'),
            'diagnostico' => $this->faker->text($this->faker->numberBetween(5, 16777215)),
            'solucion' => $this->faker->text($this->faker->numberBetween(5, 16777215)),
            'estado_id' => $this->faker->word,
            'tecnico_id' => $this->faker->word,
            'cliente_id' => $this->faker->word,
            'equipo_id' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

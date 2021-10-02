<?php

namespace Database\Factories;

use App\Models\WifiSpot;
use Illuminate\Database\Eloquent\Factories\Factory;

class WifiSpotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WifiSpot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $images = ['images/oobukeeki.jpeg', 'images/sarada.jpeg', 'images/yui.jpeg', 'images/noreguret.jpeg'];

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'image_url' => 'images/oobukeeki.jpeg',
            'hp_url' => 'https://www.jreast.co.jp/estation/stations/341.html',
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    }
}

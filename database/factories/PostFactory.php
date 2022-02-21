<?php

namespace Database\Factories;

use App\Models\Website;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'website_id' => fn () => Website::factory()->create()->id,
            'title' => $this->faker->realText(100),
            'description' => $this->faker->realText(500)
        ];
    }
}

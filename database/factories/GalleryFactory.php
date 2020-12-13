<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = \App\Models\User::factory()->create();
        $name = $this->faker->sentence(2);
        return [
            'user_id'   => $user->id,
            'name'      => $name,
            'slug'      => \Illuminate\Support\Str::slug($name),
        ];
    }
}

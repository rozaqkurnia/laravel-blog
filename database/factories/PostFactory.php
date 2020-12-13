<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user   = User::factory()->create();
        $title  = $this->faker->sentence();
        $body   = $this->faker->paragraph();
        return [
            'title'         => $title,
            'slug'          => \Illuminate\Support\Str::slug($title),
            'post_type'     => 'post',
            'published_at'  => date('Y-m-d H:i:s'),
            'status'        => 'publish',
            'body'          => $body,
            'user_id'       => $user->id,
        ];
    }
}

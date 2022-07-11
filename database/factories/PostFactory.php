<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 12)),
            'slug' => $this->faker->slug(),
            'desc' => $this->faker->paragraph(5, 10),
            'keywords' => $this->faker->paragraph(),
            'meta_desc' => $this->faker->paragraph(),
            'category_id' => 1,
        ];
    }
}
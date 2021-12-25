<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = DB::table('users')->count();
        $category = DB::table('categories')->count();

        return [
            'title' => $this->faker->sentence(2),
            'body' => $this->faker->sentence(20),
            'user_id' => rand(1,$user),
            'category_id' => rand(1,$category),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}

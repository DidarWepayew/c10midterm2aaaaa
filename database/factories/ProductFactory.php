<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $name_tm = fake()->streetName();
        $name_ru = null;
        $name_en = null;
        $isSold = fake()->boolean(30);
        $isHard = fake()->boolean(50);
        $isLanguage = fake()->boolean(50);
        return [
            'brand_id' => $brand->id,
            'category_id' => $category->id,
            'name_tm' => $name_tm,
            'name_ru' => $name_ru ? $name_ru : $name_tm,
            'name_en' => $name_en ,
            'image' => 'https://play-lh.googleusercontent.com/_tslXR7zUXgzpiZI9t70ywHqWAxwMi8LLSfx8Ab4Mq4NUTHMjFNxVMwTM1G0Q-XNU80',
            'description_tm' => fake()->paragraph(),
            'price' => rand(400, 1200),
            'sold' => $isSold,
            'barcode' => fake()->isbn13()

        ];
    }
}

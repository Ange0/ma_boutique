<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

       for ($i=0; $i < 30; $i++) {
            Product::create([
                'name' => $faker->sentence(2),
                'slug' =>  $faker->slug,
                'subtitle' => $faker->sentence(10),
                'description' => $faker->text,
                'price' => $faker->numberBetween(10, 300) * 100,
                'image' => 'https://via.placeholder.com/250'

            ]);
       }
    }
}

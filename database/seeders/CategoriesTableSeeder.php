<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10; $i++) {

            Category::create([
                 'name' => $faker->sentence(2),
                 'slug' =>  $faker->slug,
             ]);
        }
    }
}

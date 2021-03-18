<?php

namespace Database\Seeders;

use App\Models\Tag;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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

            Tag::create([
                 'name' => $faker->sentence(2),
                 'slug' =>  $faker->slug,
             ]);
        }
    }
}

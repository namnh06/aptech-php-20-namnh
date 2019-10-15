<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                "title" => $faker->sentence($nbWords = 3, $variableNbWords = true),
                "description" => $faker->sentence($nbWords = 12, $variableNbWords = true),
                "content" => $faker->sentence($nbWords = 20, $variableNbWords = true),
                "category_id" => 1
            ]);
        }
    }
}
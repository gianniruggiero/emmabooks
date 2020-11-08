<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newAuthor = new Author();
            $newAuthor->name = $faker->firstName();
            $newAuthor->lastname = $faker->lastName;
            $newAuthor->save();
        }
        
    }
}

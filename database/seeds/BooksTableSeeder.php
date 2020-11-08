<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Genre;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        
        for ($i=0; $i < 10; $i++) { 

            $genre = Genre::inRandomOrder()->first();
            $newBook = new Book();
            $newBook->genre_id = $genre->id;
            $newBook->title = $faker->text(60);
            $newBook->edition = $faker->word;
            $newBook->isbn = $faker->numerify('###-#-##-######-#');
            $newBook->pages = $faker->numberBetween(180, 1000);
            $newBook->year = $faker->year('now');
            $newBook->vote = $faker->numberBetween(1, 10);
            $newBook->quote = $faker->sentence(15, true);
            $newBook->note = $faker->text(1350);
            if (rand(0,1)) {
                $newBook->cover = $faker->imageUrl(200, 300, 'COPERTINA DEL LIBRO'); 
            }
            $newBook->save();
        }
    }
}

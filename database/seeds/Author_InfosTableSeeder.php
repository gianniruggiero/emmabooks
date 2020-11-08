<?php

use Illuminate\Database\Seeder;
use App\Author_Info;
use App\Author;
use Faker\Generator as Faker;

class Author_InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();
        
        foreach ($authors as $author) {
            // crea una nuova istanza del model
            $newAuthorInfo = new Author_Info();
            // riempe i campi del record con dati fake       
            $newAuthorInfo->author_id = $author->id;
            $newAuthorInfo->nationality = $faker->country;
            $newAuthorInfo->date_of_birth = $faker->date('Y-m-d', 'now');
            $newAuthorInfo->bio = $faker->text(1400);
            if (rand(0,1)) {
                $newAuthorInfo->photo = $faker->imageUrl(200, 300, 'AUTORE');
            }
            $newAuthorInfo->quote = $faker->text(100);
            //salva il record nel DB
            $newAuthorInfo->save();
        }
    }
}

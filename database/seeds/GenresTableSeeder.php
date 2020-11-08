<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genresArray = [
            "biografia",
            "fantasy",
            "classico",
            "fumetto",
            "comedy",
            "narrativa",
            "storia",
            "epica",
            "geografia"
        ];

        foreach ($genresArray as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            $newGenre->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorsTableSeeder::class,
            Author_InfosTableSeeder::class,
            GenresTableSeeder::class,
            BooksTableSeeder::class,
            LoansTableSeeder::class,
            TagsTableSeeder::class,
            Tags_BooksTableSeeder::class,
            Authors_BooksTableSeeder::class,
        ]);
    }
}

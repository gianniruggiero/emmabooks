<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;

class Authors_BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        foreach ($books as $book) {
            $newAuthor = Author::inRandomOrder()->first();
            $book->authors()->attach($newAuthor->id);
        }
    }
}

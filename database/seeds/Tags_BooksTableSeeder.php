<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Tag;

class Tags_BooksTableSeeder extends Seeder
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
            $newTag = Tag::inRandomOrder()->first();
            $book->tags()->attach($newTag->id);
        }
    }
}

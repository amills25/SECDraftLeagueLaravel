<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use App\Models\BookAuthor;
use Illuminate\Database\Seeder;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all()->toArray();
        for ($i = 0; $i < count($books); $i++) {
            $authors = Author::all()->random();
            $bookAuthor = new BookAuthor();
            $bookAuthor->book_id = $books[$i]['id'];
            $bookAuthor->author_id = $authors->id;
            $bookAuthor->save();
        }
    }
}

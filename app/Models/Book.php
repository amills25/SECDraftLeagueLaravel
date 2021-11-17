<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['name', 'description', 'publication_year', 'isbn'];

    public function author()
    {
        return $this->hasManyThrough(
            '\App\Models\Author',
            '\App\Models\BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id',
            'isbn'
        );
    }
}

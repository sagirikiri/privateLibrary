<?php

namespace App\UseCase;

use App\Models\Book;

class BookList
{
    public function getData()
    {
        $books = Book::all();

        $data = collect();
        foreach ($books as $book) {
            $data->push([
                'id' => $book->id,
                'name' => $book->name,
                'author' => $book->author,
                'publication' => $book->publication,
                'borrowing_state' => true,
                'cover_photo' => $book->cover_photo,
            ]);
        }

        return $data;
    }
}
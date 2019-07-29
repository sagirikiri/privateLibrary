<?php

namespace App\UseCase;

use App\Models\Book;

class getBookList
{
    /**
     * 書籍一覧ページにJSONデータを渡す
     *
     * @return \Illuminate\Support\Collection
     */
    public function getData()
    {
        $books = Book::all();

        $borrowingState = new getBorrowingState();

        $data = collect();
        foreach ($books as $book) {
            $data->push([
                'id' => $book->id,
                'name' => $book->name,
                'author' => $book->author,
                'publication' => $book->publication,
                'borrowing_state' => $borrowingState->getState($book),
                'cover_photo' => $book->cover_photo,
            ]);
        }

        return $data;
    }
}
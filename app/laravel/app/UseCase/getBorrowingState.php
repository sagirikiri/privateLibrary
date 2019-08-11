<?php

namespace App\UseCase;

use App\Models\Book;
use App\Models\BorrowingInformation;

class getBorrowingState
{
    /**
     * @param Book $book 書籍エンティティ
     * @return bool 本の貸し借りのステータスを返す
     */
    public function getState(Book $book)
    {
        $borrowingInformation = new BorrowingInformation();

        $countBorrowing = $borrowingInformation->query()->where('book_id', $book->id)->count();

        return ($book->number - $countBorrowing) > 0 ? true : false;
    }
}


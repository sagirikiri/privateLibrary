<?php

namespace App\UseCase;

use App\Models\Book;
use App\Models\BorrowingInformations;

class getBorrowingState
{
    public function getState(Book $book)
    {
        $borrowingInformations = new BorrowingInformations();

        $countBorrowing = $borrowingInformations->query()->where('book_id', $book->id)->count();

        return ($book->number - $countBorrowing) > 0 ? true : false;
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookDetailController
{
    public function getBookDetailMock(Request $request, $book_id)
    {
        return response()->json([
            'id' => $book_id,
            'name' => 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
            'description' => 'すがが好きなやつ',
            'author' => '赤坂アカ',
            'publication' => '2016/03/18',
            'borrowing_state' => 'true',
            'cover_photo' => 'kaguya1.jpg',
            'return_day' => '2016/03/18'

        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}

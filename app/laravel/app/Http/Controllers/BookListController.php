<?php

namespace App\Http\Controllers;

class BookListController {

    public function getBookListMock()
    {
        /**
         * borrowing_state true:貸し出せる, false:貸し出せない
         */
        return response()->json([
            'id' => '1',
            'name' => 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
            'author' => '赤坂アカ',
            'publication' => '2016/03/18',
            'borrowing_state' => 'true',
            'cover_photo' => 'kaguya1.jpg'

        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}

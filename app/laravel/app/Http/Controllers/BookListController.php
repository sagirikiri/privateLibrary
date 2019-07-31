<?php

namespace App\Http\Controllers;

use App\UseCase\getBookList;

class BookListController {

    public function getBookListMock()
    {
        /**
         * borrowing_state true:貸し出せる, false:貸し出せない
         */
        $mocks = collect();
        for($i = 1; $i < rand(10, 50); $i++) {
            $mocks->push([
                'id' => $i,
                'name' => 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
                'author' => '赤坂アカ',
                'publication' => '2016/03/18',
                'borrowing_state' => 'true',
                'cover_photo' => 'https://unsplash.it/150/300?image='.rand(1, 80)
            ]);
        }
        return response()->json(['data' => $mocks]);
    }

    /**
     * 本のリストを取得する
     *
     * @return mixed
     */
    public function getBookList()
    {
        $bookList = new getBookList();

        $data = $bookList->getData();

        return response()->json(['data' => $data]);
    }
}

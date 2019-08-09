<?php

namespace App\Http\Controllers;

use App\UseCase\getBookDetail;
use Illuminate\Http\Request;

class BookDetailController
{
    /**
     * 書斎詳細ページに必要なデータのMock
     *
     * @param Request $request
     * @param $book_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBookDetailMock(Request $request, $book_id)
    {
        $mock = [
            'id' => $book_id,
            'name' => 'かぐや様は告らせたい～天才たちの恋愛頭脳戦～',
            'description' => 'すがが好きなやつ。『かぐや様は告らせたい〜天才たちの恋愛頭脳戦〜』は、赤坂アカによる日本の漫画作品。通称『かぐや様』。『ミラクルジャンプ』にて2015年6月号から2016年2月号まで連載された。その後、掲載誌を『週刊ヤングジャンプ』に移し、同年17号より連載中。シリーズ累計発行部数は2019年5月の時点で700万部を達成。',
            'author' => '赤坂アカ',
            'publication' => '2016/03/18',
            'borrowing_state' => 'true',
            'cover_photo' => 'https://unsplash.it/150/300?image='.rand(1, 80),
            'return_day' => '2016/03/18'
        ];
        return response()->json(['data' => $mock]);
    }

    /**
     * 書籍詳細ページに必要なデータをJSON形式で取得する
     *
     * @param Request $request
     * @param $book_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBookDetail(Request $request, $book_id)
    {
        $bookDetail = new getBookDetail();

        return response()->json(['data' => $bookDetail->getData()]);

    }
}

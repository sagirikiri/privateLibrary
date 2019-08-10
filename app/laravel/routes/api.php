<?php

Route::get('/v1/bookList', 'BookListController@getBookList');
Route::get('/v1/bookDetail/{book_id}', 'BookDetailController@getBookDetail');

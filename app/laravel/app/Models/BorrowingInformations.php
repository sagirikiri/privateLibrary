<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowingInformations extends Model
{
    protected $guarded = [
        'id',
        'book_id',
        'user_id'
    ];
}

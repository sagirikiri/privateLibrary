<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * Class BorrowingInformation
 * @package App\Models
 */
class BorrowingInformation extends Model
{
    protected $guarded = [
        'id',
        'book_id',
        'user_id'
    ];
}

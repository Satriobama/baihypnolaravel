<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fullname',
        'nickname',
        'birthday',
        'email',
        'phone',
        'address',
        'day_consultation'
    ];
}

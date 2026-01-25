<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersReview extends Model
{
    protected $table = 'customers_reviews';

    protected $fillable = [
        'name',
        'rating',
        'reviews'
    ];
}

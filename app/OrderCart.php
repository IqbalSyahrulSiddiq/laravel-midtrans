<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{
    protected $table = 'order_cart';
    protected $fillable = [
        'order_id', 'price', 'quantity', 'name',
    ];
}

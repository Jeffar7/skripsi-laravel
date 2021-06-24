<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashData extends Model
{
    public $table = "flashdata";
    public $fillable = [
        'product_id',
        'address_id',
        'shipment_id',
        'payment_id',
        'user_id',
        'order_id',
        'quantity'
    ];
}

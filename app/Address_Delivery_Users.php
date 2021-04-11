<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address_Delivery_Users extends Model
{

    use SoftDeletes;

    protected $table = "address_delivery_users";
    protected $fillable = [
        'user_id',
        'recipient_name',
        'contact_number',
        'address',
        'address_note',
        'post_code',
        'province',
        'city',
        'district'
    ];
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasOne(Order::class, 'address_id', 'id');
    }
}

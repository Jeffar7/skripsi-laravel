<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'order_number',
        'status',
        'grand_total',
        'user_id',
        'address_id',
        'payment_id',
        'shipment_id'
    ];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address_delivery_users()
    {
        return $this->belongsTo(Address_Delivery_Users::class, 'address_id', 'id');
    }

    public function shipment()
    {
        return $this->belongsTo(Order::class, 'shipment_id', 'id');
    }
}

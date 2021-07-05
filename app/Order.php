<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    // use Notifiable;

    protected $table = "orders";
    protected $fillable = [
        'order_number',
        'status',
        'grand_total',
        'user_id',
        'address_id',
        'payment_id',
        'shipment_id',
        'notes'
    ];
    protected $guarded = ['id'];

    public function grandTotal($price, $qty)
    {
        return $price * $qty;
    }

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

    public function product()
    {
        return $this->belongsToMany(Product::class)->withPivot('is_review', 'quantity')->withTimestamps();
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }
}

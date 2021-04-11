<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipment extends Model
{
    use SoftDeletes;

    protected $table = "shipments";
    protected $fillable = [
        'shipment_method',
        'delivery_cost',
        'estimated_delivery'
    ];

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasOne(Order::class, 'shipment_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order_product extends Model
{
    use SoftDeletes;

    protected $table = "order_product";

    protected $fillable = [
        'product_id',
        'order_id',
        'is_review'
    ];

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(Order::class,'order_id','id');
    }


}

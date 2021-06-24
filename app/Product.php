<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'categoryid',
        'brandid',
        'gender_id',
        'image_detail_id',
        'productname',
        'productdescription',
        'sku',
        'productprice',
        'productsize',
        'prodcutquantity',
        'productimage'
    ];

    // protected $guarded = ['id'];

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brandid', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryid');
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'user_id', 'id');
    }

    public function imagedetail()
    {
        return $this->belongsTo(ImageDetail::class, 'image_detail_id', 'id');
    }

    public function order()
    {
        return $this->belongsToMany(Order::class)->withPivot('is_review');
    }
}
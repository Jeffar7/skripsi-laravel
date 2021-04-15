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
        'productname',
        'productpicture',
        'productprice',
        'prodcutquantity',
        'productdescription'


    ];

    protected $guarded = ['id'];

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brandid');
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
}

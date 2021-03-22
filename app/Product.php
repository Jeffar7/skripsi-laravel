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
    'productname',
    'productpicture',
    'productprice',
    'prodcutquantity',
    'productdescription'


    ];

    protected $guarded = ['id'];

    public function brand(){
        return $this->belongsTo('App\Brand','brandid');
    }

    public function category(){
        return $this->belongsTo('App\Category','categoryid');
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

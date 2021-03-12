<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
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
        return $this->belongsTo('App\Category','id');
    }
}

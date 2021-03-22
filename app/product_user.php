<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_user extends Model
{
    protected $table = "product_users";

    protected $fillable = ['product_id','user_id'];
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

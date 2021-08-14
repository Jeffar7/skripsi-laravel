<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    protected $tabel = "trendings";

    protected $fillable = ['product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categorys";

    protected $fillable = [
        'name'
    ];

    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasMany(Product::class, 'categoryid', 'id');
    }

    public function sizeDetails()
    {
        return $this->hasMany(size_details::class);
    }
}

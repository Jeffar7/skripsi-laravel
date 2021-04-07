<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";
    protected $fillable = ['productgender'];
    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $fillable = [
        'name',
        'picture',
        'owner',
        'website',
        'about'
    ];

    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function raffle()
    {
        return $this->hasMany(Raffle::class);
    }

    public $timestamps = true;
}

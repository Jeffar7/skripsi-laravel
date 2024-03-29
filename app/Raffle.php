<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Raffle extends Model
{
    use SoftDeletes;

    protected $table = "raffles";
    protected $fillable = [
        'rafflename',
        'raffledescription',
        'raffleprice',
        'raffleimage',
        'rafflequantity',
        'rafflequota',
        'rafflejoined',
        'rafflereleasedate',
        'raffleclosedate',
        'status',
        'brand_id',
        'category_id'
    ];
    protected $guarded = ['id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categoryraffle()
    {
        return $this->belongsTo(RaffleCategory::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('address_raffle_id')->withTimestamps();;
    }
}

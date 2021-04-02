<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaffleCategory extends Model
{
    protected $table = "categoryraffles";
    protected $fillable = ['categoryname'];
    protected $guarded = ['id'];

    public function raffle()
    {
        return $this->hasMany(Raffle::class);
    }
}

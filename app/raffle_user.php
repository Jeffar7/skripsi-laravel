<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class raffle_user extends Model
{
    use SoftDeletes; //Notifiable

    public $table = "raffle_user";
    protected $guarded = ['id'];
    protected $fillable = [
        'raffle_id',
        'user_id',
        'address_raffle_id',
        'status',
        'payment_id',
        'is_random_clicked'
    ];

    public function addressForRaffle()
    {
        return $this->belongsTo(AddressForRaffle::class, 'address_raffle_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }
}

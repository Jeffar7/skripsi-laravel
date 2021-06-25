<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressForRaffle extends Model
{
    use SoftDeletes;

    public $table = "address_for_raffle";
    protected $guarded = ['id'];
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'date_of_birth',
        'post_code',
        'number_street_address_1',
        'number_street_address_2',
        'city',
        'country'
    ];

    public function raffleUser()
    {
        return $this->belongsToMany(Raffle::class, 'address_raffle_id', 'id')->withPivot('status');
    }
}

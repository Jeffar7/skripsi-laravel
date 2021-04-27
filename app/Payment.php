<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $table = "paymentmethods";
    protected $fillable = [
        'payment_type',
        'first_name',
        'last_name',
        'bank_name',
        'bank_type',
        'account_number',
        'card_number',
        'cvv',
        'credit_type',
        'valid_until'
    ];


    protected $guarded = ['id'];

    public function order(){
        return $this->hasOne(Order::class);
    }
}

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
        'valid_until',
        'payment_token',
        'payment_url'
    ];


    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public const PAYMENT_CHANNELS = [
        "credit_card", "cimb_clicks",
        "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
        "bca_va", "bni_va", "bri_va", "other_va", "gopay", "indomaret",
        "danamon_online", "akulaku", "shopeepay"
    ];

    public const EXPIRY_DURATION = 7;
    public const EXPIRY_UNIT = 'days';

    public const CHALLENGE = 'challenge';
    public const SUCCESS = 'success';
    public const SETTLEMENT = 'settlement';
    public const PENDING = 'pending';
    public const DENY = 'deny';
    public const EXPIRE = 'expire';
    public const CANCEL = 'cancel';

    public const PAYMENTCODE = 'PAY';
}

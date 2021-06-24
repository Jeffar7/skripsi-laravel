<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes;

    protected $table = "vouchers";
    protected $fillable = [
        'code',
        'type',
        'value',
        'percent_off',
        'category'
    ];

    public static function findByCode($code)
    {
        return self::where('code', $code)->first();
    }

    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return $this->value;
        } elseif ($this->type == 'percent') {
            return ($this->percent_off / 100) * $total;
        } else {
            return 0;
        }
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
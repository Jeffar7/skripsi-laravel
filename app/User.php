<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'gender',
        'DOB',
        'password',
        'role',
        'address',
        'site',
        'about',
        'picture',
        'phone'
    ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function detailaddress()
    {
        return $this->hasOne(DetailAddress::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'user_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function voucher()
    {
        return $this->belongsToMany(Voucher::class);
    }

    public function raffle()
    {
        return $this->belongsToMany(Raffle::class)->withPivot('address_raffle_id')->withTimestamps();;
    }
}

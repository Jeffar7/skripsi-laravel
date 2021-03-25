<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAddress extends Model
{
    protected $table = "detailaddresses";
    protected $fillable = ['city', 'province', 'zip_code', 'country', 'user_id'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

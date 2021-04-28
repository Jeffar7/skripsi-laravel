<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    protected $table = "contactinformation";
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
    protected $guarded = ['id'];
}

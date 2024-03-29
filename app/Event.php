<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{


    use SoftDeletes;

    protected $table = "events";
    protected $fillable = [
        'name',
        'theme',
        'picture',
        'detail_picture',
        'held_on',
        'website',
        'capacity',
        'about_us'
    ];
    protected $guarded = ['id'];

}

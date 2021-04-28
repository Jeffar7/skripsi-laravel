<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = "faq";
    protected $fillable = [
        'title',
        'about',
        'image'
    ];

    protected $guarded = ["id"];

    public function detailFaqInformation(){
        return $this->hasMany('App\DetailFAQInformation');
    }
    


}

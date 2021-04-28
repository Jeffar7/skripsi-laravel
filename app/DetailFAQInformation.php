<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailFAQInformation extends Model
{
    protected $table = "detailfaqinformation";
    protected $fillable = [
        'question',
        'answer'
    ];
    protected $guarded = ["id"];

    public function faq(){
        return $this->belongsTo('App\Faq', 'faqid');
    }
}

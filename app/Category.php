<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";

    protected $fillable = [
        'name'
    ];

    public function product()
    {
        return $this->hasMany('App\Product','id');
    }
}
// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Category extends Model
// {
//     protected $fillable = [
//         'categoryname'
//     ];
    
//     protected $guarded = ['id'];

//     public function product(){
//         return $this->hasMany('App\Product');
//     }

//     public $timestamps = true;
// }

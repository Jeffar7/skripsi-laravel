<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageDetail extends Model
{
    use SoftDeletes;

    protected $table = "imagedetail";
    protected $guarded = ['id'];
    protected $fillable = [
        'image_detail_1',
        'image_detail_2',
        'image_detail_3',
        'image_detail_4',
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}

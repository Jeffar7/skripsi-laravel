<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class size_details extends Model
{
    use SoftDeletes;

    protected $table = 'size_details';
    protected $guarded = ['id'];
    public $fillable = [
        'category',
        'size',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

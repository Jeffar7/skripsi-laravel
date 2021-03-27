<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";

    protected $fillable = ['product_id', 'user_id', 'review_description', 'rating_score'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

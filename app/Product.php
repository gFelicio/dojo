<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "title",
        "description",
        "price",
        "bid",
        "date_end",
        "image"
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'userID', 'id');
    }
}

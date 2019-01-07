<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'slug', 'image', 'price', 'expiration_date'];


    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category_service()
    {
        return $this->belongsTo(CategoryService::class);
    }
}

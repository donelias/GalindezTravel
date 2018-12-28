<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $fillable = ['title', 'content' , 'slug', 'distance_beach', 'check_in', 'check_out', 'number_room'];
}

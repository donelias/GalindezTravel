<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'city', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    public function post()
    {
        return $this->hasMany(Post::class);
    }


    public function company()
    {
        return $this->hasMany(Company::class);
    }
    
}

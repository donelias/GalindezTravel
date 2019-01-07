<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content' , 'slug', 'distance_beach', 'check_in', 'check_out', 'number_room'];


    public function hotel_room()
    {
        return $this->hasMany(CompanyRoom::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}

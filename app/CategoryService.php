<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_services';

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
    protected $fillable = ['name', 'slug', 'description'];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    
}

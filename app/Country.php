<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

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
    protected $fillable = ['code', 'country', 'continent_country', 'country_region', 'country_area', 'country_independence', 'country_population', 'country_life_expectancy', 'PaisProductoInternoBruto', 'PaisProductoInternoBrutoAntiguo', 'PaisNombreLocal', 'PaisGobierno', 'PaisJefeDeEstado', 'PaisCapital', 'PaisCodigo2'];

    public function city()
    {
        return $this->hasMany(City::class);
    }
    
}

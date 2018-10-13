<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 11/10/2018
 * Time: 16:52
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pokemon
 * @package App\Models
 * @version October 11, 2018, 17:05 pm UTC
 */
class Pokemon extends Model
{
    protected $table = 'pokemon';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    public $fillable = [
         'name'
        ,'pokedex_number'
        ,'img_name'
        ,'generation'
        ,'evolved'
        ,'family_id'
        ,'cross_gen'
        ,'type_one'
        ,'type_two'
        ,'weather_one'
        ,'weather_two'
        ,'stat_total'
        ,'power_atack'
        ,'power_defense'
        ,'sta'
        ,'legendary'
        ,'aquireable'
        ,'spawns'
        ,'regional'
        ,'raidable'
        ,'hatchable'
        ,'shiny'
        ,'nest'
        ,'new'
        ,'not-gettable'
        ,'future_evolve'
        ,'per_cp@40'
        ,'per_cp@39'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'pokedex_number' => 'integer',
        'img_name' => 'string',
        'generation' => 'integer',
        'evolved' => 'boolean',
        'family_id' => 'integer',
        'cross_gen' => 'boolean',
        'type_one' => 'string',
        'type_two' => 'string',
        'weather_one' => 'string',
        'weather_two' => 'string',
        'stat_total' => 'integer',
        'power_atack' => 'integer',
        'power_defense' => 'integer',
        'sta' => 'integer',
        'legendary' => 'boolean',
        'aquireable' => 'boolean',
        'spawns' => 'boolean',
        'regional' => 'boolean',
        'raidable' => 'integer',
        'hatchable' => 'integer',
        'shiny' => 'boolean',
        'nest' => 'boolean',
        'new' => 'boolean',
        'not-gettable' => 'boolean',
        'future_evolve' => 'boolean',
        'per_cp@40' => 'integer',
        'per_cp@39' => 'integer',

    ];
}

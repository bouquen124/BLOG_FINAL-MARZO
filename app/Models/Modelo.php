<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Modelo
 * @package App\Models
 * @version March 22, 2021, 7:48 pm UTC
 *
 * @property string $titulo
 * @property string $descripcion
 * @property string(1200) $frame
 */
class Modelo extends Model
{
    use SoftDeletes;

    public $table = 'modelos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'frame'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

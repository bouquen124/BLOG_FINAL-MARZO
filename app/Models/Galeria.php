<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Galeria
 * @package App\Models
 * @version February 24, 2021, 6:46 pm UTC
 *
 * @property string $titulo
 * @property string $descripcion
 */
class Galeria extends Model
{
    use SoftDeletes;

    public $table = 'galerias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion'
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
        'titulo' => 'required',
        'descripcion' => 'required'
    ];

    public function FotoGaleria()
    {
        return $this->morphOne(Ilustrable::class,'Ilustrable');
    }
    
}

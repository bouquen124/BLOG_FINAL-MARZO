<?php

namespace App\Repositories;

use App\Models\Modelo;
use App\Repositories\BaseRepository;

/**
 * Class ModeloRepository
 * @package App\Repositories
 * @version March 22, 2021, 7:48 pm UTC
*/

class ModeloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'frame'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Modelo::class;
    }
}

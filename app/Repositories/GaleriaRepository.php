<?php

namespace App\Repositories;

use App\Models\Galeria;
use App\Repositories\BaseRepository;

/**
 * Class GaleriaRepository
 * @package App\Repositories
 * @version February 24, 2021, 6:46 pm UTC
*/

class GaleriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion'
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
        return Galeria::class;
    }
}

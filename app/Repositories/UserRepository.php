<?php
namespace App\Repositories;
use App\Repositories\BaseRepository;
use App\User;

/**
 * Class RolRepository
 * @package App\Repositories
 * @version February 2, 2021, 6:12 pm UTC
*/

class UserRepository extends BaseRepository{

     /**
     * @var array
     */
    protected $fieldSearchable = [
        'name', 'email', 'password',
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
        return User::class;
    }



}


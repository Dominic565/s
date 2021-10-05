<?php

namespace App\Repositories;

use App\Models\Sales;
use App\Repositories\BaseRepository;

/**
 * Class SalesRepository
 * @package App\Repositories
 * @version October 1, 2021, 1:52 am UTC
*/

class SalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Clien',
        'Sales'
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
        return Sales::class;
    }
}

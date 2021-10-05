<?php

namespace App\Repositories;

use App\Models\Services;
use App\Repositories\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version September 30, 2021, 3:15 am UTC
*/

class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Contact',
        'About_us'
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
        return Services::class;
    }
}

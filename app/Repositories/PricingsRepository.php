<?php

namespace App\Repositories;

use App\Models\Pricings;
use App\Repositories\BaseRepository;

/**
 * Class PricingsRepository
 * @package App\Repositories
 * @version October 5, 2021, 12:38 am UTC
*/

class PricingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Products',
        'Price'
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
        return Pricings::class;
    }
}

<?php

namespace App\Containers\AppSection\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class LocationRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}

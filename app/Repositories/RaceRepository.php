<?php

namespace App\Repositories;

use App\models\Race\Race;

class RaceRepository extends BaseRepository
{
    public function __construct(Race $repository)
    {
        parent::__construct($repository);
    }

}

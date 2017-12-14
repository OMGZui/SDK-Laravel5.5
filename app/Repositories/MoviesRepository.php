<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 14:54
 */

namespace App\Repositories;

use App\Models\Movies;

class MoviesRepository extends BaseRepository
{
    public function __construct(Movies $repository)
    {
        parent::__construct($repository);
    }

}
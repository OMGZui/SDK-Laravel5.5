<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Movies extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'movies_collection';

    /**
     * 全部记录
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getList()
    {
        $rs = $this->newQuery()->get();
        return $rs;
    }
}

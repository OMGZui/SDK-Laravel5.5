<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 14:54
 */

namespace App\Repositories;

use App\Models\Apply;

class ApplyRepository extends BaseRepository
{
    public function __construct(Apply $apply)
    {
        parent::__construct($apply);
    }

}
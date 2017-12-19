<?php

namespace App\models\Race;

use App\Models\BaseModel;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Race extends BaseModel
{
    use SoftDeletes;
}

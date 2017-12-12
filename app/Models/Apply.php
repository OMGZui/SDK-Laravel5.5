<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Apply extends BaseModel
{
    use SoftDeletes;

    protected $table = 'apply';
    public $timestamps = true;

    // 过滤
    protected $fillable = [
        'uuid',
        'group_id',
        'name',
        'email',
        'certificate',
        'certificate_number',
        'phone',
        'birthday',
        'gender',
        'region_country',
        'contact_name',
        'contact_phone'
    ];
    protected $connection = 'mysql';


}

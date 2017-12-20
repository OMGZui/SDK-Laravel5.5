<?php

namespace App\Models\Race;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Race extends BaseModel
{
    use SoftDeletes;

    protected $table = 'race';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'uuid',
        'user_id',
        'col_id',
        'cover',
        'region',
        'name',
        'en_name',
        'type',
        'estimate',
        'date',
        'address',
        'url',
        'desc',
        'app_desc',
        'contact'
    ];

    /**
     * 一个赛事属于一个集合
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function col()
    {
        return $this->belongsTo(RaceCol::class);
    }

    /**
     * 一个赛事包括多个组别
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(RaceGroup::class);
    }

    /**
     * 一个赛事属于一个用户
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

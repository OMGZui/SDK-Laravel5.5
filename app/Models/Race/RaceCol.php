<?php

namespace App\Models\Race;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RaceCol extends Model
{
    use SoftDeletes;

    protected $table = 'race_col';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name'
    ];

    /**
     * 一个赛事集合可以有多个比赛
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function races()
    {
        return $this->hasMany('App\Models\Race\Race');
    }
}

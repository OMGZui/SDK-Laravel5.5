<?php

namespace App\Models\Race;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RaceGroup extends Model
{
    use SoftDeletes;

    protected $table = 'race_group';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'start_at',
        'race_id',
        'distance',
        'elevation',
        'fee',
        'start_line',
        'qualification',
        'time_limit',
        'quota',
        'route',
    ];

    /**
     * 一个组别属于一个赛事
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race()
    {
        return $this->belongsTo('App\Models\Race\Race');
    }
}

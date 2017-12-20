<?php

namespace App\Transformers;

use App\Models\Race\RaceGroup;
use App\Tools\PublicTrait;
use League\Fractal\TransformerAbstract;

class RaceGroupTransformer extends TransformerAbstract
{
    use PublicTrait;

    protected $availableIncludes = [

    ];

    /**
     * 显示
     *
     * @param RaceGroup $transform
     * @return array
     */
    public function transform(RaceGroup $transform)
    {
        return [
            'id' => $transform->id,
            'uuid' => $transform->uuid,
            'start_at' => $transform->start_at,
            'race_id' => $transform->race_id,
            'distance' => $transform->distance,
            'elevation' => $transform->elevation,
            'fee' => $transform->fee,
            'start_line' => $transform->start_line,
            'qualification' => $transform->qualification,
            'time_limit' => $transform->time_limit,
            'quota' => $transform->quota,
            'route' => $transform->route,
            'created_at' => $transform->created_at->toDateTimeString(),
            'updated_at' => $transform->updated_at->toDateTimeString(),
        ];
    }
}

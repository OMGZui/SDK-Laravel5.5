<?php

namespace App\Transformers;

use App\Models\Race\Race;
use App\Tools\PublicTrait;
use League\Fractal\TransformerAbstract;

class RaceTransformer extends TransformerAbstract
{
    use PublicTrait;

    protected $availableIncludes = [
        'groups'
    ];

    /**
     * 显示
     *
     * @param Race $transform
     * @return array
     */
    public function transform(Race $transform)
    {
        return [
            'id' => $transform->id,
            'uuid' => $transform->uuid,
            'user_id' => $transform->user_id,
            'col_id'=> $transform->col_id,
            'cover'=> $transform->cover,
            'region'=> $transform->region,
            'name'=> $transform->name,
            'en_name'=> $transform->en_name,
            'type'=> $transform->type,
            'estimate'=> $transform->estimate,
            'date'=> $transform->date,
            'address'=> $transform->address,
            'url'=> $transform->url,
            'desc'=> $transform->desc,
            'app_desc'=> $transform->app_desc,
            'contact'=> $transform->contact,
            'created_at' => $transform->created_at->toDateTimeString(),
            'updated_at' => $transform->updated_at->toDateTimeString(),
        ];
    }

    /**
     * 组别
     *
     * @param Race $transform
     * @return \League\Fractal\Resource\Collection
     */
    public function includeGroups(Race $transform)
    {
        $groups = $transform->groups;

        return $this->collection($groups, new RaceGroupTransformer());
    }
}

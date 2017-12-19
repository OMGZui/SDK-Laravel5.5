<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use App\Tools\PublicTrait;
use League\Fractal\TransformerAbstract;

class RaceTransformer extends TransformerAbstract
{
    use PublicTrait;

    protected $availableIncludes = [

    ];

    /**
     * 显示
     *
     * @param Model $transform
     * @return array
     */
    public function transform(Model $transform)
    {
        return [

        ];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 15:30
 */

namespace App\Transformers;

use App\Models\Movies;
use App\Tools\PublicTrait;
use League\Fractal\TransformerAbstract;

class MoviesTransformer extends TransformerAbstract
{
    use PublicTrait;

    protected $availableIncludes = [

    ];

    /**
     * 显示
     *
     * @param Movies $transform
     * @return array
     */
    public function transform(Movies $transform)
    {
        return [
            '_id' => $transform->_id,
            'name' => $transform->name,
            'girl' => $transform->girl,
        ];
    }
}

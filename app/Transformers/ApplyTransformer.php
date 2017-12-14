<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 15:30
 */

namespace App\Transformers;

use App\Models\Apply;
use App\Tools\PublicTrait;
use League\Fractal\TransformerAbstract;

class ApplyTransformer extends TransformerAbstract
{
    use PublicTrait;

    protected $availableIncludes = [

    ];

    /**
     * 显示
     *
     * @param Apply $transform
     * @return array
     */
    public function transform(Apply $transform)
    {
        return [
            'id' => $transform->id,
            'uuid' => $transform->uuid,
            'group_id' => $transform->group_id,
            'name' => $transform->name,
            'email' => $transform->email,
            'certificate' => $this->certificate($transform->certificate),
            'certificate_number' => $transform->certificate_number,
            'phone' => $transform->phone,
            'birthday' => $transform->birthday,
            'gender' => $this->gender($transform->gender),
            'region_country' => $this->region_country($transform->region_country),
            'contact_name' => $transform->contact_name,
            'contact_phone' => $transform->contact_phone,
            'created_at' => $transform->created_at->toDateTimeString(),
            'updated_at' => $transform->updated_at->toDateTimeString(),
        ];
    }
}

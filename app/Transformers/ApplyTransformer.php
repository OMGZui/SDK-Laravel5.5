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
     * @param Apply $apply
     * @return array
     */
    public function transform(Apply $apply)
    {
        return [
            'id' => $apply->id,
            'uuid' => $apply->uuid,
            'group_id' => $apply->group_id,
            'name' => $apply->name,
            'email' => $apply->email,
            'certificate' => $this->certificate($apply->certificate),
            'certificate_number' => $apply->certificate_number,
            'phone' => $apply->phone,
            'birthday' => $apply->birthday,
            'gender' => $this->gender($apply->gender),
            'region_country' => $this->region_country($apply->region_country),
            'contact_name' => $apply->contact_name,
            'contact_phone' => $apply->contact_phone,
            'created_at' => $apply->created_at->toDateTimeString(),
            'updated_at' => $apply->updated_at->toDateTimeString(),
        ];
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/12
 * Time: 15:57
 */

namespace App\Tools;

Trait PublicTrait
{
    /**
     * 性别
     *
     * @param $gender
     * @return string
     */
    public function gender($gender)
    {
        if ($gender == 1) {
            return '男';
        } else {
            return '女';
        }
    }

    /**
     * 护照
     *
     * @param $certificate
     * @return string
     */
    public function certificate($certificate)
    {
        if ($certificate == 1) {
            return '身份证';
        } else {
            return '护照';
        }
    }

    /**
     * 地区
     *
     * @param $region_country
     * @return string
     */
    public function region_country($region_country)
    {
        if ($region_country == 1) {
            return '大陆';
        } elseif ($region_country == 2) {
            return '港澳台';
        } else {
            return '境外';
        }
    }
}
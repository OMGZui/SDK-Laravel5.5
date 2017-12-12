<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 输入规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'group_id' => 'required',
            'email' => 'required',
            'certificate' => 'required',
            'certificate_number' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'region_country' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
        ];
    }
}

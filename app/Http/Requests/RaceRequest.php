<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RaceRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'col_id' => 'required',
            'cover' => 'required',
            'region' => 'required',
            'name' => 'required',
            'en_name' => 'required',
            'type' => 'required',
            'estimate' => 'required',
            'date' => 'required',
            'address' => 'required',
            'url' => 'required',
            'desc' => 'required',
            'app_desc' => 'required',
            'contact' => 'required'
        ];
    }
}

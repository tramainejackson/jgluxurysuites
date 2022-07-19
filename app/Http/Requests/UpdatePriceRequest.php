<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePriceRequest extends FormRequest
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
            'sc_1' => 'required|numeric',
            'sc_5' => 'required|numeric',
            'sc_15' => 'required|numeric',
            'sc_30' => 'required|numeric',
            'nh_1' => 'required|numeric',
            'nh_5' => 'required|numeric',
            'nh_15' => 'required|numeric',
            'nh_35' => 'required|numeric',
            'sr_1' => 'required|numeric',
            'sr_10' => 'required|numeric',
            'sr_30' => 'required|numeric',
        ];
    }
}

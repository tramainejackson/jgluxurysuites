<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicationsRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'institution' => 'required|max:250',
            'institution_id' => 'required',
            'institution_address' => 'required|max:250',
            'ethnicity' => 'nullable|max:100',
            'age' => 'required|integer',
            'call_type' => 'required|max:100',
            'call_count' => 'required|integer',
            'payment_type' => 'nullable',
            'payment_id' => 'nullable',
            'completed' => 'nullable',
            'paid' => 'nullable',
        ];
    }
}

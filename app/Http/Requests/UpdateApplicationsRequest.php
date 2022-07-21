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
            'email' => 'required|max:100',
            'institution' => 'required|max:250',
            'institution_id' => 'required',
            'institution_address' => 'required|max:250',
            'ethnicity' => 'nullable|max:100',
            'age' => 'required',
            'call_type' => 'required|max:100',
            'payment_type' => 'nullable',
            'payment_id' => 'nullable',
            'standard_call_count' => 'nullable',
            'no_holds_call_count' => 'nullable',
            'sound_room_call_count' => 'nullable',
            'completed' => 'nullable',
            'paid' => 'nullable',
        ];
    }
}

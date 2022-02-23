<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LookupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
//            'phone' => 'required',
//            'email' => 'required',
//            'avatar' => 'required',
        ];

//        foreach (langs() as $lang) {
//            $rules['name_' . $lang] = 'required|string';
//            $rules['speciality_' . $lang] = 'required|string';
//            $rules['details_' . $lang] = 'required|string';
//        }

        return $rules;
    }
}

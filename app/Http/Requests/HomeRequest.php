<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'latitude' => 'required',
            'longitude' => 'required'
        ];
    }
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->messages()->all();
        errorResponse('0','Validation error.!',$errors,200);
    }
}

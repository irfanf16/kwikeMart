<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'phone' => 'required',
            'device_token' => 'required'

        ];
    }
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->messages()->all();
        errorResponse('0','Validation error.!',$errors,200);
    }
    public function store()
    {
        return User::updateOrCreate(['id' => $this->id], $this->validated());
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class UserAddressRequest extends FormRequest
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

        if(Route::getFacadeRoot()->current()->uri()=='api/address/remove'){
            return [
                'id'   =>  'required|exists:user_addresses,id'
            ];
        }else{
            return [
                'latitude'   =>  'required',
                'longitude'     =>  'required',
                'address'      =>  'required',
            ];
        }

    }
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->messages()->all();
        errorResponse('0','Validation error.!',$errors,200);
    }
}

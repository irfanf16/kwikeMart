<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class StripeCardRequest extends FormRequest
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
//        dd(Route::getFacadeRoot()->current()->uri()=='api/stripe/remove/card');

        if(Route::getFacadeRoot()->current()->uri()=='api/stripe/remove/card'){
            return [
                'pm_id'   =>  'required'
            ];
        }else{
            return [
                'card_number'   =>  'required',
                'exp_month'     =>  'required',
                'exp_year'      =>  'required',
                'cvc'           =>  'required'
            ];
        }

    }
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->messages()->all();
        errorResponse('0','Validation error.!',$errors,200);
    }
}

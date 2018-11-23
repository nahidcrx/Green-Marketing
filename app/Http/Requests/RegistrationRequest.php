<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'First_Name' => 'required',
            'Last_Name' => 'required',
            //'Last_Name' => 'required|email|unique:employees',
            'User_Name' => 'required|alpha_num|unique:registrationtable',
            'Password' => 'required|alpha_num',
            'Confirm_Password' => 'required|alpha_num',
            'Phone' => 'required|numeric',
            'Email' => 'required|email',
            'NID' => 'required|numeric',
            'Gender' => 'required|alpha'


        ];
    }
}

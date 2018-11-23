<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateinfoRequest extends FormRequest
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
            'Phone' => 'required|numeric',
            'Email' => 'required|email',
            'Pass'  => 'required|min:4'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
            
            'pname' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'quantity' => 'required',
            'price_per_unit' => 'required',
            'product_description' => 'required',
            'phone' => 'required|numeric'

        ];
    }
}

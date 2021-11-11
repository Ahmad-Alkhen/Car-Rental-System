<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
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
            'name'=>'required|max:100',
            'address'=>'required|max:100',
            'phone'=>'required|max:12',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'You must enter the full name',
            'address.required'=>'You must enter the address ',
            'phone.required'=>'You must enter the phone ',
            'phone.max'=>' 12 char Max',
        ];
    }
}

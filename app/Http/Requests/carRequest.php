<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class carRequest extends FormRequest
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
            'name'=>'required|max:50',
            'type'=>'required|max:50',
            'number'=>'required|max:10',
            'description'=>'required|max:100',
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'You must enter the name',
            'type.required'=>'You must enter the type ',
            'number.required'=>'You must enter the number',
            'description.required'=>'You must enter the description',

        ];
    }
}

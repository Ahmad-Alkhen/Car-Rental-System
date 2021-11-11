<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class invoiceRequest extends FormRequest
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
            'details'=>'max:200',
            'paid'=>'required',

        ];
    }


    public function messages()
    {
        return [
            'details.max'=>'The upper limit of characters is 200 . ',

        ];
    }
}

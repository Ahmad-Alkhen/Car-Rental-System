<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookingRequest extends FormRequest
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
            'rent_start'=>'required|date',
            'rent_end'=>'required|date',

        ];
    }


    public function messages()
    {
        return [
            'info.max'=>'The upper limit of characters is 200 . ',
            'rent_start.date'=>'You must enter a Date ',
            'rent_end.date'=>'You must enter a Date ',
        ];
    }
}

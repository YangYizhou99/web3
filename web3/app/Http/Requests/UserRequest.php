<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|min:4|max:32',
            'email'=>'required|email',
        ];
    }
    public function messages()
    {
        return  [
            'name.required'=>'username empty',
            'name.min'=>'username less than 4',
            'name.max'=>'username more than 32'
        ];
    }
}

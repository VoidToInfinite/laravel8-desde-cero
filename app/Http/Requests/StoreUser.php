<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            //
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required'
        ];
    }

    /**
     * Change the attributes name.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
            'name' => 'nombre',
        ];
    }

    /**
     * Change message of the attribures required.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'name.required' => 'Asi es',
        ];
    }
}

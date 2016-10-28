<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuRequest extends FormRequest
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
            'menu_nom'=>'required|unique:menus',
            'langue_id'=>'required',
        ];
    }

     /**
     * Get the validation rules errors messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'menu_nom.required' => 'Nom du menu obligatoire',
            'langue_id.required' => 'Langue obligatoire',
        ];
    }
}

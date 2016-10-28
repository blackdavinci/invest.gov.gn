<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStructureRequest extends FormRequest
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
            'structure_nom'=>'required'
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
            'structure_nom.required' => 'Nom de la structure obligatoire',
        ];
    }

}

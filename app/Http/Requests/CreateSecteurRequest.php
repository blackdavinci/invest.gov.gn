<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSecteurRequest extends FormRequest
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
            'secteur_nom'=>'required|unique:secteurs',
            'secteur_presentation'=>'required',
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
            'secteur_nom.required' => 'Nom du secteur obligatoire',
            'secteur_presentation.required' => 'Présentation du secteur obligatoire',
            'langue_id.required' => 'Langue obligatoire',
        ];
    }


}

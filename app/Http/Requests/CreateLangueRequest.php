<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLangueRequest extends FormRequest
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
            'langue_nom_en'=>'required|unique:langues',
            'langue_nom_fr'=>'required|unique:langues',
            'langue_code'=>'required',
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
            'langue_nom_en.required' => 'Nom Anglais ou Français obligatoire',
            'langue_nom_fr.required' => 'Non Original obligatoire',
            'langue_code.required' => 'Code langue obligatoire',
        ];
    }
}

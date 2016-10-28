<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'post_titre'=>'required',
            'post_content'=>'required',
            'post_type'=>'required',
            'langue_id'=>'required',
            'menu_id'=>'required'
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
            'post_titre.required' => 'Titre de la publication obligatoire',
            'post_content.required' => 'Contenu de la publication obligatoire',
            'post_type.required' => 'Type de publication obligatoire',
            'langue_id.required' => 'Langue de la publication obligatoire',
            'menu_id.required' => 'Menu parent de la publication obligatoire',

        ];
    }
}

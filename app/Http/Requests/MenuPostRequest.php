<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'type' => 'required',
            'recipe_ids' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'メニュー名は必須です',
            'type.required' => 'タイプは必須です',
            'recipe_ids.required' => 'レシピは必須です',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipePostRequest extends FormRequest
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
            'calorie' => 'required|numeric|between:0,1000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'レシピ名は必須です',
            'calorie.required' => 'カロリーは必須です',
            'calorie.numeric' => 'カロリーは数値で入力してください',
            'calorie.between' => 'カロリーは0~1000の間で入力してください',
        ];
    }
}

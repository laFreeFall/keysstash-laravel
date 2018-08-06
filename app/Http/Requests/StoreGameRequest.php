<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'steam' => [
                'boolean'
            ],
            'deleted' => [
                'boolean'
            ],
            'title' => [
                'required',
                'string',
                'min:2'
            ],
            'image' => [
                'nullable',
                'string'
            ],
            'link' => [
                'nullable',
                'string'
            ],
            'steam_game_id' => [
                'nullable',
                'integer'
            ]
        ];
    }
}

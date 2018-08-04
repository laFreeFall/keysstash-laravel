<?php

namespace App\Http\Requests;

use App\Rules\KeyFormat;
use Illuminate\Foundation\Http\FormRequest;

class StoreKeyRequest extends FormRequest
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
            'game_id' => [
                'required',
                'integer',
                'exists:games,id'
            ],
            'body' => [
                'required',
                'unique:keys',
                new KeyFormat($this->game_id)
            ],
            'used' => [
                'boolean'
            ]
        ];
    }
}

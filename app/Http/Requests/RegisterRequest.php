<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'email|required|unique:registrations',
            'answer-1' => 'required',
            'answer-2' => 'required',
            'answer-3' => 'required',
            'answer-4' => 'required',
            'answer-5' => 'required',
        ];
    }
}

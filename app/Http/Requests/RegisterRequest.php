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
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
            'answer4' => 'required',
            'answer5' => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Name - Muss ausgefüllt sein',
        'answer1.required'  => 'Ich Werde Zum Sommerfest Am 18. Juni Kommen - Muss ausgefüllt sein ',
        'answer2.required'  => 'Ich Beteilige Mich Bei Der Vorbereitung - Muss ausgefüllt sein',
        'answer3.required'  => 'Ich Helfe Beim Fest - Muss ausgefüllt sein',
        'answer4.required'  => 'Ich Nehme Am Golfturnier Am 19. Juni Teil - Muss ausgefüllt sein',
        'answer5.required'  => 'Ich Spende Einen Tollen Preis Für Den Wettbewerb - Muss ausgefüllt sein',
    ];
}
}

<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class ConsultationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function rules()
    {
        return [
            'name' => ['required','min:3'],
            'phone' => ['required','digits_between:11,13'],
            'message' => ['sometimes','string','nullable'],
            'agree' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательное для ввода',
            'name.min' => 'Минимальный размер 3 символа',
            'phone.required' => 'Поле обязательное для ввода',
            'agree.required' => 'Вы должны согласиться с политикой обработки персональных данных',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        
        $this->merge([
            'phone' => Str::phoneNumber($this->phone),
        ]);
    }
}

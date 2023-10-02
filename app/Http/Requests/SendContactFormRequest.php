<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class SendContactFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','max:255'],
            'phone' => ['required','digits:11'],
            'email' => ['email','max:255'],
            'services' => ['string'],
            'url' => ['required','url','max:255'],
            'comment' => ['sometimes','string','nullable'],
            'agree' => ['required','accepted'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        
        $this->merge([
            'services' => $this->services 
                ? implode( ',' ,  collect($this->services)->all() ) 
                : '',
            'url' => $this->url ? $this->url : request()->url(),
            'phone' => Str::phoneNumber($this->phone),
        ]);
    }
}

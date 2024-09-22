<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:24|min:2",
            "email" => "required|email|max:60",
            "telefon" => "required|max:9|min:9",
            "message" => "required|min:10|max:255",
        ];
    }

        // Вывод текста при ошибки (функция)
        public function messages() {
            return [
                "name.required" => "Introduceți numele dvs",
                "email.required" => "Introduceți Email dvs",
                "telefon.required" => "Introduceți telefonul dvs",
                "message.required" => "Introduceți mesajul dvs",
                "name.max" => "Introduceți un nume de până la 20 de caractere",
                "name.min" => "Introduceți un nume de cel puțin 2 caractere",
                "email.max" => "Introduceți Email de până la 60 de caractere",
                "telefon.max" => "Introduceți telefonul din 9 caractere",
                "telefon.min" => "Introduceți telefonul din 9 caractere",
                "message.max" => "Introduceți un mesaj de până la 255 de caractere",
                "message.min" => "Introduceți un mesaj de cel puțin 10 caractere",
            ];
        }
}

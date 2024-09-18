<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookingRequest extends FormRequest
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
    public function rules(): array  {
        return [
            "name" => "required|max:24|min:2",
            "email" => "required|email|max:60",
            "telefon" => "required|max:9|min:9",
            "data" => "required",
            "time" => "required",
            "people" => "required"
        ];
    }

    // Вывод текста при ошибки (функция)
    public function messages() {
        return [
            "name.required" => "Introduceți numele dvs",
            "email.required" => "Introduceți Email dvs",
            "telefon.required" => "Introduceți telefonul dvs",
            "data.required" => "Selectați data de rezervarea",
            "time.required" => "Selectați ora de rezervarea",
            "people.required" => "Selectați numărul de persoane de la masă",
            "name.max" => "Introduceți un nume de până la 20 de caractere",
            "email.max" => "Introduceți Email de până la 60 de caractere",
            "telefon.max" => "Introduceți telefonul din 9 caractere",
            "telefon.min" => "Introduceți telefonul din 9 caractere",
            "name.min" => "Introduceți un nume de cel puțin 2 caractere",
        ];
    }
}

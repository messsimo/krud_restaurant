<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required|min:2|max:16',
            'telefon' => 'required|min:9|max:9',
            'email' => 'required|email',
            'delivery-method' => 'required',
            'payment' => 'required',
            'message' => 'max:255'
        ];
    }

    // Ошибки
    public function messages() {
        return [
            'name.required' => 'Vă rugăm să introduceți numele dvs',
            'telefon.required' => 'Vă rugăm să introduceți telefonul dvs',
            'email.required' => 'Vă rugăm să introduceți Email dvs',
            'delivery-method.required' => 'Vă rugăm să alegeți methoda de livrarea dvs',
            'payment.required' => 'Vă rugăm să alegeți methoda de plată dvs',
            'name.min' => 'Numele trebuie să conțină cel puțin 2 litere',
            'name.min' => 'Numele tău trebuie să aibă maximum 16 litere',
            'telefon.min' => 'Numărul de telefon trebuie să aibă 9 cifre',
            'telefon.max' => 'Numărul de telefon trebuie să aibă 9 cifre',
            'message.max' => 'Mesajul dvs. trebuie să aibă maximum 255 de caractere',
            'email.email' => 'Vă rugăm să introduceți un e-mail valid! Exemplu: krud@mail.ru',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class test_req extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//суда всегда true т.к. чтобы люой мог отправить форму
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "text_from_user" => "required|min:7|max:50"
        ];
    }

    public function messages(): array
    {
        return[
            "text_from_user.required" => "Заполните все поля",
            "text_from_user.min" => "Минимум 7 символов"

        ];
    }
}

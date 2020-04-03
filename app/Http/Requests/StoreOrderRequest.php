<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'name' => 'required|string|max:64',
            'company' => 'nullable|string|max:128',
            'description' => 'nullable|string|max:1000',
            'contact' => 'required|string|max:128',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Имя обязательно для заполнения',
            'name.string' => 'Имя должно быть строкой',
            'name.max' => 'Имя не может быть больше 64 символов',
            'company.string' => 'Название компании должно быть строкой',
            'company.max' => 'Название компании не может быть больше 128 символов',
            'description.string' => 'Запрос должен быть строкой',
            'description.max' => 'Запрос не может быть больше 1000 символов',
            'contact.required'  => 'Укажите, как с вами можно связаться',
            'contact.string'  => 'Контактная информация должна быть строкой',
            'contact.max'  => 'Контактная информация не может превышать 128 символов',
        ];
    }
}

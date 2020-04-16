<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactsRequest extends FormRequest
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
            'address' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:128',
            'email_info' => 'required|email:rfc|max:128',
            'phone' => 'required|string|max:16',
            'phone_viber' => 'required|string|max:16',
            'facebook' => 'required|url|max:128',
            'instagram' => 'required|url|max:128',
            'youtube' => 'required|url|max:128',
        ];
    }
}

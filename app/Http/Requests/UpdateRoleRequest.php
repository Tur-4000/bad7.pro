<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
            'user_friendly_name' => 'required|max:128',
            'name' => 'required|max:64|unique:roles,name,'.$this->role->id.'id',
            'guard_name' => 'required',
            'description' => 'required',
        ];
    }
}

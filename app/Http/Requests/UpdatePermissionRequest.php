<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
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
            'name' => 'required|max:64|unique:permissions,name,'.$this->permission->id.'id',
            'guard_name' => 'required',
            'description' => 'required',
        ];
    }
}

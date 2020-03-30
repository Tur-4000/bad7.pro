<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'name' => 'max:32|unique:pages,name,'.$this->page->id.'id',
            'user_friendly_name' => 'max:32',
            'description' => 'nullable|string|max:500',
            'title_tag' => 'nullable|string|max:64',
            'description_tag' => 'nullable|string|max:300',
            'keywords_tag' => 'nullable|string|max:300',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicePageRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ext' => 'nullable|string',
            'bg_image' => 'nullable|file',
            'video_url' => 'nullable|string|url|max:255',
            'order' => 'required|numeric|unique:services,order,'.$this->service->id.'id',
        ];
    }
}

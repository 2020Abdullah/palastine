<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'name' => 'required',
            'info' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يجب إدخال اسم المدينة !',
            'info.required' => 'يجب إدخال وصف للمدينة !',
            'image.required' => 'يجب إدخال صورة للمدينة !',
            'image.mimes'   => 'هذا الملف غير مسموح به !',
        ];
    }
}

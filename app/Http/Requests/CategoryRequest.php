<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'tenloai' => 'required|unique:categories,tenloai,'.$this->id,
        ];
    }
        public function messages(){
        return [
            'tenloai.required' => "Tên Không Được Để Trống",
            'tenloai.unique' => "Tên Đã Tồn Tại",
        ];
    }
}

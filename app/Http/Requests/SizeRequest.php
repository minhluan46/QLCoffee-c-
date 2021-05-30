<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SizeRequest extends FormRequest
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
            'ten' => 'required|unique:sizes,ten'.$this->id,
        ];
    }
        public function messages(){
        return [
            'ten.required' => "Tên Không Được Để Trống",
            'ten.unique' => "Tên Đã Tồn Tại",
        ];
    }
}

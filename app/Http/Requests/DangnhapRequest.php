<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DangnhapRequest extends FormRequest
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
         
            'tendangnhap'  =>  'required|min:3',
            'matkhau'  =>   'required|min:3'
        ];
       
    }
    public function messages()
    {
        return[
            'tendangnhap.required' => 'Tên Đăng Nhập Không Được Để Trống',
            'tendangnhap.min' => 'Tên Đăng hải Lớn Hơn 3 kí tự',
            'matkhau.required' => 'Mật khẩu Không Được Để Trống',
            'matkhau.min' =>  'Mật khẩu  Phải Lớn Hơn 3 kí tự'
        ];
    }
}

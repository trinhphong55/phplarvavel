<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;
use Illuminate\Http\Request;

class linhvucRequest extends FormRequest
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
        
            'tenlinhvuc'  =>  'required'
          
           
            
        ];
       
    }
    public function messages()
    {
        return [
           'tenlinhvuc.required' => 'Tên Lĩnh Vực Không Được Để Trống',
           'tenlinhvuc.unique' => 'Tên Lĩnh Vực Da Co'

          
          
            

            
        ];

    }
}

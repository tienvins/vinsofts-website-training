<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'refullname' => 'required',
            'rebirthdate' => 'required',
            'reemail' => 'required|email',
            'readdress' => 'required',
            'rephone' => 'required',
            'regender' => 'required'
        ];
    }
       public function messages()
    {
        return [
            'refullname.required'   => 'Vui lòng nhập họ tên',
            'rebirthdate.required'  => 'Vui lòng nhập ngày sinh',
            'reemail.required'      => 'Vui lòng nhập địa chỉ email',
            'readdress.required'    => 'Vui lòng nhập địa chỉ',
            'rephone.required'      => 'Vui lòng nhập số điện thoại',
            'regender.required'     => 'Vui lòng chọn giới tính'
        ];
    }
}

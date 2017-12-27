<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertRequest extends FormRequest
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
            'fullname' => 'required',
            'birthdate' => 'required',
            'email' => 'required|email|unique:nhanvien,email',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required'
            ];
    }
    public function messages()
    {
        return [
            'fullname.required'   => 'Vui lòng nhập họ tên',
            'birthdate.required'  => 'Vui lòng nhập ngày sinh',
            'email.required'      => 'Vui lòng nhập địa chỉ email',
            'email.unique'        => 'Email đã tồn tại',
            'address.required'    => 'Vui lòng nhập địa chỉ',
            'phone.required'      => 'Vui lòng nhập số điện thoại',
            'gender.required'     => 'Vui lòng chọn giới tính',
        ];
    }
}

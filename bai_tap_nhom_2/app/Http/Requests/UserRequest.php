<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required|min:5',
            'email' => 'required|email|unique:user',
            'address' => 'required',
            'phone' => 'required|unique:user',
            // |regex:/(01)[0-9]{9}$/
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên bắt buộc',
            'fullname.min' => 'Họ và tên phải từ :min ký tự trở lên',
            'email.required' => 'Email bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại trên hệ thống',
            'address.required' => 'địa chỉ bắt buộc nhập ',
            'phone.required' => 'trường này bắt buộc phải nhập',
            'phone.min' => 'Số điện thoại phải ít nhất :min ký tự ',
            'phone.unique' => 'Số điện thoại đã bị trùng',
            // 'phone.regex' => 'lỗi số điện thoại',

        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'Đã có lỗi xảy ra , vui lòng kiểm tra lại');
            }
        });
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'create_at' => date('Y-m-d H:i:s '),
        ]);
    }
}
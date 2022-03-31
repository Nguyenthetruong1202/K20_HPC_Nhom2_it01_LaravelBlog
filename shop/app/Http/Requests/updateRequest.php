<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            'email' => 'required|email '
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên bắt buộc',
            'fullname.min' => 'Họ và tên phải từ :min ký tự trở lên',
            'email.required' => 'Email bắt buộc',
            'email.email' => 'Email không đúng định dạng',

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
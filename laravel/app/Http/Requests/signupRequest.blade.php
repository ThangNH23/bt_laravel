<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }
    public function messages() {
        return [
            'name.string' => 'nhập tên cho đúng',
            'age.numeric' => 'Nhập tuổi cho đúng',
            'date.string' => 'Nhập lại ngày tháng',
            'phone.numeric' => 'Kiểm tra lại số điện thoại',
            'web.string' => 'Kiểm tra lại ký tự',
            'address.string' => 'Nhập lại địa chỉ'
        ];
    }
}


//b1 tạo form
//b2 show form ra view
//b3 tạo request 
//b4 vào file request -> function authorize -> true, rules(), messege()
//b5 tạo controller để xử lý
//b6 qua view -> foreach()
//b7 Route-> get and post
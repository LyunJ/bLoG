<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255'
        ];
    }

    /**
     * 에러 메세지
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute은(는) 필수 입력 사항입니다',
            'max' => ':attribute은(는) :max글자를 넘어서는 안됩니다',
            'unique' => '이미 존재하는 :attribute입니다'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'email',
            'name' => '이름',
            'password' => '비밀번호'
        ];
    }
}

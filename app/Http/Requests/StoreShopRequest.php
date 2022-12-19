<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Occupation' => 'required',
            'Genre' => 'required',
            'shopName' => 'required',
            'phoneNumber' => 'required|regex:/^[0-9]+$/i',
            'email' => 'required',
            'postCode' => 'required|integer|regex:/^[0-9]+$/i',
            'address' => 'required',
            'longitude' => 'required|numeric|regex:/^[0-9]+\.[0-9]+$/i',
            'latitude' => 'required|numeric|regex:/^[0-9]+\.[0-9]+$/i',
            'password' => 'required|min:8|regex:/^[a-zA-Z0-9]+$/i',
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です',
            'integer' => '数字を入力してください',
            'phoneNumber.regex' => 'ハイフンを除いて入力してください',
            'postCode.regex' => 'ハイフンを除いて入力してください',
            'numeric' => '文字列以外の数値を入力してください',
            'password.min' => 'パスワードは８文字以上で入力してください',
            'password.regex' => '英数字のみで入力してください',
        ];
    }
}

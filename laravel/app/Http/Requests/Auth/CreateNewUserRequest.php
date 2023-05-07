<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class CreateNewUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => '名前は入力必須です。',
            'name.string'       => '名前が無効な形式です。',
            'name.max'          => '名前は最大255文字です。',
            'email.required'    => 'メールアドレスは入力必須です。',
            'email.string'      => 'メールアドレスは文字列で入力してください。',
            'email.email'       => 'メールアドレスの形式が無効です。',
            'email.max'         => 'メールアドレスは最大255文字です。',
            'email.unique'      => 'メールアドレスは使用されています。', 
            'password.required' => 'パスワードは入力必須です。',
            'password.confirmed' => 'パスワードが確認と不一致です。',
        ];
    }
}

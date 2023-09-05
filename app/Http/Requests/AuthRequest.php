<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $ruler=[];
        $currentAction= $this->route()->getActionMethod();
        switch($this->method()){
          case 'POST':
              switch($currentAction){
                  case 'login':
                    $ruler = [
                        'email'=>'required|max:50',
                        'password'=>'required|min:6|max:50',
                    ];
                    break;
                  
                default:
                  break;
              }
            break;

          default:
           break;   
          }
        return $ruler;
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.max' => 'Email không được quá 50 ký tự',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu không được nhỏ hơn 6 ký tự',
            'password.max' => 'Mật khẩu không được quá 50 ký tự',
        ];
    }
}

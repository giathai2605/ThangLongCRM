<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                  case 'add':
                    $ruler = [
                        'name'=>'required|max:50',
                        'email'=>'required|max:50|unique:users,email|regex:/(.+)@(.+)\.(.+)/i',
                        'phone'=>'required|regex:/(0)[0-9]{9}/|max:10|unique:users,phone',
                        'password'=>'required|min:6|max:50',
                        're-password'=>'required|same:password',
                        'avatar'=>'max:2048',
                        'gender'=>'required',
                        'address'=>'required|max:255',
                        'department_id'=>'required',
                        'role_id'=>'required',
                    ];
                    break;
                  case 'edit':
                    $ruler = [
                        'name'=>'required|max:50',
                        'email'=>'required|max:50|regex:/(.+)@(.+)\.(.+)/i|unique:users,email'.$this->route('id'),
                        'phone'=>'required|regex:/(0)[0-9]{9}/|max:10|unique:users,phone'.$this->route('id'),
                        'avatar'=>'max:2048',
                        'gender'=>'required',
                        'address'=>'required|max:255',
                        'department_id'=>'required',
                        'role_id'=>'required',
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
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên không được quá 50 ký tự',
            'email.required' => 'Email không được để trống',
            'email.max' => 'Email không được quá 50 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'email.regex' => 'Email không đúng định dạng',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.regex' => 'Số điện thoại không đúng định dạng',
            'phone.max' => 'Số điện thoại không được quá 10 ký tự',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu không được nhỏ hơn 6 ký tự',
            'password.max' => 'Mật khẩu không được quá 50 ký tự',
            're-password.required' => 'Vui lòng xác nhận mật khẩu',
            're-password.same' => 'Mật khẩu không trùng khớp',
            'avatar.image' => 'Ảnh đại diện không đúng định dạng',
            'avatar.mimes' => 'Ảnh đại diện không đúng định dạng',
            'avatar.max' => 'Ảnh đại diện không được quá 2MB',
            'gender.required' => 'Vui lòng lựa chọn giới tính',
            'address.required' => 'Địa chỉ không được để trống',
            'address.max' => 'Địa chỉ không được quá 255 ký tự',
            'department_id.required' => 'Vui lòng chọn phòng ban',
            'role_id.required' => 'Vui lòng chọn chức vụ',
        ];
    }
}

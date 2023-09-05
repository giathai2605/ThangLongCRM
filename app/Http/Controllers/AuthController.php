<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;


class AuthController extends Controller {
    //
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function login(AuthRequest $request){
        if($request->isMethod('post')){
            $data = $request->except(['_token']);
            $user = User::where('email', $data['email'])->first();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                session()->put('user', $user);
                session::flash('success', 'Đăng nhập thành công');
                return redirect()->route('home');
            } else {
                session()->flash('error', 'Sai tên đăng nhập hoặc mật khẩu!');
                return redirect()->route('login');
            }
        }
        return view('auth.signin');
    }

    // Change password
    public function changePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->except(['_token']);
            $user = User::where('email', $data['email'])->first();
            if($user){
                $user->password = bcrypt($data['password']);
                $user->save();
                session::flash('success', 'Đổi mật khẩu thành công');
                return redirect()->route('login');
            }else{
                session::flash('error', 'Email không tồn tại');
                return redirect()->route('login');
            }
        }
        return view('auth.change-password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}

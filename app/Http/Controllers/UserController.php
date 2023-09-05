<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Role;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function list()
    {
        $items = $this->user->join('department', 'users.department_id', '=', 'department.id')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select('users.*', 'department.name as department_name', 'roles.name as role_name')
            ->get();
        return view('user.list', compact('items'));
    }

    public function add(UserRequest $request)
    {
        $departments = Department::all();
        $roles = Role::all();
        if ($request->isMethod('post')) {
            $data = $request->except(['_token', 're-password']);
            $data['email_verified_at'] = Carbon::now('Asia/Ho_Chi_Minh');
            $data['password'] = Hash::make($request->password);
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $data['avatar'] = uploadFile('uploads/avatar', $request->file('avatar'));
            }
            $data['email_verified_at'] = Carbon::now('Asia/Ho_Chi_Minh');
            $result = $this->user->create($data);
            if ($result) {
                session()->flash('success', 'Thêm mới thành công');
            } else {
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->route('user.add');
            }
            return redirect()->route('user.list');
        }
        return view('user.add', compact('departments', 'roles'));
    }

    public function edit(UserRequest $request){
        $departments = Department::all();
        $roles = Role::all();
        $item = $this->user->find($request->id);
        if ($request->isMethod('post')) {                                                                              
            $data = $request->all();
            if($request->password){
                $data['password'] = Hash::make($request->password);
            }
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                if($item->avatar){
                    Storage::delete('public/'.$item->avatar);
                }
                $data['avatar'] = uploadFile('user', $request->file('avatar'));
            }
            $result = $item->update($data);
            if ($result) {
                session()->flash('success', 'Cập nhật thành công');
            } else {
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->route('user.edit', ['id' => $request->id]);
            }
            return redirect()->route('user.list');
        }
        return view('user.edit', compact('item', 'departments', 'roles'));
    }

    public function delete($id){
        $item = $this->user->find($id);
        if($item->avatar){
            Storage::delete('public/'.$item->avatar);
        }
        $result = $item->delete();
        if ($result) {
            session()->flash('success', 'Xóa thành công');
        } else {
            session()->flash('error', 'Xóa thất bại');
        }
        return redirect()->route('user.list');
    }
}

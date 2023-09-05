<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    protected $role;

    public function __construct()
    {
        $this->role = new Role();
    }

    public function list(){
        $items = $this->role->all();
        return view('role.list', compact('items'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $result = $this->role->create($data);
            if($result){
                session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->route('role.add');
            }
            return redirect()->route('role.list');
        }
        return view('role.add');
    }

    public function edit(Request $request, $id){
        $item = $this->role->find($id);
        if($request->isMethod('post')){
            $data=$request->all();
            $result = $item->update($data);
            if($result){
                session()->flash('success', 'Cập nhật thành công');
            }else{
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->route('role.edit', ['id'=>$id]);
            }
            return redirect()->route('role.list');
        }
        return view('role.edit', compact('item'));
    }
}

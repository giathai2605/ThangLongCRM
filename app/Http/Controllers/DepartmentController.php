<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;

class DepartmentController extends Controller
{
    //
    protected $department;

    public function __construct()
    {
        $this->department = new Department();
    }

    public function list()
    {
        // join colum name of users of table users as manager
        $items = $this->department->join('users', 'department.manager_id', '=', 'users.id')
            ->select('department.*', 'users.name as manager_name')
            ->get();
        return view('department.list', compact('items'));
    }

    public function add(Request $request){
        $users = User::all();
        if($request->isMethod('post')){
            $data=$request->all();
            $result = $this->department->create($data);
            if($result){
               session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->route('department.add');
            }
            return redirect()->route('department.list');
        }
        return view('department.add',compact('users'));
    }

    public function edit(Request $request, $id){
        $users = User::all();
        $item = $this->department->find($id);
        if($request->isMethod('post')){
            $data=$request->all();
            $result = $item->update($data);
            if($result){
               session()->flash('success', 'Cập nhật thành công');
            }else{
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->route('department.edit');
            }
            return redirect()->route('department.list');
        }
        return view('department.edit', compact(['item','users']));
    }

    public function delete($id){
        $item = $this->department->find($id);
        $result = $item->delete();
        if($result){
            session()->flash('success', 'Xóa thành công');
        }else{
            session()->flash('error', 'Xóa thất bại');
        }
        return redirect()->route('department.list');
    }


}

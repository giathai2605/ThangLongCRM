<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnnounceForDepartment;
use App\Models\Department;

class AnnounceForDepartmentController extends Controller
{
    //
    protected $announceForDepartment;
    public function __construct()
    {
        $this->announceForDepartment = new AnnounceForDepartment();
    }

    public function list(){
        $items = $this->announceForDepartment->all();
        return view('announce.department', compact('items'));
    }

    public function detail($id){
        $item= $this->announceForDepartment->find($id);
        $departments= Department::all();
        return view('announce.detail',compact(['item','departments']));
    }

    public function viewAdd(){
        $departments= Department::all();
        return view('announce.add',compact('departments'));
    }

    public function add(Request $request){
        $departments= Department::all();
        if($request->isMethod('post')){
            $data= $request->except('_token');
            $result = $this->announceForDepartment->create($data);
            if($result){
                session()->flash('success','Thêm mới thành công');
            }else{
                session()->flash('error','Thêm mới thất bại');
                return redirect()->back();
            }
            return redirect()->route('announce-by-department.list');
        }
        return view('announce.add',compact('departments'));
    }

}

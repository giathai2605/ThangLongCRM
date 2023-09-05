<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Department;

class ProjectController extends Controller
{
    //
    protected $project;

    public function __construct()
    {
        $this->project = new Project();
    }

    public function list()
    {
        $items = $this->project->all();
        return view('project.list', compact('items'));
    }

    public function add(Request $request)
    {
        $departments = Department::all();
        if($request->isMethod('post')){
            $result = $this->project->create($request->all());
            if($result){
                session()->flash('success', 'Thêm mới dự án thành công');
            }else{
                session()->flash('error', 'Thêm mới dự án thất bại');
                return redirect()->back();
            }
            return redirect()->route('project.list');
        }
        return view('project.add',compact('departments'));
    }

    public function edit(Request $request,$id){
        $departments = Department::all();
        $item = $this->project->find($id);
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $result = $item->update($data);
            if($result){
                session()->flash('success', 'Cập nhật dự án thành công');
            }else{
                session()->flash('error', 'Cập nhật dự án thất bại');
                return redirect()->back();
            }
            return redirect()->route('project.list');
        }
        return view('project.edit',compact('item','departments'));
    }
}

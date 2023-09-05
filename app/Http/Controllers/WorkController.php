<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    //
    protected $work;

    public function __construct()
    {
        $this->work = new Work();
    }

    public function list($id)
    {
        $items = $this->work->join('projects', 'work.project_id', '=', 'projects.id')
            ->select('work.*','projects.name as project_name')
            ->where('work.user_id', $id)
            ->get();
        return view('work.list', compact('items'));
    }

    public function overview(){
        $items = $this->work->join('projects', 'work.project_id', '=', 'projects.id')
            ->select('work.*','projects.name as project_name')
            ->get();
        return view('work.overview',compact('items'));
    }

    public function add(Request $request){
        $projects = Project::all();
        $users=User::all();
        if($request->isMethod('post')){
            $data=$request->all();
            // dd($data);
            $result = $this->work->create($data);
            if($result){
               session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->route('work.add');
            }
            return redirect()->route('work.overview');
        }
        return view('work.add',compact(['projects','users']));
    }

    public function edit(Request $request, $id){
        $projects = Project::all();
        $users=User::all();
        $item = $this->work->find($id);
        if($request->isMethod('post')){
            $data=$request->all();
            $result = $item->update($data);
            if($result){
               session()->flash('success', 'Cập nhật thành công');
            }else{
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->route('work.edit');
            }
            return redirect()->route('work.overview');
        }
        return view('work.edit',compact(['projects','users','item']));
    }

    public function complete($id){
        $item = $this->work->find($id);
        $item->status=1;
        $item->save();
        return redirect()->route('work.list',['id'=>Auth::user()->id]);
    }

    public function uncomplete($id){
        $item = $this->work->find($id);
        $item->status=0;
        $item->save();
        return redirect()->route('work.list',['id'=>Auth::user()->id]);
    }

    public function delete($id){
        $item = $this->work->find($id);
        $result = $item->delete();
        if($result){
            session()->flash('success', 'Xóa thành công');
        }else{
            session()->flash('error', 'Xóa thất bại');
        }
        return redirect()->route('work.overview');
    }
    
}

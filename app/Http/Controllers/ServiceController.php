<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    //
    protected $service;

    public function __construct()
    {
        $this->service = new Service();
    }

    public function list(){
    //    join colum name of table service_category as category_name
        $items = $this->service->join('service_category','service.category_id','=','service_category.id')->select('service.*','service_category.name as category_name')->get();
        return view('service.list', compact('items'));
    }

    public function add(Request $request){
        $categories = ServiceCategory::all();
        if($request->isMethod('post')){
            $data=$request->except('_token');
            $result = $this->service->create($data);
            if($result){
               session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->back();
            }
            return redirect()->route('service.list');
        }
        return view('service.add', compact('categories'));
    }

    public function edit(Request $request,$id){
        $categories = ServiceCategory::all();
        $item = $this->service->find($id);
        if($request->isMethod('post')){
            $data=$request->except('_token');
            $result = $item->update($data);
            if($result){
               session()->flash('success', 'Cập nhật thành công');
            }else{
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->back();
            }
            return redirect()->route('service.list');
        }
        return view('service.edit', compact('item','categories'));
    }

    public function delete($id){
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    //
    protected $serviceCategory;

    public function __construct()
    {
        $this->serviceCategory = new ServiceCategory();
    }

    public function list(){
        $items = $this->serviceCategory->all();
        return view('service.category', compact('items'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            // dd($data);
            $result = $this->serviceCategory->create($data);
            if($result){
               session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->back();
            }
            return redirect()->route('service-cate.list');
        }
        return view('service.addCate');
    }

    public function edit(Request $request){
        $id = $request->id;
        $item = $this->serviceCategory->find($id);
        if($request->isMethod('post')){
            $data=$request->except('_token');
            // dd($data);
            $result = $item->update($data);
            if($result){
               session()->flash('success', 'Cập nhật thành công');
            }else{
                session()->flash('error', 'Cập nhật thất bại');
                return redirect()->route('service-cate.edit', ['id'=>$id]);
            }
            return redirect()->route('service-cate.list');
        }
        return view('service.editCate', compact('item'));
    }

    public function delete($id){
        $item = $this->serviceCategory->find($id);
        $result = $item->delete();
        if($result){
            session()->flash('success', 'Xóa thành công');
        }else{
            session()->flash('error', 'Xóa thất bại');
        }
        return redirect()->route('service-cate.list');
    }
}

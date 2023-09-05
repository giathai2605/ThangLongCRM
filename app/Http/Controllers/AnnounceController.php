<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class AnnounceController extends Controller
{
    //
    protected $announce;

    public function __construct()
    {
        $this->announce = new Announce();
    }

    public function list()
    {
        $items = $this->announce->all();
        return view('announce.list', compact('items'));
    }

    public function detail($id){
        $item = $this->announce->find($id);
        return view('announce.detail',compact('item'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $data= $request->except('_token');
            $result = $this->announce->create($data);
            if($result){
                session()->flash('success','Thêm mới thành công');
            }else{
                session()->flash('error','Thêm mới thất bại');
                return redirect()->back();
            }
            return redirect()->route('announce.list');
        }
        return view('announce.add');
    }
}

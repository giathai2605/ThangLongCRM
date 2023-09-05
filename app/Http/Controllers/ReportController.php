<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    //
    protected $report;

    public function __construct()
    {
        $this->report = new Report();
    }

    public function list(){
        $items = $this->report->all();
        return view('report.list', compact('items'));
    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $data=$request->except('_token');
            if($request->hasFile('fileName')){
                $data['fileName'] = uploadFile('report',$request->file('fileName'));
                $data['fileBaseName'] = $request->file('fileName')->getClientOriginalName();
            }
            // dd($data);
            $this->report->fill($data);
            $result = $this->report->save();
            if($result){
                session()->flash('success', 'Thêm mới thành công');
            }else{
                session()->flash('error', 'Thêm mới thất bại');
                return redirect()->route('report.add');
            }
            return redirect()->route('report.list');
        }
        return view('report.add');
    }
}

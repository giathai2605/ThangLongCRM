@extends('template.layout')
@section('content')

<div class="layout-top-spacing mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Tạo chủ đề báo cáo</h4>
</div>

<form class="row px-4 g-3 mt-md-3" action="{{route('report.add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <label class="form-label">Tên dự án</label>
        <input type="text" class="form-control" name="title" placeholder="Tên báo cáo..." >
    </div>
   
    <div class="col-md-6">
        <label class="form-label">Mẫu báo cáo</label>
        <input type="file" name="fileName" class="form-control">
    </div>

    <div class="col-md-12">
        <label for="" class="form-label">Mô tả dự án</label>
        <textarea name="description" class="form-control" rows="3" placeholder="Mô tả dự án..."></textarea>
    </div>
    <input type="hidden" value="{{Auth::user()->department_id}}" name="department_id">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
</form>

@endsection
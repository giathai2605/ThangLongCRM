@extends('template.layout')
@section('content')
<div class="seperator-header layout-top-spacing px-4">
    <h4 class="fs-3">Chỉnh sửa</h4>
    </div>
    <form class="row g-3 px-4" action="{{route('work.edit',['id'=>$item->id])}}" method="post">
        @csrf
        <div class="col-md-12">
            <label class="form-label">Tiêu đề *</label>
            <input type="text" class="form-control" value="{{$item->title}}" name="title" placeholder="Tiêu đề">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Ngày bắt đầu *</label>
            <input type="date" name="start_date" value="{{formatDateWithoutTime($item->start_date)}}" class="form-control" id="" >
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Ngày kết thúc *</label>
            <input type="date" name="end_date" value="{{formatDateWithoutTime($item->end_date)}}" class="form-control" id="" >
        </div>
        <div class="col-md-4">
            <label class="form-label">Chọn dự án *</label>
            <select name="project_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}" <?= $item->project_id == $project->id ? "selected" : "" ?> >{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Chọn nhân viên *</label>
            <select name="user_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}" <?= $user->id == $item->user_id ? "selected" : "" ?> >{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Trạng thái *</label>
            <select name="status" class="form-select">
                <option value="1" <?= $item->status == 1 ? "selected" : "" ?> >Đã hoàn thành</option>
                <option value="0" <?= $item->status == 0 ? "selected" : "" ?> >Chưa hoàn thành</option>
            </select>
        </div>
        <div class="col-md-12">
            <label class="form-label">Nội dung *</label>
           <textarea name="content" id="" class="form-control" placeholder="Nhập nội dung công việc...">{{$item->content}}</textarea>
        </div>
       
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>

  
@endsection

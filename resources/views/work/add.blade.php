@extends('template.layout')
@section('content')
<div class="seperator-header layout-top-spacing px-4">
    <h4 class="fs-3">Giao việc</h4>
    </div>
    <form class="row g-3 px-4" action="{{route('work.add')}}" method="post">
        @csrf
        <div class="col-md-12">
            <label class="form-label">Tiêu đề *</label>
            <input type="text" class="form-control" name="title" placeholder="Tiêu đề">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Ngày bắt đầu *</label>
            <input type="date" name="start_date" class="form-control" id="" >
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Ngày kết thúc *</label>
            <input type="date" name="end_date" class="form-control" id="" >
        </div>
        <div class="col-md-6">
            <label class="form-label">Chọn dự án *</label>
            <select name="project_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Chọn nhân viên *</label>
            <select name="user_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label class="form-label">Nội dung *</label>
           <textarea name="content" id="" class="form-control" placeholder="Nhập nội dung công việc..."></textarea>
        </div>
        <input type="hidden" name="status" value="0">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>

  
@endsection

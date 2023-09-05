@extends('template.layout')
@section('content')
    <div class="layout-top-spacing mt-md-5 px-4">
        <h4 class="fw-bold fs-3">Tạo mới dự án</h4>
    </div>

    <form class="row px-4 g-3 mt-md-3" action="{{route('project.add')}}" method="post">
        @csrf
        <div class="col-md-12">
            <label class="form-label">Tên dự án</label>
            <input type="text" class="form-control" name="name" placeholder="Tên dự án..." >
        </div>
        <div class="col-md-6">
            <label class="form-label">Ngày bắt đầu</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Ngày kết thúc</label>
            <input type="date" name="end_date" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Phòng ban</label>
            <select name="department_id" class="form-select">
                <option selected>Choose...</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Mô tả dự án</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Mô tả dự án..."></textarea>
        </div>
        <input type="hidden" value="0" name="status">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
    
@endsection

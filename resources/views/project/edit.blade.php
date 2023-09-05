@extends('template.layout')
@section('content')
    <div class="layout-top-spacing mt-md-5 px-4">
        <h4 class="fw-bold fs-3">Cập nhật dự án</h4>
    </div>

    <form class="row px-4 g-3 mt-md-3" action="{{route('project.edit',['id'=>$item->id])}}" method="post">
        @csrf
        <div class="col-md-12">
            <label class="form-label">Tên dự án</label>
            <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Tên dự án..." >
        </div>
        <div class="col-md-6">
            <label class="form-label">Ngày bắt đầu</label>
            <input type="date" name="start_date" value="{{formatDateWithoutTime($item->start_date)}}" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Ngày kết thúc</label>
            <input type="date" name="end_date" value="{{formatDateWithoutTime($item->end_date)}}" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Phòng ban</label>
            <select name="department_id" class="form-select">
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" <?= $department->id==$item->department_id ? "selected" : "" ?> >{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Phòng ban</label>
            <select name="status" class="form-select">
                <option value="1" <?= $item->status==1?"selected":"" ?> >Đã hoàn thành</option>
                <option value="0" <?= $item->status==0?"selected":"" ?> >Chưa hoàn thành</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="" class="form-label">Mô tả dự án</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Mô tả dự án...">{{$item->description}}</textarea>
        </div>
       
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
@endsection

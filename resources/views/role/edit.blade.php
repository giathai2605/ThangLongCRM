@extends('template.layout')
@section('content')

<div class="layout-top-spacing mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Sửa thông tin vai trò</h4>
</div>

<form class=" px-4 g-3 mt-md-3" action="{{route('role.edit',['id'=>$item->id])}}" method="post">
    @csrf
    <div class="col-md-6 mt-md-3">
        <label class="form-label">Tên vai trò</label>
        <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Tên phòng ..." >
    </div>

    <div class="col-md-6 mt-md-3">
        <label for="" class="form-label">Mô tả </label>
        <textarea name="description" class="form-control" rows="3" placeholder="Mô tả ....">{{$item->description}}</textarea>
    </div>
    <div class="col-12 mt-md-3">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>

@endsection
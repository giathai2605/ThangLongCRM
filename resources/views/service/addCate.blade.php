@extends('template.layout')
@section('content')

<div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Thêm mới danh mục</h4>
</div>
    <form class="px-4" action="{{route('service-cate.add')}}" method="POST">
        @csrf
        <div class="col-md-6 mt-2">
            <label class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Tên dịch mục...">
        </div>
        <div class="col-md-6 mt-2">
            <label  class="form-label">Mô tả</label>
            <textarea name="description" class="form-control" >{{old('description')}}</textarea>
        </div>
        
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>


@endsection
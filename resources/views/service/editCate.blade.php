@extends('template.layout')
@section('content')

<div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Cập nhật danh mục</h4>
</div>
    <form class="px-4" action="{{route('service-cate.edit',['id'=>$item->id])}}" method="POST">
        @csrf
        <div class="col-md-6 mt-2">
            <label class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Tên dach mục...">
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="Nhập mô tả danh mục...">{{$item->description}}</textarea>
        </div>
        
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>


@endsection
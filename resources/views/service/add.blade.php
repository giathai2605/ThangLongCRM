@extends('template.layout')
@section('content')

<div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Thêm mới dịch vụ</h4>
</div>
    <form class="row g-3 px-4" action="{{route('service.add')}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label class="form-label">Tên dịch vụ</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Tên dịch vụ...">
        </div>
        <div class="col-md-6">
            <label  class="form-label">Mã dịch vụ</label>
            <input type="text" name="service_code" class="form-control" value="{{old('service_code')}}" placeholder="Mã dịch vụ...">
        </div>
        <div class="col-md-6">
            <label class="form-label">Phí dịch vụ</label>
            <input type="number" name="price" value="{{old('price')}}" class="form-control" >
        </div>
        <div class="col-md-6">
            <label class="form-label">Danh mục</label>
            <select name="category_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Trạng thái</label>
            <select name="status" class="form-select">
                <option selected value="1">Đang hoạt động</option>
                <option value="0">Ngưng hoạt động</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="" class="form-label">Mô tả dịch vụ</label>
            <textarea name="description" class="form-control" placeholder="Mô tả dịch vụ tại đây...">{{old('description')}}</textarea>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>

@endsection

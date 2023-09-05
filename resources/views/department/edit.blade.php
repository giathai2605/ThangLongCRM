@extends('template.layout')
@section('content')

<div class="layout-top-spacing mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Chỉnh sửa phòng ban</h4>
</div>

<form class=" px-4 g-3 mt-md-3" action="{{route('department.edit',['id'=>$item->id])}}" method="post">
    @csrf
    <div class="col-md-6 mt-md-3">
        <label class="form-label">Tên dự án</label>
        <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Tên dự án..." >
    </div>

    <div class="col-md-6 mt-md-3">
        <label class="form-label">Trưởng phòng</label>
        <select name="manager_id" class="form-select">
            <option selected>Choose...</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" <?= $item->manager_id == $user->id ? "selected" : "" ?> >{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mt-md-3">
        <label for="" class="form-label">Mô tả dự án</label>
        <textarea name="description" class="form-control" rows="3" placeholder="Mô tả dự án...">{{$item->description}}</textarea>
    </div>
    <div class="col-12 mt-md-3">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>

@endsection
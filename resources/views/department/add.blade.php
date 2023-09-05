@extends('template.layout')
@section('content')

<div class="layout-top-spacing mt-md-5 px-4">
    <h4 class="fw-bold fs-3">Thêm phòng ban</h4>
</div>

<form class=" px-4 g-3 mt-md-3" action="{{route('department.add')}}" method="post">
    @csrf
    <div class="col-md-6 mt-md-3">
        <label class="form-label">Tên phòng</label>
        <input type="text" class="form-control" name="name" placeholder="Tên phòng ..." >
    </div>

    <div class="col-md-6 mt-md-3">
        <label class="form-label">Trưởng phòng</label>
        <select name="manager_id" class="form-select">
            <option selected>Choose...</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mt-md-3">
        <label for="" class="form-label">Mô tả </label>
        <textarea name="description" class="form-control" rows="3" placeholder="Mô tả ...."></textarea>
    </div>
    <div class="col-12 mt-md-3">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
</form>

@endsection
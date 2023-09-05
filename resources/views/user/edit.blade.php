@extends('template.layout')
@section('content')
    <div class="layout-top-spacing px-4">
        <h4 class="fs-4 fw-bold">Cập nhật thông tin nhân viên</h4>
    </div>

    <form class="row g-3 px-4 mt-md-3" method="post" action="{{route('user.edit',['id'=>$item->id])}}">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Họ và tên...">
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$item->email}}" placeholder="example@gmail.com">
            @error('email')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="phone" value="{{$item->phone}}" placeholder="+84 123-4567">
            @error('phone')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{$item->address}}" placeholder="Địa chỉ...">
            @error('address')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Phòng ban</label>
            <select name="department_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" <?= $item->department_id==$department->id ? "selected":"" ?> >{{ $department->name }}</option>
                @endforeach
            </select>
            @error('department_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Chức vụ</label>
            <select name="role_id" class="form-select">
                <option selected value="">Choose...</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" <?= $item->role_id==$role->id ? "selected":"" ?>>{{ $role->name }}</option>
                @endforeach
            </select>
            @error('role_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <fieldset class="row">
                <label class="form-label col-sm-2 pt-3">Giới tính</label>
                <div class="col-sm-10 pt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="1">
                        <label class="form-check-label" for="gridRadios1">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="0">
                        <label class="form-check-label" for="gridRadios2">
                            Nữ
                        </label>
                    </div>
                </div>
            </fieldset>
            @error('gender')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-9">
                 <label  class="form-label">Avatar</label>
                 <input type="file" accept="image/*" name="avatar" value="{{old('avatar')}}" id="avatar" class="form-control" >
                </div>
                <div class="col-md-3">
                 <img width="80" height="50" src="{{$item->avatar?Storage::url($item->avatar):"https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg"}}" alt="" class="img-fluid" id="image_preview">
                </div>
             </div>
             @error('avatar')
                <small class="text-danger">{{$message}}</small>
             @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
@endsection

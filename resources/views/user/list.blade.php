@extends('template.layout')
@section('content')
    <div class="d-flex justify-content-between seperator-header layout-top-spacing px-4">
        <h4 class="fs-5 fw-bold">Danh sách nhân viên</h4>
        <a class="btn btn-outline-warning" href="{{route('user.add')}}">+ Thêm mới</a>
    </div>

    <div class="row layout-spacing px-4">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> ID </th>
                                <th class="text-center">Họ tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Giới tính</th>
                                <th class="text-center">Phòng ban</th>
                                <th class="text-center">Vai trò</th>
                                <th class="text-center dt-no-sorting fw-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $key => $item)
                            <tr>
                                <td class="checkbox-column text-center"> {{$key+1}} </td>
                                <td class="text-center">
                                    {{$item->name}}
                                </td>
                                <td class="text-center">{{$item->email}}</td>
                                <td class="textx-center">{{$item->phone}}</td>
                                <td class="text-center">{{$item->gender?"Nam":"Nữ"}}</td>
                                <td class="text-center">{{$item->department_name}}</td>
                                <td class="text-center">{{$item->role_name}}</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="{{route('user.edit',['id'=>$item->id])}}" class="bs-tooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" data-original-title="Edit"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a></li>
                                        <li><a href="{{route('user.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="bs-tooltip" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Delete" data-original-title="Delete"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash p-1 br-8 mb-1">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

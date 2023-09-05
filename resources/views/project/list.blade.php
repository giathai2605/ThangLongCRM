@extends('template.layout')
@section('content')
<div class="d-flex justify-content-between layout-top-spacing mt-md-5 px-4">
    <h4 class="">Danh sách dự án</h4>
    <a class="btn btn-outline-warning" href="{{route('project.add')}}">+ Thêm mới</a>
</div>

<div class="row layout-spacing mt-3 px-4">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <table id="style-3" class="table style-3 dt-table-hover">
                    <thead>
                        <tr>
                            <th class="checkbox-column text-center">  #ID </th>
                            <th>Tên dự án</th>
                            <th>Mô tả</th>
                            <th class="text-center">Phòng ban</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center dt-no-sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td class="checkbox-column text-center"> {{$key+1}} </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description?$item->description:"Chưa có mô tả"}}</td>
                                <td class="text-center"> {{$item->department_id}} </td>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <span class="table-inner-text">{{formatDate($item->start_date)}}</span>
                                </td>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <span class="table-inner-text">{{formatDate($item->end_date)}}</span>
                                </td>
                                <td class="text-center">
                                    @if($item->status == 1)
                                        <span class="badge badge-success">Complete</span>
                                    @elseif($item->status == 0)
                                        <span class="badge badge-danger">Unfinished</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="{{route('project.edit',['id'=>$item->id])}}" class="bs-tooltip"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Edit" data-original-title="Edit"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                    <path
                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a></li>
                                        <li><a href="{{route('project.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="bs-tooltip"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Delete" data-original-title="Delete"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash p-1 br-8 mb-1">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg>
                                        </a></li>
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

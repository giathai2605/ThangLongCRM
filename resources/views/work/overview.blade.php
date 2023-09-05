@extends('template.layout')
@section('content')

<div class="layout-top-spacing px-4 mb-4">
    <h4 class="fw-bold fs-3">Bảng tổng quan công việc</h4>
</div>

<div class="row layout-spacing px-4">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <table id="data-table" class="table dt-table-hover">
                    <thead>
                        <tr>
                            <th class="checkbox-column dt-no-sorting"> #ID </th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Dự án</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th class="text-center">Status</th>
                            <th class="text-center dt-no-sorting"><a class="btn btn-outline-warning" href="{{route('work.add')}}">+ Giao việc</a></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($items as $key => $item)

                       <tr>
                        <td class="checkbox-column"> {{$key+1}} </td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->project_name}}</td>
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
                            <span class="shadow-none badge badge-primary">Complete</span>
                            @elseif($item->status == 0)
                            <span class="shadow-none badge badge-danger">Unfinished</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="action-btns">
                                <a href="{{route('work.edit',['id'=>$item->id])}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </a>
                                <a href="{{route('work.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                </a>
                            </div>
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

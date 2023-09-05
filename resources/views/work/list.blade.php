@extends('template.layout')
@section('content')
    <div class="table-responsive">

        <div class="layout-top-spacing px-4 mb-4">
            <h4 class="fw-bold fs-3">Danh sách công việc</h4>
        </div>
        <table class="table table-bordered px-4">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Dự án</th>
                    <th scope="col">Ngày bắt đầu</th>
                    <th scope="col">Ngày kết thúc</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach($items as $key => $item)

               <tr>
                <td class="text-center">
                    <span class="badge badge-light-danger">{{$key+1}}</span>
                </td>
                <td>
                    <h6>{{$item->title}}</h6>
                </td>
                <td>
                    <p class="mb-0">{{$item->content}}</p>
                    
                </td>
                <td>
                    <p class="mb-0">{{$item->project_name}}</p>
                </td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">{{formatDate($item->start_date)}}</span>
                </td>

                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text">{{formatDate($item->end_date)}}</span>
                </td>
                
                <td class="text-center">
                    @if($item->status == 0)
                    <span class="badge badge-light-danger">Chưa hoàn thành</span>
                    @elseif($item->status == 1)
                    <span class="badge badge-light-primary">Đã hoàn thành</span>
                    @endif
                </td>
                <td class="text-center">
                    @if($item->status == 0)
                    <div class="action-btns">
                        <a href="{{route('work.complete',['id'=>$item->id])}}" class="btn btn-outline-success">Completed</a>
                    </div>
                    @elseif($item->status == 1)
                    <div class="action-btns">
                        <a href="{{route('work.uncomplete',['id'=>$item->id])}}" class="btn btn-outline-danger">Uncompleted</a>
                    </div>
                    @endif
                </td>
            </tr>

               @endforeach

            </tbody>
        </table>
    </div>
@endsection

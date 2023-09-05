@extends('template.layout')
@section('content')
    <div class="d-flex justify-content-between layout-top-spacing mt-md-5 px-5">
        <h4 class="">Danh sách phòng ban</h4>
        <a class="btn btn-outline-warning" href="{{ route('department.add') }}">+ Thêm mới</a>
    </div>

    <div class="table table-responsive mt-md-3 px-5 col-md-10">
        <table id="style-3" class="table dt-table-hover style-3">
            <thead>
                <tr>
                    <th class="checkbox-area" scope="col">
                        #ID
                    </th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Trưởng phòng</th>
                    <th class="text-center" scope="col">Mô tả</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $key => $item)
                    <tr>
                        <td>
                           {{$key+1}}
                        </td>
                        <td class="text-center">{{$item->name}}</td>
                        <td class="text-center">{{$item->manager_name}}</td>
                        <td class="text-center">
                            {{$item->description?$item->description:"Chưa có mô tả"}}
                        </td>
                        <td class="text-center">
                            <ul class="table-controls ">
                                <li><a href="{{route('department.edit',['id'=>$item->id])}}" class="bs-tooltip"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Edit" data-original-title="Edit"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="">
                                            <path
                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg></a></li>
                                <li><a href="{{route('department.delete',['id'=>$item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="bs-tooltip"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Delete" data-original-title="Delete"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="">
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
    
@endsection

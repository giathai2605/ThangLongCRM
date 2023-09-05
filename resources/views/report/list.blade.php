@extends('template.layout')
@section('content')

<div class="d-flex justify-content-between layout-top-spacing mt-md-5 px-5">
    <h4 class="">Mục báo cáo</h4>
    <a class="btn btn-outline-warning" href="{{route('report.add')}}">+ Thêm mới</a>
</div>

<div class="px-5">
    @foreach($items as $item) 

    <div>
        <h3>{{$item->title}}</h3>
        <iframe src='{{Storage::url($item->fileName)}}' width="200" height="100" frameborder='0'> <a target='_blank' href='http://office.com'>{{$item->fileBaseName}}</a></iframe>
    </div>

    @endforeach
</div>

@endsection
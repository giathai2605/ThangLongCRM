@extends('template.layout')
@section('content')
    <div class="header layout-top-spacing px-4 mb-4">

        <h4 class="fw-bold fs-3">
            <a href="{{route('announce.list')}}">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <style>
                svg {
                    fill: #ffffff
                }
            </style>
            <path
                d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3V256v41.7L459.5 440.6zM256 352V256 128 96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V352z" />
        </svg>
        Quay lại bảng tin 
            </a>
        </h4>
    </div>

    <div class="col-md-10 mx-auto">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$item->title}}</h1>
            </div>
            <div class="col-md-12 mt-2">
                <p>{{$item->content}}</p>
            </div>
        </div>
    </div>

@endsection

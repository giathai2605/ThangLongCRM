@extends('template.layout')
@section('content')
    <div class="header layout-top-spacing px-4 mb-4">

        <h4 class="fw-bold fs-3"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg><span class="badge badge-success"></span>
            Bảng thông báo</h4>
    </div>

    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing px-4">
        <div class="widget widget-activity-four">

            <div class="widget-heading">
                <h5 class="">Hoạt động gần đây</h5>
            </div>

            <div class="widget-content">

                <div class="mt-container-ra mx-auto">
                    <div class="timeline-line">
                        {{-- Đổ dữ liệu --}}
                        @foreach ($items as $item)
                        <div class="item-timeline timeline-primary">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p><a href="{{ route('announce.detail',['id'=>$item->id]) }}"><span>{{$item->title}}</span></a></p>
                                <p class="t-time">{{$item->updated_at}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="tm-action-btn">
                    <button class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></button>
                </div>
            </div>
        </div>
    </div>
@endsection

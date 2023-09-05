@extends('template.layout')
@section('content')

    <div class="col-lg-12 layout-spacing layout-top-spacing px-4">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4 class="fw-bold fs-3">Tạo thông báo mới</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="pricing-table-2 ">

                    <!-- Billing Cycle  -->
                    <div class="billing-cycle-radios mt-5">

                        <div
                            class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-label-toggle show">
                            <div class="input-checkbox">
                                <span class="switch-chk-label label-left">Chung</span>
                                <input class="switch-input" type="checkbox" role="switch" id="switch" checked
                                    onchange="this.checked ? this.closest('.inner-label-toggle').classList.add('show') : this.closest('.inner-label-toggle').classList.remove('show')">
                                <span class="switch-chk-label label-right">Riêng</span>
                            </div>
                        </div>

                    </div>

                    <!-- Pricing Plans Container -->
                    <div class="switcher-container mt-5 ">
                       
                        <div class="" id="department">
                            <form class="row g-3 px-4" action="{{route('announce-by-department.add')}}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label class="form-label">Tiêu đề *</label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Tiêu đề...">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Phòng ban *</label>
                                    <select id="inputState" name="department_id" class="form-select">
                                    <option selected value="">Choose...</option>
                                        @foreach ($departments as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Nội dung *</label>
                                    <textarea name="content" class="form-control" placeholder="Nhập nội dung thông báo...">{{old('content')}}</textarea>
                                </div>
                                <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Đăng</button>
                                </div>
                            </form>
                        </div>

                        <div class="d-none" id="general">
                            <form class="row g-3 px-4" action="{{route('announce.add')}}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label class="form-label">Tiêu đề *</label>
                                    <input type="text" name="title" class="form-control" placeholder="Tiêu đề...">
                                </div>                    
                                <div class="col-md-12">
                                    <label class="form-label">Nội dung *</label>
                                    <textarea name="content" class="form-control" placeholder="Nhập nội dung thông báo..."></textarea>
                                </div>
                                <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Đăng</button>
                                </div>
                            </form>
                        
                        </div>

                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

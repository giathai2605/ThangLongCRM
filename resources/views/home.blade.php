@extends('template.layout')
@section('content')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- Analytics -->

            <div class="row layout-top-spacing">

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget-four">
                        <div class="widget-heading">
                            <h5 class="">Lượt truy cập</h5>
                        </div>
                        <div class="widget-content">
                            <div class="vistorsBrowser">
                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chrome">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <line x1="21.17" y1="8" x2="12" y2="8"></line>
                                            <line x1="3.95" y1="6.06" x2="8.54" y2="14"></line>
                                            <line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">
                                        <div class="w-browser-info">
                                            <h6>Chrome</h6>
                                            <p class="browser-count">65%</p>
                                        </div>
                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar"
                                                    style="width: 65%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-compass">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon
                                                points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76">
                                            </polygon>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Safari</h6>
                                            <p class="browser-count">25%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                    style="width: 35%" aria-valuenow="65" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-globe">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Others</h6>
                                            <p class="browser-count">15%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                    style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value">+100</p>
                                            <h5 class="">Nhân Viên</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="w-chart">
                                        <div id="hybrid_followers"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-referral">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-box">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value">+25</p>
                                            <h5 class="">Dự án</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <div class="w-chart">
                                        <div id="hybrid_followers1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-three">
                        <div class="widget-heading">
                            <div class="d-flex gap-2 align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                                <h5>Thông báo</h5>
                            </div>

                           
                        </div>

                        <div class="widget-content">
                            <div id="uniqueVisits"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-activity-five">

                        <div class="widget-heading">
                            <h5 class="">Dự án</h5>

                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="activitylog"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu left" aria-labelledby="activitylog"
                                        style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">

                            <div class="w-shadow-top"></div>

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-secondary"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>New project created : <a href="javscript:void(0);"><span>[Cork
                                                            Admin]</span></a></h5>
                                            </div>
                                            <p>07 May, 2022</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-mail">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Mail sent to <a href="javascript:void(0);">HR</a> and <a
                                                        href="javascript:void(0);">Admin</a></h5>
                                            </div>
                                            <p>06 May, 2022</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Server Logs Updated</h5>
                                            </div>
                                            <p>01 May, 2022</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-check">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Task Completed : <a href="javscript:void(0);"><span>[Backup Files
                                                            EOD]</span></a></h5>
                                            </div>
                                            <p>30 Apr, 2022</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-file">
                                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                    </path>
                                                    <polyline points="13 2 13 9 20 9"></polyline>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Documents Submitted from <a href="javascript:void(0);">Sara</a></h5>
                                                <span class=""></span>
                                            </div>
                                            <p>25 Apr, 2022</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-new">
                                        <div class="t-dot">
                                            <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-server">
                                                    <rect x="2" y="2" width="20" height="8"
                                                        rx="2" ry="2"></rect>
                                                    <rect x="2" y="14" width="20" height="8"
                                                        rx="2" ry="2"></rect>
                                                    <line x1="6" y1="6" x2="6" y2="6">
                                                    </line>
                                                    <line x1="6" y1="18" x2="6" y2="18">
                                                    </line>
                                                </svg></div>
                                        </div>
                                        <div class="t-content">
                                            <div class="t-uppercontent">
                                                <h5>Server rebooted successfully</h5>
                                                <span class=""></span>
                                            </div>
                                            <p>10 Apr, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-shadow-bottom"></div>
                        </div>
                    </div>
                </div>

                <!--  BEGIN CUSTOM SCRIPTS FILE  -->
                <!--  END CUSTOM SCRIPTS FILE  -->
            </div>
        </div>
    @endsection

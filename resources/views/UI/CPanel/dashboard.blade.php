@extends('layouts.dashboard')

@section('konten')
    @if (Route::has('login'))
        @auth
            <a href="{{ route('home') }}" class="btn header-btn">DASHBOARD</a>
        @else
            <a href="{{ route('login') }}" class="btn header-btn">MASUK</a>
        @endauth
    @endif
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Default</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Dashboards</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>43 Pending</span>
                                            <span>72%</span>
                                        </div>
                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 20-->
                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column justify-content-end pe-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                    <!--end::Title-->
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-11.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-12.jpg">
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                        </a>
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 17-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%</span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center me-5 pt-2">
                                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"><span></span><canvas height="70" width="70"></canvas></div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 17-->
                            <!--begin::List widget 26-->
                            <div class="card card-flush h-lg-50">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                    <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                    <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                    <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                    <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                    <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                    <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::LIst widget 26-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Engage widget 10-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                                    <!--begin::Wrapper-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                        <span class="me-2">Try our all new Enviroment with
                                        <br>
                                        <span class="position-relative d-inline-block text-danger">
                                            <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
                                            <!--begin::Separator-->
                                            <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                            <!--end::Separator-->
                                        </span></span>for Free</div>
                                        <!--end::Title-->
                                        <!--begin::Action-->
                                        <div class="text-center">
                                            <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    <!--begin::Illustration-->
                                    <img class="mx-auto h-150px h-lg-200px theme-light-show" src="/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg" alt="">
                                    <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="/metronic8/demo1/assets/media/illustrations/misc/upgrade-dark.svg" alt="">
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 10-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6 mb-5 mb-xl-10">
                            <!--begin::Chart widget 8-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Performance Overview</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <ul class="nav" id="kt_chart_widget_8_tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab" aria-selected="false" tabindex="-1" role="tab">Month</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab" aria-selected="true" role="tab">Week</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel" aria-labelledby="#kt_chart_widget_8_week_toggle">
                                            <!--begin::Statistics-->
                                            <div class="mb-5">
                                                <!--begin::Statistics-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                                    <span class="badge badge-light-success fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->4,8%</span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Chart-->
                                            <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="d-flex flex-wrap pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-<gray-600 fs-6">Google Ads</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Items-->
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel" aria-labelledby="#kt_chart_widget_8_month_toggle">
                                            <!--begin::Statistics-->
                                            <div class="mb-5">
                                                <!--begin::Statistics-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                                    <span class="badge badge-light-success fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->2.2%</span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Chart-->
                                            <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px; min-height: 290px;"><div id="apexchartsoan1a0rb" class="apexcharts-canvas apexchartsoan1a0rb apexcharts-theme-light" style="width: 841px; height: 275px;"><svg id="SvgjsSvg6966" width="841" height="275" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6968" class="apexcharts-inner apexcharts-graphical" transform="translate(50.484375, 30)"><defs id="SvgjsDefs6967"><clipPath id="gridRectMaskoan1a0rb"><rect id="SvgjsRect6974" width="774.515625" height="210.8" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskoan1a0rb"></clipPath><clipPath id="nonForecastMaskoan1a0rb"></clipPath><clipPath id="gridRectMarkerMaskoan1a0rb"><rect id="SvgjsRect6975" width="774.515625" height="214.8" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect6973" width="0" height="210.8" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="1" stroke="#b6b6b6" stroke-dasharray="3" fill="#b1b9c4" class="apexcharts-xcrosshairs" y2="210.8" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG7025" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG7026" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText7028" font-family="inherit" x="0" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7029">0</tspan><title>0</title></text><text id="SvgjsText7031" font-family="inherit" x="110.0736607142857" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7032">100</tspan><title>100</title></text><text id="SvgjsText7034" font-family="inherit" x="220.14732142857142" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7035">200</tspan><title>200</title></text><text id="SvgjsText7037" font-family="inherit" x="330.22098214285717" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7038">300</tspan><title>300</title></text><text id="SvgjsText7040" font-family="inherit" x="440.2946428571429" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7041">400</tspan><title>400</title></text><text id="SvgjsText7043" font-family="inherit" x="550.3683035714286" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7044">500</tspan><title>500</title></text><text id="SvgjsText7046" font-family="inherit" x="660.4419642857142" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7047">600</tspan><title>600</title></text><text id="SvgjsText7049" font-family="inherit" x="770.5156249999999" y="239.8" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7050">700</tspan><title>700</title></text></g></g><g id="SvgjsG7077" class="apexcharts-grid"><g id="SvgjsG7078" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine7088" x1="0" y1="0" x2="770.515625" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7089" x1="0" y1="30.114285714285717" x2="770.515625" y2="30.114285714285717" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7090" x1="0" y1="60.228571428571435" x2="770.515625" y2="60.228571428571435" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7091" x1="0" y1="90.34285714285716" x2="770.515625" y2="90.34285714285716" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7092" x1="0" y1="120.45714285714287" x2="770.515625" y2="120.45714285714287" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7093" x1="0" y1="150.57142857142858" x2="770.515625" y2="150.57142857142858" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7094" x1="0" y1="180.6857142857143" x2="770.515625" y2="180.6857142857143" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine7095" x1="0" y1="210.80000000000004" x2="770.515625" y2="210.80000000000004" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG7079" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine7080" x1="0" y1="211.8" x2="0" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7081" x1="110.07365417480469" y1="211.8" x2="110.07365417480469" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7082" x1="220.14732360839844" y1="211.8" x2="220.14732360839844" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7083" x1="330.2209777832031" y1="211.8" x2="330.2209777832031" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7084" x1="440.2946472167969" y1="211.8" x2="440.2946472167969" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7085" x1="550.3682861328125" y1="211.8" x2="550.3682861328125" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7086" x1="660.4419555664062" y1="211.8" x2="660.4419555664062" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7087" x1="770.515625" y1="211.8" x2="770.515625" y2="211.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine7097" x1="0" y1="210.8" x2="770.515625" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine7096" x1="0" y1="1" x2="0" y2="210.8" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6976" class="apexcharts-bubble-series apexcharts-plot-series"><g id="SvgjsG6977" class="apexcharts-series" seriesName="SocialxCampaigns" data:longestSeries="true" rel="1" data:realIndex="0"><g id="SvgjsG6978" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG6980" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle6981" r="0" cx="137.59207589285714" cy="120.45714285714286" class="apexcharts-marker wngzuqh6ll" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="0"></circle><circle id="SvgjsCircle6982" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="0"></circle></g><g id="SvgjsG6983" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle6984" r="35.13333333333333" cx="137.59207589285714" cy="120.45714285714286" x="133.59207589285714" y="116.45714285714286" fill="rgba(0,158,247,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="35.13333333333333" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7103" r="0" cx="0" cy="0" class="apexcharts-marker wqkb94anw" fill="#009ef7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6985" class="apexcharts-series" seriesName="EmailxNewsletter" data:longestSeries="true" rel="2" data:realIndex="1"><g id="SvgjsG6986" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG6988" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle6989" r="0" cx="275.1841517857143" cy="105.4" class="apexcharts-marker ww2l65nm6" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="0"></circle><circle id="SvgjsCircle6990" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="0"></circle></g><g id="SvgjsG6991" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle6992" r="30.74166666666667" cx="275.1841517857143" cy="105.4" x="271.1841517857143" y="101.4" fill="rgba(80,205,137,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="30.74166666666667" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7104" r="0" cx="0" cy="0" class="apexcharts-marker wvethrl8li" fill="#50cd89" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6993" class="apexcharts-series" seriesName="TVxCampaign" data:longestSeries="true" rel="3" data:realIndex="2"><g id="SvgjsG6994" class="apexcharts-series-markers-wrap" data:realIndex="2"><g id="SvgjsG6996" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle6997" r="0" cx="385.2578125" cy="75.28571428571428" class="apexcharts-marker w886mxyk6" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="0"></circle><circle id="SvgjsCircle6998" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="0"></circle></g><g id="SvgjsG6999" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7000" r="26.35" cx="385.2578125" cy="75.28571428571428" x="381.2578125" y="71.28571428571428" fill="rgba(255,199,0,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7105" r="0" cx="0" cy="0" class="apexcharts-marker wal61s7z5" fill="#ffc700" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG7001" class="apexcharts-series" seriesName="GooglexAds" data:longestSeries="true" rel="4" data:realIndex="3"><g id="SvgjsG7002" class="apexcharts-series-markers-wrap" data:realIndex="3"><g id="SvgjsG7004" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7005" r="0" cx="495.3314732142857" cy="135.51428571428573" class="apexcharts-marker wxpfsyf2t" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="0"></circle><circle id="SvgjsCircle7006" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="3" default-marker-size="0"></circle></g><g id="SvgjsG7007" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7008" r="21.958333333333336" cx="495.3314732142857" cy="135.51428571428573" x="491.3314732142857" y="131.51428571428573" fill="rgba(241,65,108,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="3" default-marker-size="21.958333333333336" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7106" r="0" cx="0" cy="0" class="apexcharts-marker w6w6zscb5k" fill="#f1416c" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG7009" class="apexcharts-series" seriesName="Courses" data:longestSeries="true" rel="5" data:realIndex="4"><g id="SvgjsG7010" class="apexcharts-series-markers-wrap" data:realIndex="4"><g id="SvgjsG7012" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7013" r="0" cx="550.3683035714286" cy="60.22857142857143" class="apexcharts-marker wi88fztpw" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="0"></circle><circle id="SvgjsCircle7014" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="4" default-marker-size="0"></circle></g><g id="SvgjsG7015" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7016" r="26.35" cx="550.3683035714286" cy="60.22857142857143" x="546.3683035714286" y="56.22857142857143" fill="rgba(114,57,234,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="4" default-marker-size="26.35" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7107" r="0" cx="0" cy="0" class="apexcharts-marker wks89ehdv" fill="#7239ea" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG7017" class="apexcharts-series" seriesName="Radio" data:longestSeries="true" rel="6" data:realIndex="5"><g id="SvgjsG7018" class="apexcharts-series-markers-wrap" data:realIndex="5"><g id="SvgjsG7020" class="" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7021" r="0" cx="660.4419642857142" cy="135.51428571428573" class="apexcharts-marker wefo3e4x3" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="0"></circle><circle id="SvgjsCircle7022" r="0" cx="137.59207589285714" cy="0" class="apexcharts-nullpoint" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" rel="1" j="1" index="5" default-marker-size="0"></circle></g><g id="SvgjsG7023" class="apexcharts-series-markers apexcharts-series-bubble" clip-path="url(#gridRectMarkerMaskoan1a0rb)"><circle id="SvgjsCircle7024" r="24.593333333333334" cx="660.4419642857142" cy="135.51428571428573" x="656.4419642857142" y="131.51428571428573" fill="rgba(67,206,215,1)" fill-opacity="1" stroke-width="0" stroke-dasharray="0" stroke-opacity="0.9" rel="0" j="0" index="5" default-marker-size="24.593333333333334" class="apexcharts-marker"></circle></g><g class="apexcharts-series-markers"><circle id="SvgjsCircle7108" r="0" cx="0" cy="0" class="apexcharts-marker wbga5mlwr" fill="#43ced7" fill-opacity="1" stroke-width="0" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6979" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG6987" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG6995" class="apexcharts-datalabels" data:realIndex="2"></g><g id="SvgjsG7003" class="apexcharts-datalabels" data:realIndex="3"></g><g id="SvgjsG7011" class="apexcharts-datalabels" data:realIndex="4"></g><g id="SvgjsG7019" class="apexcharts-datalabels" data:realIndex="5"></g></g><line id="SvgjsLine7098" x1="0" y1="0" x2="770.515625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine7099" x1="0" y1="0" x2="770.515625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG7100" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG7101" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG7102" class="apexcharts-point-annotations"></g><rect id="SvgjsRect7109" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect7110" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG7051" class="apexcharts-yaxis" rel="0" transform="translate(20.484375, 0)"><g id="SvgjsG7052" class="apexcharts-yaxis-texts-g"><text id="SvgjsText7054" font-family="inherit" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7055">700</tspan><title>700</title></text><text id="SvgjsText7057" font-family="inherit" x="20" y="61.81428571428572" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7058">600</tspan><title>600</title></text><text id="SvgjsText7060" font-family="inherit" x="20" y="91.92857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7061">500</tspan><title>500</title></text><text id="SvgjsText7063" font-family="inherit" x="20" y="122.04285714285714" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7064">400</tspan><title>400</title></text><text id="SvgjsText7066" font-family="inherit" x="20" y="152.15714285714284" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7067">300</tspan><title>300</title></text><text id="SvgjsText7069" font-family="inherit" x="20" y="182.27142857142857" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7070">200</tspan><title>200</title></text><text id="SvgjsText7072" font-family="inherit" x="20" y="212.3857142857143" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7073">100</tspan><title>100</title></text><text id="SvgjsText7075" font-family="inherit" x="20" y="242.50000000000003" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan7076">0</tspan><title>0</title></text></g></g><g id="SvgjsG6969" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 137.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 199, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 65, 108);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 206, 215);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="d-flex flex-wrap pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Items-->
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 8-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            <!--begin::Tables widget 16-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-drive fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" tabindex="-1" role="tab">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-bank fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" tabindex="-1" role="tab">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-like-1 fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4" aria-selected="false" tabindex="-1" role="tab">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-remote-control fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5" aria-selected="false" tabindex="-1" role="tab">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-telegram fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_1">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsujdunio3" class="apexcharts-canvas apexchartsujdunio3 apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6560" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6562" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6561"><clipPath id="gridRectMaskujdunio3"><rect id="SvgjsRect6566" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskujdunio3"></clipPath><clipPath id="nonForecastMaskujdunio3"></clipPath><clipPath id="gridRectMarkerMaskujdunio3"><rect id="SvgjsRect6567" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6574" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6575" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6591" class="apexcharts-grid"><g id="SvgjsG6592" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6594" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6595" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6596" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6597" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6598" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6599" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6600" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6601" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6602" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6603" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6604" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6593" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6606" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6605" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6568" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6569" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6572" d="M 0 50L 0 36.666666666666664C 2.5644230769230765 36.666666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 37.5 14.653846153846153 37.5C 17.21826923076923 37.5 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664C 95.25 39.166666666666664 95.25 39.166666666666664 95.25 50M 95.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskujdunio3)" pathTo="M 0 50L 0 36.666666666666664C 2.5644230769230765 36.666666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 37.5 14.653846153846153 37.5C 17.21826923076923 37.5 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664C 95.25 39.166666666666664 95.25 39.166666666666664 95.25 50M 95.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6573" d="M 0 36.666666666666664C 2.5644230769230765 36.666666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 37.5 14.653846153846153 37.5C 17.21826923076923 37.5 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskujdunio3)" pathTo="M 0 36.666666666666664C 2.5644230769230765 36.666666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 37.5 14.653846153846153 37.5C 17.21826923076923 37.5 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6570" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6571" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6607" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6608" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6609" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6610" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6611" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6590" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6563" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-2.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts0ofkvee4l" class="apexcharts-canvas apexcharts0ofkvee4l apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6612" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6614" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6613"><clipPath id="gridRectMask0ofkvee4l"><rect id="SvgjsRect6618" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0ofkvee4l"></clipPath><clipPath id="nonForecastMask0ofkvee4l"></clipPath><clipPath id="gridRectMarkerMask0ofkvee4l"><rect id="SvgjsRect6619" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6626" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6627" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6643" class="apexcharts-grid"><g id="SvgjsG6644" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6646" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6647" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6648" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6649" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6650" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6651" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6652" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6653" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6654" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6655" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6656" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6645" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6658" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6657" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6620" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6621" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6624" d="M 0 50L 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 37.5 51.28846153846154 37.5C 53.85288461538462 37.5 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0ofkvee4l)" pathTo="M 0 50L 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 37.5 51.28846153846154 37.5C 53.85288461538462 37.5 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6625" d="M 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 37.5 51.28846153846154 37.5C 53.85288461538462 37.5 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0ofkvee4l)" pathTo="M 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 37.5 51.28846153846154 37.5C 53.85288461538462 37.5 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6622" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6623" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6659" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6660" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6661" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6662" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6663" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6642" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6615" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsc6aa333h" class="apexcharts-canvas apexchartsc6aa333h apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6664" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6666" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6665"><clipPath id="gridRectMaskc6aa333h"><rect id="SvgjsRect6670" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskc6aa333h"></clipPath><clipPath id="nonForecastMaskc6aa333h"></clipPath><clipPath id="gridRectMarkerMaskc6aa333h"><rect id="SvgjsRect6671" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6678" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6679" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6695" class="apexcharts-grid"><g id="SvgjsG6696" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6698" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6699" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6700" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6701" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6702" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6703" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6704" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6705" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6706" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6707" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6708" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6697" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6710" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6709" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6672" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6673" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6676" d="M 0 50L 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45 7.326923076923077 45C 9.891346153846154 45 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc6aa333h)" pathTo="M 0 50L 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45 7.326923076923077 45C 9.891346153846154 45 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6677" d="M 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45 7.326923076923077 45C 9.891346153846154 45 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc6aa333h)" pathTo="M 0 43.333333333333336C 2.5644230769230765 43.333333333333336 4.7625 45 7.326923076923077 45C 9.891346153846154 45 12.089423076923076 36.666666666666664 14.653846153846153 36.666666666666664C 17.21826923076923 36.666666666666664 19.416346153846153 47.5 21.98076923076923 47.5C 24.545192307692307 47.5 26.74326923076923 30.833333333333332 29.307692307692307 30.833333333333332C 31.872115384615384 30.833333333333332 34.07019230769231 36.666666666666664 36.63461538461539 36.666666666666664C 39.199038461538464 36.666666666666664 41.39711538461538 40.83333333333333 43.96153846153846 40.83333333333333C 46.52596153846154 40.83333333333333 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 47.5 58.61538461538461 47.5C 61.17980769230769 47.5 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 37.5 73.26923076923077 37.5C 75.83365384615385 37.5 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 35.83333333333333 87.92307692307692 35.83333333333333C 90.4875 35.83333333333333 92.68557692307692 42.5 95.25 42.5" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6674" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6675" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6711" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6712" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6713" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6714" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6715" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6694" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6667" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-7.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsc8y6qo6sf" class="apexcharts-canvas apexchartsc8y6qo6sf apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6716" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6718" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6717"><clipPath id="gridRectMaskc8y6qo6sf"><rect id="SvgjsRect6722" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskc8y6qo6sf"></clipPath><clipPath id="nonForecastMaskc8y6qo6sf"></clipPath><clipPath id="gridRectMarkerMaskc8y6qo6sf"><rect id="SvgjsRect6723" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6730" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6731" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6747" class="apexcharts-grid"><g id="SvgjsG6748" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6750" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6751" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6752" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6753" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6754" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6755" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6756" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6757" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6758" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6759" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6760" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6749" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6762" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6761" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6724" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6725" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6728" d="M 0 50L 0 40C 2.5644230769230765 40 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 40 21.98076923076923 40C 24.545192307692307 40 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 33.33333333333333 51.28846153846154 33.33333333333333C 53.85288461538462 33.33333333333333 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 39.166666666666664 80.59615384615385 39.166666666666664C 83.16057692307693 39.166666666666664 85.35865384615384 35 87.92307692307692 35C 90.4875 35 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc8y6qo6sf)" pathTo="M 0 50L 0 40C 2.5644230769230765 40 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 40 21.98076923076923 40C 24.545192307692307 40 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 33.33333333333333 51.28846153846154 33.33333333333333C 53.85288461538462 33.33333333333333 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 39.166666666666664 80.59615384615385 39.166666666666664C 83.16057692307693 39.166666666666664 85.35865384615384 35 87.92307692307692 35C 90.4875 35 92.68557692307692 42.5 95.25 42.5C 95.25 42.5 95.25 42.5 95.25 50M 95.25 42.5z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6729" d="M 0 40C 2.5644230769230765 40 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 40 21.98076923076923 40C 24.545192307692307 40 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 33.33333333333333 51.28846153846154 33.33333333333333C 53.85288461538462 33.33333333333333 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 39.166666666666664 80.59615384615385 39.166666666666664C 83.16057692307693 39.166666666666664 85.35865384615384 35 87.92307692307692 35C 90.4875 35 92.68557692307692 42.5 95.25 42.5" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskc8y6qo6sf)" pathTo="M 0 40C 2.5644230769230765 40 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 40 21.98076923076923 40C 24.545192307692307 40 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 33.33333333333333 51.28846153846154 33.33333333333333C 53.85288461538462 33.33333333333333 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 39.166666666666664 80.59615384615385 39.166666666666664C 83.16057692307693 39.166666666666664 85.35865384615384 35 87.92307692307692 35C 90.4875 35 92.68557692307692 42.5 95.25 42.5" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6726" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6727" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6763" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6764" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6765" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6766" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6767" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6746" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6719" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_2">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-25.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-24.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-20.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-17.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-11.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">New York</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-23.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-4.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-1.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_4">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-12.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-21.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-30.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_5">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-6.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-10.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Tables widget 16-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Card widget 18-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Body-->
                                <div class="card-body py-9">
                                    <!--begin::Row-->
                                    <div class="row gx-9 h-100">
                                        <!--begin::Col-->
                                        <div class="col-sm-6 mb-10 mb-sm-0">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('/metronic8/demo1/assets/media/stock/600x600/img-65.jpg')"></div>
                                            <!--end::Image-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-sm-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column h-100">
                                                <!--begin::Header-->
                                                <div class="mb-7">
                                                    <!--begin::Headin-->
                                                    <div class="d-flex flex-stack mb-6">
                                                        <!--begin::Title-->
                                                        <div class="flex-shrink-0 me-5">
                                                            <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                                            <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                                        </div>
                                                        <!--end::Title-->
                                                        <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Items-->
                                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <img src="/metronic8/demo1/assets/media/avatars/300-3.jpg" class="" alt="">
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
                                                                <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label bg-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-white">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
                                                                <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="mb-6">
                                                    <!--begin::Text-->
                                                    <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                                    <!--end::Text-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                            <!--begin::Date-->
                                                            <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                            <!--end::Date-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                            <!--begin::Number-->
                                                            <span class="fs-6 text-gray-700 fw-bold">$
                                                            <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold text-gray-400">Budget</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Body-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                                    <!--begin::Users group-->
                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-2.jpg">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                            <img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-3.jpg">
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Users group-->
                                                    <!--begin::Actions-->
                                                    <a href="/metronic8/demo1/../demo1/apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                                    <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor"></path>
                                                            <rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor"></rect>
                                                            <path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></a>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 18-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Chart widget 36-->
                            <div class="card card-flush overflow-hidden h-lg-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Performance</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                            <!--begin::Display range-->
                                            <div class="text-gray-600 fw-bold">28 Jul 2022</div>
                                            <!--end::Display range-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Daterangepicker-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end p-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px; min-height: 315px;"><div id="apexchartsqo9od98f" class="apexcharts-canvas apexchartsqo9od98f apexcharts-theme-light" style="width: 392.5px; height: 300px;"><svg id="SvgjsSvg6827" width="392.5" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6829" class="apexcharts-inner apexcharts-graphical" transform="translate(47.835205078125, 30)"><defs id="SvgjsDefs6828"><clipPath id="gridRectMaskqo9od98f"><rect id="SvgjsRect6834" width="341.664794921875" height="224.82" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqo9od98f"></clipPath><clipPath id="nonForecastMaskqo9od98f"></clipPath><clipPath id="gridRectMarkerMaskqo9od98f"><rect id="SvgjsRect6835" width="338.664794921875" height="225.82" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient6840" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop6841" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop6842" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop6843" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient6849" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop6850" stop-opacity="0.4" stop-color="rgba(80,205,137,0.4)" offset="0.15"></stop><stop id="SvgjsStop6851" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop6852" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG6855" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6856" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText6858" font-family="inherit" x="0" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6859"></tspan><title></title></text><text id="SvgjsText6861" font-family="inherit" x="18.592488606770836" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6862"></tspan><title></title></text><text id="SvgjsText6864" font-family="inherit" x="37.184977213541664" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6865"></tspan><title></title></text><text id="SvgjsText6867" font-family="inherit" x="55.77746582031249" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 56.7774658203125 239.32000732421875)"><tspan id="SvgjsTspan6868">9 AM</tspan><title>9 AM</title></text><text id="SvgjsText6870" font-family="inherit" x="74.36995442708331" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6871"></tspan><title></title></text><text id="SvgjsText6873" font-family="inherit" x="92.96244303385414" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6874"></tspan><title></title></text><text id="SvgjsText6876" font-family="inherit" x="111.55493164062497" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 112.554931640625 239.32000732421875)"><tspan id="SvgjsTspan6877">12 PM</tspan><title>12 PM</title></text><text id="SvgjsText6879" font-family="inherit" x="130.14742024739581" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6880"></tspan><title></title></text><text id="SvgjsText6882" font-family="inherit" x="148.73990885416666" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6883"></tspan><title></title></text><text id="SvgjsText6885" font-family="inherit" x="167.3323974609375" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 168.3323974609375 239.32000732421875)"><tspan id="SvgjsTspan6886">15 PM</tspan><title>15 PM</title></text><text id="SvgjsText6888" font-family="inherit" x="185.92488606770834" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6889"></tspan><title></title></text><text id="SvgjsText6891" font-family="inherit" x="204.51737467447919" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6892"></tspan><title></title></text><text id="SvgjsText6894" font-family="inherit" x="223.10986328125003" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 224.10986328125 239.32000732421875)"><tspan id="SvgjsTspan6895">18 PM</tspan><title>18 PM</title></text><text id="SvgjsText6897" font-family="inherit" x="241.70235188802087" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6898"></tspan><title></title></text><text id="SvgjsText6900" font-family="inherit" x="260.2948404947917" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6901"></tspan><title></title></text><text id="SvgjsText6903" font-family="inherit" x="278.8873291015625" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 279.8873291015625 239.32000732421875)"><tspan id="SvgjsTspan6904">19 PM</tspan><title>19 PM</title></text><text id="SvgjsText6906" font-family="inherit" x="297.4798177083333" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6907"></tspan><title></title></text><text id="SvgjsText6909" font-family="inherit" x="316.07230631510413" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6910"></tspan><title></title></text><text id="SvgjsText6912" font-family="inherit" x="334.66479492187494" y="244.82" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;" transform="rotate(0 1 -1)"><tspan id="SvgjsTspan6913"></tspan><title></title></text></g></g><g id="SvgjsG6937" class="apexcharts-grid"><g id="SvgjsG6938" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine6940" x1="0" y1="0" x2="334.664794921875" y2="0" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6941" x1="0" y1="36.97" x2="334.664794921875" y2="36.97" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6942" x1="0" y1="73.94" x2="334.664794921875" y2="73.94" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6943" x1="0" y1="110.91" x2="334.664794921875" y2="110.91" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6944" x1="0" y1="147.88" x2="334.664794921875" y2="147.88" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6945" x1="0" y1="184.85" x2="334.664794921875" y2="184.85" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6946" x1="0" y1="221.82" x2="334.664794921875" y2="221.82" stroke="#e4e6ef" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6939" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine6948" x1="0" y1="221.82" x2="334.664794921875" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6947" x1="0" y1="1" x2="0" y2="221.82" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6836" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6837" class="apexcharts-series" seriesName="InboundxCalls" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6844" d="M 0 221.82L 0 135.55666666666667C 6.5073710123697905 135.55666666666667 12.08511759440104 98.58666666666667 18.592488606770832 98.58666666666667C 25.099859619140624 98.58666666666667 30.677606201171873 98.58666666666667 37.184977213541664 98.58666666666667C 43.69234822591146 98.58666666666667 49.270094807942705 147.88 55.7774658203125 147.88C 62.28483683268229 147.88 67.86258341471354 147.88 74.36995442708333 147.88C 80.87732543945312 147.88 86.45507202148437 184.85 92.96244303385416 184.85C 99.46981404622395 184.85 105.04756062825521 184.85 111.554931640625 184.85C 118.06230265299479 184.85 123.64004923502603 98.58666666666667 130.14742024739581 98.58666666666667C 136.6547912597656 98.58666666666667 142.23253784179687 98.58666666666667 148.73990885416666 98.58666666666667C 155.24727986653645 98.58666666666667 160.8250264485677 123.23333333333335 167.3323974609375 123.23333333333335C 173.8397684733073 123.23333333333335 179.41751505533853 123.23333333333335 185.92488606770831 123.23333333333335C 192.4322570800781 123.23333333333335 198.01000366210937 73.94 204.51737467447916 73.94C 211.02474568684895 73.94 216.6024922688802 73.94 223.10986328125 73.94C 229.6172342936198 73.94 235.19498087565103 98.58666666666667 241.70235188802081 98.58666666666667C 248.2097229003906 98.58666666666667 253.78746948242184 98.58666666666667 260.29484049479163 98.58666666666667C 266.8022115071614 98.58666666666667 272.3799580891927 98.58666666666667 278.8873291015625 98.58666666666667C 285.3947001139323 98.58666666666667 290.9724466959635 147.88 297.4798177083333 147.88C 303.9871887207031 147.88 309.56493530273434 147.88 316.07230631510413 147.88C 322.5796773274739 147.88 328.1574239095052 172.52666666666667 334.664794921875 172.52666666666667C 334.664794921875 172.52666666666667 334.664794921875 172.52666666666667 334.664794921875 221.82M 334.664794921875 172.52666666666667z" fill="url(#SvgjsLinearGradient6840)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqo9od98f)" pathTo="M 0 221.82L 0 135.55666666666667C 6.5073710123697905 135.55666666666667 12.08511759440104 98.58666666666667 18.592488606770832 98.58666666666667C 25.099859619140624 98.58666666666667 30.677606201171873 98.58666666666667 37.184977213541664 98.58666666666667C 43.69234822591146 98.58666666666667 49.270094807942705 147.88 55.7774658203125 147.88C 62.28483683268229 147.88 67.86258341471354 147.88 74.36995442708333 147.88C 80.87732543945312 147.88 86.45507202148437 184.85 92.96244303385416 184.85C 99.46981404622395 184.85 105.04756062825521 184.85 111.554931640625 184.85C 118.06230265299479 184.85 123.64004923502603 98.58666666666667 130.14742024739581 98.58666666666667C 136.6547912597656 98.58666666666667 142.23253784179687 98.58666666666667 148.73990885416666 98.58666666666667C 155.24727986653645 98.58666666666667 160.8250264485677 123.23333333333335 167.3323974609375 123.23333333333335C 173.8397684733073 123.23333333333335 179.41751505533853 123.23333333333335 185.92488606770831 123.23333333333335C 192.4322570800781 123.23333333333335 198.01000366210937 73.94 204.51737467447916 73.94C 211.02474568684895 73.94 216.6024922688802 73.94 223.10986328125 73.94C 229.6172342936198 73.94 235.19498087565103 98.58666666666667 241.70235188802081 98.58666666666667C 248.2097229003906 98.58666666666667 253.78746948242184 98.58666666666667 260.29484049479163 98.58666666666667C 266.8022115071614 98.58666666666667 272.3799580891927 98.58666666666667 278.8873291015625 98.58666666666667C 285.3947001139323 98.58666666666667 290.9724466959635 147.88 297.4798177083333 147.88C 303.9871887207031 147.88 309.56493530273434 147.88 316.07230631510413 147.88C 322.5796773274739 147.88 328.1574239095052 172.52666666666667 334.664794921875 172.52666666666667C 334.664794921875 172.52666666666667 334.664794921875 172.52666666666667 334.664794921875 221.82M 334.664794921875 172.52666666666667z" pathFrom="M -1 295.76L -1 295.76L 18.592488606770832 295.76L 37.184977213541664 295.76L 55.7774658203125 295.76L 74.36995442708333 295.76L 92.96244303385416 295.76L 111.554931640625 295.76L 130.14742024739581 295.76L 148.73990885416666 295.76L 167.3323974609375 295.76L 185.92488606770831 295.76L 204.51737467447916 295.76L 223.10986328125 295.76L 241.70235188802081 295.76L 260.29484049479163 295.76L 278.8873291015625 295.76L 297.4798177083333 295.76L 316.07230631510413 295.76L 334.664794921875 295.76"></path><path id="SvgjsPath6845" d="M 0 135.55666666666667C 6.5073710123697905 135.55666666666667 12.08511759440104 98.58666666666667 18.592488606770832 98.58666666666667C 25.099859619140624 98.58666666666667 30.677606201171873 98.58666666666667 37.184977213541664 98.58666666666667C 43.69234822591146 98.58666666666667 49.270094807942705 147.88 55.7774658203125 147.88C 62.28483683268229 147.88 67.86258341471354 147.88 74.36995442708333 147.88C 80.87732543945312 147.88 86.45507202148437 184.85 92.96244303385416 184.85C 99.46981404622395 184.85 105.04756062825521 184.85 111.554931640625 184.85C 118.06230265299479 184.85 123.64004923502603 98.58666666666667 130.14742024739581 98.58666666666667C 136.6547912597656 98.58666666666667 142.23253784179687 98.58666666666667 148.73990885416666 98.58666666666667C 155.24727986653645 98.58666666666667 160.8250264485677 123.23333333333335 167.3323974609375 123.23333333333335C 173.8397684733073 123.23333333333335 179.41751505533853 123.23333333333335 185.92488606770831 123.23333333333335C 192.4322570800781 123.23333333333335 198.01000366210937 73.94 204.51737467447916 73.94C 211.02474568684895 73.94 216.6024922688802 73.94 223.10986328125 73.94C 229.6172342936198 73.94 235.19498087565103 98.58666666666667 241.70235188802081 98.58666666666667C 248.2097229003906 98.58666666666667 253.78746948242184 98.58666666666667 260.29484049479163 98.58666666666667C 266.8022115071614 98.58666666666667 272.3799580891927 98.58666666666667 278.8873291015625 98.58666666666667C 285.3947001139323 98.58666666666667 290.9724466959635 147.88 297.4798177083333 147.88C 303.9871887207031 147.88 309.56493530273434 147.88 316.07230631510413 147.88C 322.5796773274739 147.88 328.1574239095052 172.52666666666667 334.664794921875 172.52666666666667" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqo9od98f)" pathTo="M 0 135.55666666666667C 6.5073710123697905 135.55666666666667 12.08511759440104 98.58666666666667 18.592488606770832 98.58666666666667C 25.099859619140624 98.58666666666667 30.677606201171873 98.58666666666667 37.184977213541664 98.58666666666667C 43.69234822591146 98.58666666666667 49.270094807942705 147.88 55.7774658203125 147.88C 62.28483683268229 147.88 67.86258341471354 147.88 74.36995442708333 147.88C 80.87732543945312 147.88 86.45507202148437 184.85 92.96244303385416 184.85C 99.46981404622395 184.85 105.04756062825521 184.85 111.554931640625 184.85C 118.06230265299479 184.85 123.64004923502603 98.58666666666667 130.14742024739581 98.58666666666667C 136.6547912597656 98.58666666666667 142.23253784179687 98.58666666666667 148.73990885416666 98.58666666666667C 155.24727986653645 98.58666666666667 160.8250264485677 123.23333333333335 167.3323974609375 123.23333333333335C 173.8397684733073 123.23333333333335 179.41751505533853 123.23333333333335 185.92488606770831 123.23333333333335C 192.4322570800781 123.23333333333335 198.01000366210937 73.94 204.51737467447916 73.94C 211.02474568684895 73.94 216.6024922688802 73.94 223.10986328125 73.94C 229.6172342936198 73.94 235.19498087565103 98.58666666666667 241.70235188802081 98.58666666666667C 248.2097229003906 98.58666666666667 253.78746948242184 98.58666666666667 260.29484049479163 98.58666666666667C 266.8022115071614 98.58666666666667 272.3799580891927 98.58666666666667 278.8873291015625 98.58666666666667C 285.3947001139323 98.58666666666667 290.9724466959635 147.88 297.4798177083333 147.88C 303.9871887207031 147.88 309.56493530273434 147.88 316.07230631510413 147.88C 322.5796773274739 147.88 328.1574239095052 172.52666666666667 334.664794921875 172.52666666666667" pathFrom="M -1 295.76L -1 295.76L 18.592488606770832 295.76L 37.184977213541664 295.76L 55.7774658203125 295.76L 74.36995442708333 295.76L 92.96244303385416 295.76L 111.554931640625 295.76L 130.14742024739581 295.76L 148.73990885416666 295.76L 167.3323974609375 295.76L 185.92488606770831 295.76L 204.51737467447916 295.76L 223.10986328125 295.76L 241.70235188802081 295.76L 260.29484049479163 295.76L 278.8873291015625 295.76L 297.4798177083333 295.76L 316.07230631510413 295.76L 334.664794921875 295.76"></path><g id="SvgjsG6838" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6956" r="0" cx="0" cy="0" class="apexcharts-marker wbg8tbfxq no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6846" class="apexcharts-series" seriesName="OutboundxCalls" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath6853" d="M 0 221.82L 0 73.94C 6.5073710123697905 73.94 12.08511759440104 24.646666666666704 18.592488606770832 24.646666666666704C 25.099859619140624 24.646666666666704 30.677606201171873 24.646666666666704 37.184977213541664 24.646666666666704C 43.69234822591146 24.646666666666704 49.270094807942705 61.616666666666674 55.7774658203125 61.616666666666674C 62.28483683268229 61.616666666666674 67.86258341471354 61.616666666666674 74.36995442708333 61.616666666666674C 80.87732543945312 61.616666666666674 86.45507202148437 86.26333333333335 92.96244303385416 86.26333333333335C 99.46981404622395 86.26333333333335 105.04756062825521 86.26333333333335 111.554931640625 86.26333333333335C 118.06230265299479 86.26333333333335 123.64004923502603 61.616666666666674 130.14742024739581 61.616666666666674C 136.6547912597656 61.616666666666674 142.23253784179687 61.616666666666674 148.73990885416666 61.616666666666674C 155.24727986653645 61.616666666666674 160.8250264485677 12.323333333333323 167.3323974609375 12.323333333333323C 173.8397684733073 12.323333333333323 179.41751505533853 12.323333333333323 185.92488606770831 12.323333333333323C 192.4322570800781 12.323333333333323 198.01000366210937 49.29333333333335 204.51737467447916 49.29333333333335C 211.02474568684895 49.29333333333335 216.6024922688802 49.29333333333335 223.10986328125 49.29333333333335C 229.6172342936198 49.29333333333335 235.19498087565103 12.323333333333323 241.70235188802081 12.323333333333323C 248.2097229003906 12.323333333333323 253.78746948242184 12.323333333333323 260.29484049479163 12.323333333333323C 266.8022115071614 12.323333333333323 272.3799580891927 61.616666666666674 278.8873291015625 61.616666666666674C 285.3947001139323 61.616666666666674 290.9724466959635 61.616666666666674 297.4798177083333 61.616666666666674C 303.9871887207031 61.616666666666674 309.56493530273434 86.26333333333335 316.07230631510413 86.26333333333335C 322.5796773274739 86.26333333333335 328.1574239095052 86.26333333333335 334.664794921875 86.26333333333335C 334.664794921875 86.26333333333335 334.664794921875 86.26333333333335 334.664794921875 221.82M 334.664794921875 86.26333333333335z" fill="url(#SvgjsLinearGradient6849)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskqo9od98f)" pathTo="M 0 221.82L 0 73.94C 6.5073710123697905 73.94 12.08511759440104 24.646666666666704 18.592488606770832 24.646666666666704C 25.099859619140624 24.646666666666704 30.677606201171873 24.646666666666704 37.184977213541664 24.646666666666704C 43.69234822591146 24.646666666666704 49.270094807942705 61.616666666666674 55.7774658203125 61.616666666666674C 62.28483683268229 61.616666666666674 67.86258341471354 61.616666666666674 74.36995442708333 61.616666666666674C 80.87732543945312 61.616666666666674 86.45507202148437 86.26333333333335 92.96244303385416 86.26333333333335C 99.46981404622395 86.26333333333335 105.04756062825521 86.26333333333335 111.554931640625 86.26333333333335C 118.06230265299479 86.26333333333335 123.64004923502603 61.616666666666674 130.14742024739581 61.616666666666674C 136.6547912597656 61.616666666666674 142.23253784179687 61.616666666666674 148.73990885416666 61.616666666666674C 155.24727986653645 61.616666666666674 160.8250264485677 12.323333333333323 167.3323974609375 12.323333333333323C 173.8397684733073 12.323333333333323 179.41751505533853 12.323333333333323 185.92488606770831 12.323333333333323C 192.4322570800781 12.323333333333323 198.01000366210937 49.29333333333335 204.51737467447916 49.29333333333335C 211.02474568684895 49.29333333333335 216.6024922688802 49.29333333333335 223.10986328125 49.29333333333335C 229.6172342936198 49.29333333333335 235.19498087565103 12.323333333333323 241.70235188802081 12.323333333333323C 248.2097229003906 12.323333333333323 253.78746948242184 12.323333333333323 260.29484049479163 12.323333333333323C 266.8022115071614 12.323333333333323 272.3799580891927 61.616666666666674 278.8873291015625 61.616666666666674C 285.3947001139323 61.616666666666674 290.9724466959635 61.616666666666674 297.4798177083333 61.616666666666674C 303.9871887207031 61.616666666666674 309.56493530273434 86.26333333333335 316.07230631510413 86.26333333333335C 322.5796773274739 86.26333333333335 328.1574239095052 86.26333333333335 334.664794921875 86.26333333333335C 334.664794921875 86.26333333333335 334.664794921875 86.26333333333335 334.664794921875 221.82M 334.664794921875 86.26333333333335z" pathFrom="M -1 295.76L -1 295.76L 18.592488606770832 295.76L 37.184977213541664 295.76L 55.7774658203125 295.76L 74.36995442708333 295.76L 92.96244303385416 295.76L 111.554931640625 295.76L 130.14742024739581 295.76L 148.73990885416666 295.76L 167.3323974609375 295.76L 185.92488606770831 295.76L 204.51737467447916 295.76L 223.10986328125 295.76L 241.70235188802081 295.76L 260.29484049479163 295.76L 278.8873291015625 295.76L 297.4798177083333 295.76L 316.07230631510413 295.76L 334.664794921875 295.76"></path><path id="SvgjsPath6854" d="M 0 73.94C 6.5073710123697905 73.94 12.08511759440104 24.646666666666704 18.592488606770832 24.646666666666704C 25.099859619140624 24.646666666666704 30.677606201171873 24.646666666666704 37.184977213541664 24.646666666666704C 43.69234822591146 24.646666666666704 49.270094807942705 61.616666666666674 55.7774658203125 61.616666666666674C 62.28483683268229 61.616666666666674 67.86258341471354 61.616666666666674 74.36995442708333 61.616666666666674C 80.87732543945312 61.616666666666674 86.45507202148437 86.26333333333335 92.96244303385416 86.26333333333335C 99.46981404622395 86.26333333333335 105.04756062825521 86.26333333333335 111.554931640625 86.26333333333335C 118.06230265299479 86.26333333333335 123.64004923502603 61.616666666666674 130.14742024739581 61.616666666666674C 136.6547912597656 61.616666666666674 142.23253784179687 61.616666666666674 148.73990885416666 61.616666666666674C 155.24727986653645 61.616666666666674 160.8250264485677 12.323333333333323 167.3323974609375 12.323333333333323C 173.8397684733073 12.323333333333323 179.41751505533853 12.323333333333323 185.92488606770831 12.323333333333323C 192.4322570800781 12.323333333333323 198.01000366210937 49.29333333333335 204.51737467447916 49.29333333333335C 211.02474568684895 49.29333333333335 216.6024922688802 49.29333333333335 223.10986328125 49.29333333333335C 229.6172342936198 49.29333333333335 235.19498087565103 12.323333333333323 241.70235188802081 12.323333333333323C 248.2097229003906 12.323333333333323 253.78746948242184 12.323333333333323 260.29484049479163 12.323333333333323C 266.8022115071614 12.323333333333323 272.3799580891927 61.616666666666674 278.8873291015625 61.616666666666674C 285.3947001139323 61.616666666666674 290.9724466959635 61.616666666666674 297.4798177083333 61.616666666666674C 303.9871887207031 61.616666666666674 309.56493530273434 86.26333333333335 316.07230631510413 86.26333333333335C 322.5796773274739 86.26333333333335 328.1574239095052 86.26333333333335 334.664794921875 86.26333333333335" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskqo9od98f)" pathTo="M 0 73.94C 6.5073710123697905 73.94 12.08511759440104 24.646666666666704 18.592488606770832 24.646666666666704C 25.099859619140624 24.646666666666704 30.677606201171873 24.646666666666704 37.184977213541664 24.646666666666704C 43.69234822591146 24.646666666666704 49.270094807942705 61.616666666666674 55.7774658203125 61.616666666666674C 62.28483683268229 61.616666666666674 67.86258341471354 61.616666666666674 74.36995442708333 61.616666666666674C 80.87732543945312 61.616666666666674 86.45507202148437 86.26333333333335 92.96244303385416 86.26333333333335C 99.46981404622395 86.26333333333335 105.04756062825521 86.26333333333335 111.554931640625 86.26333333333335C 118.06230265299479 86.26333333333335 123.64004923502603 61.616666666666674 130.14742024739581 61.616666666666674C 136.6547912597656 61.616666666666674 142.23253784179687 61.616666666666674 148.73990885416666 61.616666666666674C 155.24727986653645 61.616666666666674 160.8250264485677 12.323333333333323 167.3323974609375 12.323333333333323C 173.8397684733073 12.323333333333323 179.41751505533853 12.323333333333323 185.92488606770831 12.323333333333323C 192.4322570800781 12.323333333333323 198.01000366210937 49.29333333333335 204.51737467447916 49.29333333333335C 211.02474568684895 49.29333333333335 216.6024922688802 49.29333333333335 223.10986328125 49.29333333333335C 229.6172342936198 49.29333333333335 235.19498087565103 12.323333333333323 241.70235188802081 12.323333333333323C 248.2097229003906 12.323333333333323 253.78746948242184 12.323333333333323 260.29484049479163 12.323333333333323C 266.8022115071614 12.323333333333323 272.3799580891927 61.616666666666674 278.8873291015625 61.616666666666674C 285.3947001139323 61.616666666666674 290.9724466959635 61.616666666666674 297.4798177083333 61.616666666666674C 303.9871887207031 61.616666666666674 309.56493530273434 86.26333333333335 316.07230631510413 86.26333333333335C 322.5796773274739 86.26333333333335 328.1574239095052 86.26333333333335 334.664794921875 86.26333333333335" pathFrom="M -1 295.76L -1 295.76L 18.592488606770832 295.76L 37.184977213541664 295.76L 55.7774658203125 295.76L 74.36995442708333 295.76L 92.96244303385416 295.76L 111.554931640625 295.76L 130.14742024739581 295.76L 148.73990885416666 295.76L 167.3323974609375 295.76L 185.92488606770831 295.76L 204.51737467447916 295.76L 223.10986328125 295.76L 241.70235188802081 295.76L 260.29484049479163 295.76L 278.8873291015625 295.76L 297.4798177083333 295.76L 316.07230631510413 295.76L 334.664794921875 295.76"></path><g id="SvgjsG6847" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6957" r="0" cx="0" cy="0" class="apexcharts-marker wpv60ykt3 no-pointer-events" stroke="#50cd89" fill="#50cd89" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6839" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG6848" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine6950" x1="0" y1="0" x2="0" y2="221.82" stroke="#009ef7 #50cd89" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="221.82" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine6951" x1="0" y1="0" x2="334.664794921875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6952" x1="0" y1="0" x2="334.664794921875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6953" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6954" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6955" class="apexcharts-point-annotations"></g><rect id="SvgjsRect6958" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect6959" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG6914" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)"><g id="SvgjsG6915" class="apexcharts-yaxis-texts-g"><text id="SvgjsText6917" font-family="inherit" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6918">120</tspan><title>120</title></text><text id="SvgjsText6920" font-family="inherit" x="20" y="68.57" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6921">105</tspan><title>105</title></text><text id="SvgjsText6923" font-family="inherit" x="20" y="105.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6924">90</tspan><title>90</title></text><text id="SvgjsText6926" font-family="inherit" x="20" y="142.51" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6927">75</tspan><title>75</title></text><text id="SvgjsText6929" font-family="inherit" x="20" y="179.48" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6930">60</tspan><title>60</title></text><text id="SvgjsText6932" font-family="inherit" x="20" y="216.45" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6933">45</tspan><title>45</title></text><text id="SvgjsText6935" font-family="inherit" x="20" y="253.42" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan6936">30</tspan><title>30</title></text></g></g><rect id="SvgjsRect6949" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6830" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 36-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Chart Widget 35-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5 mb-6">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Currency-->
                                            <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->9.2%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                                        <!--end::Description-->
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0 px-0">
                                    <!--begin::Nav-->
                                    <ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">1d</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1" role="tab">5d</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1" role="tab">1m</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1" role="tab">6m</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3" role="presentation">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1" role="tab">1y</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content mt-n6">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_1">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;"><div id="apexchartseyjd0xhh" class="apexcharts-canvas apexchartseyjd0xhh apexcharts-theme-light" style="width: 243.75px; height: 200px;"><svg id="SvgjsSvg6769" width="243.75" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6771" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 30)"><defs id="SvgjsDefs6770"><clipPath id="gridRectMaskeyjd0xhh"><rect id="SvgjsRect6774" width="218.75" height="158" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskeyjd0xhh"></clipPath><clipPath id="nonForecastMaskeyjd0xhh"></clipPath><clipPath id="gridRectMarkerMaskeyjd0xhh"><rect id="SvgjsRect6775" width="215.75" height="159" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient6780" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop6781" stop-opacity="0.4" stop-color="rgba(0,158,247,0.4)" offset="0.15"></stop><stop id="SvgjsStop6782" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop><stop id="SvgjsStop6783" stop-opacity="0.2" stop-color="rgba(255,255,255,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG6786" class="apexcharts-xaxis" transform="translate(20, 0)"><g id="SvgjsG6787" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG6805" class="apexcharts-grid"><g id="SvgjsG6806" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine6808" x1="0" y1="0" x2="211.75" y2="0" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6809" x1="0" y1="38.75" x2="211.75" y2="38.75" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6810" x1="0" y1="77.5" x2="211.75" y2="77.5" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6811" x1="0" y1="116.25" x2="211.75" y2="116.25" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6812" x1="0" y1="155" x2="211.75" y2="155" stroke="#e4e6ef" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6807" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine6814" x1="0" y1="155" x2="211.75" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6813" x1="0" y1="1" x2="0" y2="155" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6776" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6777" class="apexcharts-series" seriesName="Earnings" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6784" d="M 0 155L 0 98.16666666666666C 5.293749999999999 98.16666666666666 9.83125 46.5 15.125 46.5C 20.41875 46.5 24.95625 46.5 30.25 46.5C 35.54375 46.5 40.08125 82.66666666666666 45.375 82.66666666666666C 50.66875 82.66666666666666 55.20625 82.66666666666666 60.5 82.66666666666666C 65.79375 82.66666666666666 70.33125 113.66666666666666 75.625 113.66666666666666C 80.91875 113.66666666666666 85.45625 113.66666666666666 90.75 113.66666666666666C 96.04375 113.66666666666666 100.58125 82.66666666666666 105.875 82.66666666666666C 111.16875 82.66666666666666 115.70625 82.66666666666666 121 82.66666666666666C 126.29375 82.66666666666666 130.83125 41.33333333333334 136.125 41.33333333333334C 141.41875 41.33333333333334 145.95625 41.33333333333334 151.25 41.33333333333334C 156.54375 41.33333333333334 161.08125 62 166.375 62C 171.66875 62 176.20625 62 181.5 62C 186.79375 62 191.33125 38.75 196.625 38.75C 201.91875 38.75 206.45625 38.75 211.75 38.75C 211.75 38.75 211.75 38.75 211.75 155M 211.75 38.75z" fill="url(#SvgjsLinearGradient6780)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeyjd0xhh)" pathTo="M 0 155L 0 98.16666666666666C 5.293749999999999 98.16666666666666 9.83125 46.5 15.125 46.5C 20.41875 46.5 24.95625 46.5 30.25 46.5C 35.54375 46.5 40.08125 82.66666666666666 45.375 82.66666666666666C 50.66875 82.66666666666666 55.20625 82.66666666666666 60.5 82.66666666666666C 65.79375 82.66666666666666 70.33125 113.66666666666666 75.625 113.66666666666666C 80.91875 113.66666666666666 85.45625 113.66666666666666 90.75 113.66666666666666C 96.04375 113.66666666666666 100.58125 82.66666666666666 105.875 82.66666666666666C 111.16875 82.66666666666666 115.70625 82.66666666666666 121 82.66666666666666C 126.29375 82.66666666666666 130.83125 41.33333333333334 136.125 41.33333333333334C 141.41875 41.33333333333334 145.95625 41.33333333333334 151.25 41.33333333333334C 156.54375 41.33333333333334 161.08125 62 166.375 62C 171.66875 62 176.20625 62 181.5 62C 186.79375 62 191.33125 38.75 196.625 38.75C 201.91875 38.75 206.45625 38.75 211.75 38.75C 211.75 38.75 211.75 38.75 211.75 155M 211.75 38.75z" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 15.125 206.66666666666666L 30.25 206.66666666666666L 45.375 206.66666666666666L 60.5 206.66666666666666L 75.625 206.66666666666666L 90.75 206.66666666666666L 105.875 206.66666666666666L 121 206.66666666666666L 136.125 206.66666666666666L 151.25 206.66666666666666L 166.375 206.66666666666666L 181.5 206.66666666666666L 196.625 206.66666666666666L 211.75 206.66666666666666"></path><path id="SvgjsPath6785" d="M 0 98.16666666666666C 5.293749999999999 98.16666666666666 9.83125 46.5 15.125 46.5C 20.41875 46.5 24.95625 46.5 30.25 46.5C 35.54375 46.5 40.08125 82.66666666666666 45.375 82.66666666666666C 50.66875 82.66666666666666 55.20625 82.66666666666666 60.5 82.66666666666666C 65.79375 82.66666666666666 70.33125 113.66666666666666 75.625 113.66666666666666C 80.91875 113.66666666666666 85.45625 113.66666666666666 90.75 113.66666666666666C 96.04375 113.66666666666666 100.58125 82.66666666666666 105.875 82.66666666666666C 111.16875 82.66666666666666 115.70625 82.66666666666666 121 82.66666666666666C 126.29375 82.66666666666666 130.83125 41.33333333333334 136.125 41.33333333333334C 141.41875 41.33333333333334 145.95625 41.33333333333334 151.25 41.33333333333334C 156.54375 41.33333333333334 161.08125 62 166.375 62C 171.66875 62 176.20625 62 181.5 62C 186.79375 62 191.33125 38.75 196.625 38.75C 201.91875 38.75 206.45625 38.75 211.75 38.75" fill="none" fill-opacity="1" stroke="#009ef7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskeyjd0xhh)" pathTo="M 0 98.16666666666666C 5.293749999999999 98.16666666666666 9.83125 46.5 15.125 46.5C 20.41875 46.5 24.95625 46.5 30.25 46.5C 35.54375 46.5 40.08125 82.66666666666666 45.375 82.66666666666666C 50.66875 82.66666666666666 55.20625 82.66666666666666 60.5 82.66666666666666C 65.79375 82.66666666666666 70.33125 113.66666666666666 75.625 113.66666666666666C 80.91875 113.66666666666666 85.45625 113.66666666666666 90.75 113.66666666666666C 96.04375 113.66666666666666 100.58125 82.66666666666666 105.875 82.66666666666666C 111.16875 82.66666666666666 115.70625 82.66666666666666 121 82.66666666666666C 126.29375 82.66666666666666 130.83125 41.33333333333334 136.125 41.33333333333334C 141.41875 41.33333333333334 145.95625 41.33333333333334 151.25 41.33333333333334C 156.54375 41.33333333333334 161.08125 62 166.375 62C 171.66875 62 176.20625 62 181.5 62C 186.79375 62 191.33125 38.75 196.625 38.75C 201.91875 38.75 206.45625 38.75 211.75 38.75" pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 15.125 206.66666666666666L 30.25 206.66666666666666L 45.375 206.66666666666666L 60.5 206.66666666666666L 75.625 206.66666666666666L 90.75 206.66666666666666L 105.875 206.66666666666666L 121 206.66666666666666L 136.125 206.66666666666666L 151.25 206.66666666666666L 166.375 206.66666666666666L 181.5 206.66666666666666L 196.625 206.66666666666666L 211.75 206.66666666666666"></path><g id="SvgjsG6778" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle6822" r="0" cx="0" cy="0" class="apexcharts-marker wdp3fnykw no-pointer-events" stroke="#009ef7" fill="#009ef7" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG6779" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6816" x1="0" y1="0" x2="0" y2="155" stroke="#009ef7" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="155" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine6817" x1="0" y1="0" x2="211.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6818" x1="0" y1="0" x2="211.75" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6819" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6820" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6821" class="apexcharts-point-annotations"></g><rect id="SvgjsRect6823" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect6824" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG6803" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG6804" class="apexcharts-yaxis-texts-g"></g></g><rect id="SvgjsRect6815" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG6772" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_2">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+134.02</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_3">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">-154.03</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_4">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-info">+144.65</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5" role="tabpanel" aria-labelledby="#kt_charts_widget_35_tab_5">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-info">+165.86</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart Widget 33-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Tables widget 14-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                    <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-49.jpg" class="" alt="">
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->9.2%</span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartstqun1qfh" class="apexcharts-canvas apexchartstqun1qfh apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6300" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6302" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6301"><clipPath id="gridRectMasktqun1qfh"><rect id="SvgjsRect6306" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktqun1qfh"></clipPath><clipPath id="nonForecastMasktqun1qfh"></clipPath><clipPath id="gridRectMarkerMasktqun1qfh"><rect id="SvgjsRect6307" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6314" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6315" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6331" class="apexcharts-grid"><g id="SvgjsG6332" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6334" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6335" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6336" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6337" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6338" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6339" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6340" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6341" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6342" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6343" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6344" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6333" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6346" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6345" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6308" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6309" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6312" d="M 0 50L 0 44.166666666666664C 2.5644230769230765 44.166666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664C 95.25 39.166666666666664 95.25 39.166666666666664 95.25 50M 95.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktqun1qfh)" pathTo="M 0 50L 0 44.166666666666664C 2.5644230769230765 44.166666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664C 95.25 39.166666666666664 95.25 39.166666666666664 95.25 50M 95.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6313" d="M 0 44.166666666666664C 2.5644230769230765 44.166666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktqun1qfh)" pathTo="M 0 44.166666666666664C 2.5644230769230765 44.166666666666664 4.7625 41.666666666666664 7.326923076923077 41.666666666666664C 9.891346153846154 41.666666666666664 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 32.5 21.98076923076923 32.5C 24.545192307692307 32.5 26.74326923076923 45 29.307692307692307 45C 31.872115384615384 45 34.07019230769231 40.83333333333333 36.63461538461539 40.83333333333333C 39.199038461538464 40.83333333333333 41.39711538461538 45.833333333333336 43.96153846153846 45.833333333333336C 46.52596153846154 45.833333333333336 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 40.83333333333333 65.9423076923077 40.83333333333333C 68.50673076923077 40.83333333333333 70.7048076923077 35 73.26923076923077 35C 75.83365384615385 35 78.03173076923078 44.166666666666664 80.59615384615385 44.166666666666664C 83.16057692307693 44.166666666666664 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 39.166666666666664 95.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6310" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6311" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6347" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6348" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6349" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6350" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6351" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6330" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6303" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-40.jpg" class="" alt="">
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->0.4%</span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts9h2fjbg1" class="apexcharts-canvas apexcharts9h2fjbg1 apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6352" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6354" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6353"><clipPath id="gridRectMask9h2fjbg1"><rect id="SvgjsRect6358" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask9h2fjbg1"></clipPath><clipPath id="nonForecastMask9h2fjbg1"></clipPath><clipPath id="gridRectMarkerMask9h2fjbg1"><rect id="SvgjsRect6359" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6366" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6367" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6383" class="apexcharts-grid"><g id="SvgjsG6384" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6386" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6387" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6388" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6389" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6390" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6391" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6392" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6393" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6394" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6395" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6396" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6385" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6398" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6397" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6360" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6361" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6364" d="M 0 50L 0 35.83333333333333C 2.5644230769230765 35.83333333333333 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 48.333333333333336 21.98076923076923 48.333333333333336C 24.545192307692307 48.333333333333336 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 35.83333333333333 80.59615384615385 35.83333333333333C 83.16057692307693 35.83333333333333 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 44.166666666666664 95.25 44.166666666666664C 95.25 44.166666666666664 95.25 44.166666666666664 95.25 50M 95.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9h2fjbg1)" pathTo="M 0 50L 0 35.83333333333333C 2.5644230769230765 35.83333333333333 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 48.333333333333336 21.98076923076923 48.333333333333336C 24.545192307692307 48.333333333333336 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 35.83333333333333 80.59615384615385 35.83333333333333C 83.16057692307693 35.83333333333333 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 44.166666666666664 95.25 44.166666666666664C 95.25 44.166666666666664 95.25 44.166666666666664 95.25 50M 95.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6365" d="M 0 35.83333333333333C 2.5644230769230765 35.83333333333333 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 48.333333333333336 21.98076923076923 48.333333333333336C 24.545192307692307 48.333333333333336 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 35.83333333333333 80.59615384615385 35.83333333333333C 83.16057692307693 35.83333333333333 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 44.166666666666664 95.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9h2fjbg1)" pathTo="M 0 35.83333333333333C 2.5644230769230765 35.83333333333333 4.7625 45.833333333333336 7.326923076923077 45.833333333333336C 9.891346153846154 45.833333333333336 12.089423076923076 30.833333333333332 14.653846153846153 30.833333333333332C 17.21826923076923 30.833333333333332 19.416346153846153 48.333333333333336 21.98076923076923 48.333333333333336C 24.545192307692307 48.333333333333336 26.74326923076923 32.5 29.307692307692307 32.5C 31.872115384615384 32.5 34.07019230769231 42.5 36.63461538461539 42.5C 39.199038461538464 42.5 41.39711538461538 35.83333333333333 43.96153846153846 35.83333333333333C 46.52596153846154 35.83333333333333 48.72403846153846 30.833333333333332 51.28846153846154 30.833333333333332C 53.85288461538462 30.833333333333332 56.050961538461536 46.666666666666664 58.61538461538461 46.666666666666664C 61.17980769230769 46.666666666666664 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 42.5 73.26923076923077 42.5C 75.83365384615385 42.5 78.03173076923078 35.83333333333333 80.59615384615385 35.83333333333333C 83.16057692307693 35.83333333333333 85.35865384615384 32.5 87.92307692307692 32.5C 90.4875 32.5 92.68557692307692 44.166666666666664 95.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6362" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6363" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6399" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6400" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6401" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6402" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6403" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6382" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6355" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-39.jpg" class="" alt="">
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->9.2%</span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsgf72cmb7" class="apexcharts-canvas apexchartsgf72cmb7 apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6404" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6406" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6405"><clipPath id="gridRectMaskgf72cmb7"><rect id="SvgjsRect6410" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgf72cmb7"></clipPath><clipPath id="nonForecastMaskgf72cmb7"></clipPath><clipPath id="gridRectMarkerMaskgf72cmb7"><rect id="SvgjsRect6411" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6418" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6419" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6435" class="apexcharts-grid"><g id="SvgjsG6436" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6438" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6439" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6440" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6441" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6442" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6443" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6444" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6445" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6446" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6447" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6448" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6437" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6450" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6449" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6412" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6413" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6416" d="M 0 50L 0 48.333333333333336C 2.5644230769230765 48.333333333333336 4.7625 30 7.326923076923077 30C 9.891346153846154 30 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 35.83333333333333 21.98076923076923 35.83333333333333C 24.545192307692307 35.83333333333333 26.74326923076923 44.166666666666664 29.307692307692307 44.166666666666664C 31.872115384615384 44.166666666666664 34.07019230769231 48.333333333333336 36.63461538461539 48.333333333333336C 39.199038461538464 48.333333333333336 41.39711538461538 40 43.96153846153846 40C 46.52596153846154 40 48.72403846153846 30 51.28846153846154 30C 53.85288461538462 30 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 40 87.92307692307692 40C 90.4875 40 92.68557692307692 44.166666666666664 95.25 44.166666666666664C 95.25 44.166666666666664 95.25 44.166666666666664 95.25 50M 95.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgf72cmb7)" pathTo="M 0 50L 0 48.333333333333336C 2.5644230769230765 48.333333333333336 4.7625 30 7.326923076923077 30C 9.891346153846154 30 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 35.83333333333333 21.98076923076923 35.83333333333333C 24.545192307692307 35.83333333333333 26.74326923076923 44.166666666666664 29.307692307692307 44.166666666666664C 31.872115384615384 44.166666666666664 34.07019230769231 48.333333333333336 36.63461538461539 48.333333333333336C 39.199038461538464 48.333333333333336 41.39711538461538 40 43.96153846153846 40C 46.52596153846154 40 48.72403846153846 30 51.28846153846154 30C 53.85288461538462 30 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 40 87.92307692307692 40C 90.4875 40 92.68557692307692 44.166666666666664 95.25 44.166666666666664C 95.25 44.166666666666664 95.25 44.166666666666664 95.25 50M 95.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6417" d="M 0 48.333333333333336C 2.5644230769230765 48.333333333333336 4.7625 30 7.326923076923077 30C 9.891346153846154 30 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 35.83333333333333 21.98076923076923 35.83333333333333C 24.545192307692307 35.83333333333333 26.74326923076923 44.166666666666664 29.307692307692307 44.166666666666664C 31.872115384615384 44.166666666666664 34.07019230769231 48.333333333333336 36.63461538461539 48.333333333333336C 39.199038461538464 48.333333333333336 41.39711538461538 40 43.96153846153846 40C 46.52596153846154 40 48.72403846153846 30 51.28846153846154 30C 53.85288461538462 30 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 40 87.92307692307692 40C 90.4875 40 92.68557692307692 44.166666666666664 95.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgf72cmb7)" pathTo="M 0 48.333333333333336C 2.5644230769230765 48.333333333333336 4.7625 30 7.326923076923077 30C 9.891346153846154 30 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 35.83333333333333 21.98076923076923 35.83333333333333C 24.545192307692307 35.83333333333333 26.74326923076923 44.166666666666664 29.307692307692307 44.166666666666664C 31.872115384615384 44.166666666666664 34.07019230769231 48.333333333333336 36.63461538461539 48.333333333333336C 39.199038461538464 48.333333333333336 41.39711538461538 40 43.96153846153846 40C 46.52596153846154 40 48.72403846153846 30 51.28846153846154 30C 53.85288461538462 30 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 30 65.9423076923077 30C 68.50673076923077 30 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 40 87.92307692307692 40C 90.4875 40 92.68557692307692 44.166666666666664 95.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6414" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6415" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6451" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6452" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6453" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6454" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6455" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6434" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6407" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-47.jpg" class="" alt="">
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->9.2%</span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartskc2nq8md" class="apexcharts-canvas apexchartskc2nq8md apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6456" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6458" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6457"><clipPath id="gridRectMaskkc2nq8md"><rect id="SvgjsRect6462" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkc2nq8md"></clipPath><clipPath id="nonForecastMaskkc2nq8md"></clipPath><clipPath id="gridRectMarkerMaskkc2nq8md"><rect id="SvgjsRect6463" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6470" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6471" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6487" class="apexcharts-grid"><g id="SvgjsG6488" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6490" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6491" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6492" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6493" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6494" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6495" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6496" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6497" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6498" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6499" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6500" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6489" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6502" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6501" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6464" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6465" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6468" d="M 0 50L 0 30C 2.5644230769230765 30 4.7625 47.5 7.326923076923077 47.5C 9.891346153846154 47.5 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 44.166666666666664 36.63461538461539 44.166666666666664C 39.199038461538464 44.166666666666664 41.39711538461538 29.166666666666664 43.96153846153846 29.166666666666664C 46.52596153846154 29.166666666666664 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 38.33333333333333 65.9423076923077 38.33333333333333C 68.50673076923077 38.33333333333333 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 45.833333333333336 87.92307692307692 45.833333333333336C 90.4875 45.833333333333336 92.68557692307692 35.83333333333333 95.25 35.83333333333333C 95.25 35.83333333333333 95.25 35.83333333333333 95.25 50M 95.25 35.83333333333333z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkc2nq8md)" pathTo="M 0 50L 0 30C 2.5644230769230765 30 4.7625 47.5 7.326923076923077 47.5C 9.891346153846154 47.5 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 44.166666666666664 36.63461538461539 44.166666666666664C 39.199038461538464 44.166666666666664 41.39711538461538 29.166666666666664 43.96153846153846 29.166666666666664C 46.52596153846154 29.166666666666664 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 38.33333333333333 65.9423076923077 38.33333333333333C 68.50673076923077 38.33333333333333 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 45.833333333333336 87.92307692307692 45.833333333333336C 90.4875 45.833333333333336 92.68557692307692 35.83333333333333 95.25 35.83333333333333C 95.25 35.83333333333333 95.25 35.83333333333333 95.25 50M 95.25 35.83333333333333z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6469" d="M 0 30C 2.5644230769230765 30 4.7625 47.5 7.326923076923077 47.5C 9.891346153846154 47.5 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 44.166666666666664 36.63461538461539 44.166666666666664C 39.199038461538464 44.166666666666664 41.39711538461538 29.166666666666664 43.96153846153846 29.166666666666664C 46.52596153846154 29.166666666666664 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 38.33333333333333 65.9423076923077 38.33333333333333C 68.50673076923077 38.33333333333333 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 45.833333333333336 87.92307692307692 45.833333333333336C 90.4875 45.833333333333336 92.68557692307692 35.83333333333333 95.25 35.83333333333333" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskkc2nq8md)" pathTo="M 0 30C 2.5644230769230765 30 4.7625 47.5 7.326923076923077 47.5C 9.891346153846154 47.5 12.089423076923076 45.833333333333336 14.653846153846153 45.833333333333336C 17.21826923076923 45.833333333333336 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 44.166666666666664 36.63461538461539 44.166666666666664C 39.199038461538464 44.166666666666664 41.39711538461538 29.166666666666664 43.96153846153846 29.166666666666664C 46.52596153846154 29.166666666666664 48.72403846153846 38.33333333333333 51.28846153846154 38.33333333333333C 53.85288461538462 38.33333333333333 56.050961538461536 45.833333333333336 58.61538461538461 45.833333333333336C 61.17980769230769 45.833333333333336 63.377884615384616 38.33333333333333 65.9423076923077 38.33333333333333C 68.50673076923077 38.33333333333333 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 43.333333333333336 80.59615384615385 43.333333333333336C 83.16057692307693 43.333333333333336 85.35865384615384 45.833333333333336 87.92307692307692 45.833333333333336C 90.4875 45.833333333333336 92.68557692307692 35.83333333333333 95.25 35.83333333333333" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6466" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6467" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6503" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6504" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6505" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6506" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6507" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6486" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6459" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="/metronic8/demo1/assets/media/stock/600x600/img-48.jpg" class="" alt="">
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->0.4%</span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartsjcnzmu6v" class="apexcharts-canvas apexchartsjcnzmu6v apexcharts-theme-light" style="width: 95.25px; height: 50px;"><svg id="SvgjsSvg6508" width="95.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG6510" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs6509"><clipPath id="gridRectMaskjcnzmu6v"><rect id="SvgjsRect6514" width="101.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskjcnzmu6v"></clipPath><clipPath id="nonForecastMaskjcnzmu6v"></clipPath><clipPath id="gridRectMarkerMaskjcnzmu6v"><rect id="SvgjsRect6515" width="99.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG6522" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG6523" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG6539" class="apexcharts-grid"><g id="SvgjsG6540" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine6542" x1="0" y1="0" x2="95.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6543" x1="0" y1="5" x2="95.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6544" x1="0" y1="10" x2="95.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6545" x1="0" y1="15" x2="95.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6546" x1="0" y1="20" x2="95.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6547" x1="0" y1="25" x2="95.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6548" x1="0" y1="30" x2="95.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6549" x1="0" y1="35" x2="95.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6550" x1="0" y1="40" x2="95.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6551" x1="0" y1="45" x2="95.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine6552" x1="0" y1="50" x2="95.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG6541" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine6554" x1="0" y1="50" x2="95.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine6553" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG6516" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG6517" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath6520" d="M 0 50L 0 47.5C 2.5644230769230765 47.5 4.7625 30.833333333333332 7.326923076923077 30.833333333333332C 9.891346153846154 30.833333333333332 12.089423076923076 49.166666666666664 14.653846153846153 49.166666666666664C 17.21826923076923 49.166666666666664 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 35.83333333333333 36.63461538461539 35.83333333333333C 39.199038461538464 35.83333333333333 41.39711538461538 47.5 43.96153846153846 47.5C 46.52596153846154 47.5 48.72403846153846 42.5 51.28846153846154 42.5C 53.85288461538462 42.5 56.050961538461536 29.166666666666664 58.61538461538461 29.166666666666664C 61.17980769230769 29.166666666666664 63.377884615384616 46.666666666666664 65.9423076923077 46.666666666666664C 68.50673076923077 46.666666666666664 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 35 80.59615384615385 35C 83.16057692307693 35 85.35865384615384 29.166666666666664 87.92307692307692 29.166666666666664C 90.4875 29.166666666666664 92.68557692307692 47.5 95.25 47.5C 95.25 47.5 95.25 47.5 95.25 50M 95.25 47.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjcnzmu6v)" pathTo="M 0 50L 0 47.5C 2.5644230769230765 47.5 4.7625 30.833333333333332 7.326923076923077 30.833333333333332C 9.891346153846154 30.833333333333332 12.089423076923076 49.166666666666664 14.653846153846153 49.166666666666664C 17.21826923076923 49.166666666666664 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 35.83333333333333 36.63461538461539 35.83333333333333C 39.199038461538464 35.83333333333333 41.39711538461538 47.5 43.96153846153846 47.5C 46.52596153846154 47.5 48.72403846153846 42.5 51.28846153846154 42.5C 53.85288461538462 42.5 56.050961538461536 29.166666666666664 58.61538461538461 29.166666666666664C 61.17980769230769 29.166666666666664 63.377884615384616 46.666666666666664 65.9423076923077 46.666666666666664C 68.50673076923077 46.666666666666664 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 35 80.59615384615385 35C 83.16057692307693 35 85.35865384615384 29.166666666666664 87.92307692307692 29.166666666666664C 90.4875 29.166666666666664 92.68557692307692 47.5 95.25 47.5C 95.25 47.5 95.25 47.5 95.25 50M 95.25 47.5z" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><path id="SvgjsPath6521" d="M 0 47.5C 2.5644230769230765 47.5 4.7625 30.833333333333332 7.326923076923077 30.833333333333332C 9.891346153846154 30.833333333333332 12.089423076923076 49.166666666666664 14.653846153846153 49.166666666666664C 17.21826923076923 49.166666666666664 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 35.83333333333333 36.63461538461539 35.83333333333333C 39.199038461538464 35.83333333333333 41.39711538461538 47.5 43.96153846153846 47.5C 46.52596153846154 47.5 48.72403846153846 42.5 51.28846153846154 42.5C 53.85288461538462 42.5 56.050961538461536 29.166666666666664 58.61538461538461 29.166666666666664C 61.17980769230769 29.166666666666664 63.377884615384616 46.666666666666664 65.9423076923077 46.666666666666664C 68.50673076923077 46.666666666666664 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 35 80.59615384615385 35C 83.16057692307693 35 85.35865384615384 29.166666666666664 87.92307692307692 29.166666666666664C 90.4875 29.166666666666664 92.68557692307692 47.5 95.25 47.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjcnzmu6v)" pathTo="M 0 47.5C 2.5644230769230765 47.5 4.7625 30.833333333333332 7.326923076923077 30.833333333333332C 9.891346153846154 30.833333333333332 12.089423076923076 49.166666666666664 14.653846153846153 49.166666666666664C 17.21826923076923 49.166666666666664 19.416346153846153 34.166666666666664 21.98076923076923 34.166666666666664C 24.545192307692307 34.166666666666664 26.74326923076923 47.5 29.307692307692307 47.5C 31.872115384615384 47.5 34.07019230769231 35.83333333333333 36.63461538461539 35.83333333333333C 39.199038461538464 35.83333333333333 41.39711538461538 47.5 43.96153846153846 47.5C 46.52596153846154 47.5 48.72403846153846 42.5 51.28846153846154 42.5C 53.85288461538462 42.5 56.050961538461536 29.166666666666664 58.61538461538461 29.166666666666664C 61.17980769230769 29.166666666666664 63.377884615384616 46.666666666666664 65.9423076923077 46.666666666666664C 68.50673076923077 46.666666666666664 70.7048076923077 48.333333333333336 73.26923076923077 48.333333333333336C 75.83365384615385 48.333333333333336 78.03173076923078 35 80.59615384615385 35C 83.16057692307693 35 85.35865384615384 29.166666666666664 87.92307692307692 29.166666666666664C 90.4875 29.166666666666664 92.68557692307692 47.5 95.25 47.5" pathFrom="M -1 50L -1 50L 7.326923076923077 50L 14.653846153846153 50L 21.98076923076923 50L 29.307692307692307 50L 36.63461538461539 50L 43.96153846153846 50L 51.28846153846154 50L 58.61538461538461 50L 65.9423076923077 50L 73.26923076923077 50L 80.59615384615385 50L 87.92307692307692 50L 95.25 50"></path><g id="SvgjsG6518" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG6519" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine6555" x1="0" y1="0" x2="95.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine6556" x1="0" y1="0" x2="95.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG6557" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG6558" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG6559" class="apexcharts-point-annotations"></g></g><g id="SvgjsG6538" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG6511" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Tables widget 14-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Chart widget 31-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7 mb-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_31_chart" class="w-100 h-300px"><div style="position: relative; height: 100%;"><div style="position: absolute; width: 214px; height: 300px;"><div><canvas width="428" height="600" style="position: absolute; top: 0px; left: 0px; width: 214px; height: 300px;"></canvas><canvas width="428" height="600" style="position: absolute; top: 0px; left: 0px; width: 214px; height: 300px;"></canvas></div></div><div style="overflow: hidden; width: 214px; height: 300px;"></div><div role="alert" style="z-index: -100000; opacity: 0; position: absolute; top: 0px;"></div><div role="application" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 214px; height: 300px;"><div role="button" aria-label="Zoom Out" style="position: absolute; pointer-events: none; top: 8px; left: -48px; width: 40px; height: 40px;"></div><div tabindex="0" aria-label="Revenue; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div><div tabindex="0" aria-label="Expense; Press ENTER to toggle" aria-checked="true" style="position: absolute; pointer-events: none; top: -2px; left: -2px; width: 4px; height: 4px;"></div></div><div><div role="tooltip" style="position: absolute; opacity: 1e-07; pointer-events: none;">Revenue:
Expense:</div></div></div></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 31-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Chart widget 24-->
                            <div class="card card-flush overflow-hidden h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Human Resources</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor"></rect>
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"><div style="position: relative; height: 100%;"><div style="position: absolute; width: 519px; height: 300px;"><div><canvas width="1038" height="600" style="position: absolute; top: 0px; left: 0px; width: 519px; height: 300px;"></canvas><canvas width="1038" height="600" style="position: absolute; top: 0px; left: 0px; width: 519px; height: 300px;"></canvas></div></div><div style="overflow: hidden; width: 519px; height: 300px;"></div><div role="alert" style="z-index: -100000; opacity: 0; position: absolute; top: 0px;"></div><div role="application" style="position: absolute; pointer-events: none; top: 0px; left: 0px; overflow: hidden; width: 519px; height: 300px;"><div role="button" aria-label="Zoom Out" style="position: absolute; pointer-events: none; top: 24px; left: 372.996px; width: 40px; height: 40px;"></div></div><div></div></div></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 24-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2022©</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
@endsection
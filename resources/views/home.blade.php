@extends('layouts.app')
@section('title', 'Dashboard')
@section('header')
    <div class="page-title-heading text-primary">
        Dashboard Monitoring
        <div class="page-title-subheading">
            This is an example dashboard created using build-in elements and components.
        </div>
    </div>
@endsection

@section('topcontent')
    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                        <span>Overview</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-primary border-primary card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Users
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-primary pr-2">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    234
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-danger border-danger card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Categories
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-danger pr-2">
                                        <i class="fa fa-object-group"></i>
                                    </span>
                                    71
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-warning border-warning card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total News
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <small class="opacity-10 text-warning pr-2"><i class="fa fa-globe"></i></small>
                                    1,45M
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-success border-success card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Photos
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <small class="opacity-10 text-success pr-2"><i class="fa fa-fire"></i></small>
                                    34
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div
                class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-secondary border-secondary card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Videos
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-secondary pr-2">
                                        <i class="fa fa-clone"></i>
                                    </span>
                                    234
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-focus border-focus card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Team Members
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-focus pr-2">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    71
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div
                class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-alternate border-alternate card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Sliders
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-focus pr-2">
                                        <i class="fa fa-sort"></i>
                                    </span>
                                    1,45M
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-light border-primary card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Partners
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-primary pr-2">
                                        <i class="fa fa-paragraph"></i>
                                    </span>
                                    34
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-dark border-dark card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Services
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-dark pr-2">
                                        <i class="fa fa-server"></i>
                                    </span>
                                    234
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-chart widget-chart2 text-left mb-3 card-btm-border card-shadow-info border-info card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-title opacity-5 text-uppercase">
                            Total Testimonials
                        </div>
                        <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                            <div class="widget-chart-flex align-items-center">
                                <div>
                                    <span class="opacity-10 text-info pr-2">
                                        <i class="fa fa-certificate"></i>
                                    </span>
                                    71
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        Traffic Sources
                    </div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <button class="btn btn-warning">Actions</button>
                    </div>
                </div>
                <div class="pt-0 card-body">
                    <div id="chart-combined"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-5 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        Income
                    </div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn-icon btn-icon-only btn btn-link">
                                <i class="lnr-cog btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu dropdown-menu-right">
                                <h6 tabindex="-1" class="dropdown-header">
                                    Header
                                </h6>
                                <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-inbox">
                                    </i><span>Menus</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-file-empty">
                                    </i><span>Settings</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item"><i
                                        class="dropdown-icon lnr-book">
                                    </i><span>Actions</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-1 text-right">
                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                        View
                                        Details
                                    </button>
                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                        Action
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-0 card-body">
                    <div id="chart-radial"></div>
                    <div class="widget-content pt-0 w-100">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-warning">
                                        32%
                                    </div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Spendings Target
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

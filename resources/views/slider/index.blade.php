@extends('layouts.app')
@section('title', 'Slider Lists')
@section('header')
    <div class="page-title-heading text-primary">
        Slider List
        <div class="page-title-subheading">
            Slider List!!!
        </div>
    </div>
@endsection
@section('topcontent')
    <div class="app-inner-bar">
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" id="tab-nav-1" class="nav-link active" href="#tab-content-1"
                        aria-selected="false">
                        <span>Slider List</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('sliders.create') }}"
                    class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Create New Slider
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main-card mb-3 card">
        <div class="card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                All Slider List
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slider as $value)
                        <tr>
                            <td class="text-muted" style="width: 80px;">{{ $loop->iteration }}</td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ Str::limit($value->title, 10) }}</a>
                            </td>
                            <td><a
                                    href="{{ route('users.show', $value->id) }}">{{ Str::limit($value->description ?: 'Null', 50) }}</a>
                            </td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ $value->image ?: 'Null' }}</a></td>
                            <td class="text-center">
                                <div role="group" class="btn-group-sm btn-group">
                                    <button type="button" data-toggle="popover-custom-content" rel="popover-focus"
                                        popover-id="{{ $value->id }}" class="mr-1 btn btn-success">
                                        <i class="fa fa-fw" aria-hidden="true" title="Copy to use user-circle"></i>
                                    </button>

                                    <div id="popover-content-{{ $value->id }}" class="d-none">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-success">
                                                <div class="menu-header-image opacity-5"
                                                    style="background-image: url('assets/images/dropdown-header/abstract4.jpg');">
                                                </div>
                                                <div class="menu-header-content">
                                                    <div class="font-icon-wrapper font-icon-sm"><i
                                                            class="lnr-user icon-gradient bg-ripe-malin"> </i></div>
                                                    <h6 class="menu-header-title">Created By & Updated By</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="javascript:void(0);"
                                                    class="nav-link">Created By: {{ $value->created_user->name }}
                                                    <br>Created At: {{ $value->created_at }}</a></li>
                                            <li class="nav-item-divider nav-item"></li>
                                        </ul>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="javascript:void(0);"
                                                    class="nav-link">Updated By: {{ $value->updated_user->name }}
                                                    <br>Updated At: {{ $value->updated_at }}</a></li>
                                        </ul>
                                    </div>

                                    <a href="{{ route('units.edit', $value->id) }}"
                                        class="btn-shadow btn btn-primary mr-1"><i class="fa fa-fw" aria-hidden="true"
                                            title="Copy to use edit"></i></a>
                                    <form action="{{ route('units.destroy', $value->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn-shadow btn btn-sm btn-danger"><i
                                                class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- If value equals to 0 --}}
                @if (count($slider) < 0)
                    <tr>
                        <td colspan="15" class="text-center text-danger">No records found!</td>
                    </tr>
                @endif
            </table>
        </div>

        {{-- Rounded Paginations --}}
        @include('partials._paginate',['style' => 'rounded', 'data' => $slider,])
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.example-popover').popover({
                container: 'body'
            })
        })
    </script>
@endsection

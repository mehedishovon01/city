@extends('layouts.app')
@section('title', 'Create New User')
@section('header')
    <div class="page-title-heading text-primary">
        Create Slider
        <div class="page-title-subheading">
            Add New Slider Without Any Hassel!!!
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
                        <span>Create Slider</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('sliders.index') }}" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Slider List
                </a>
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="signupForm" class="col-md-5 mx-auto" method="post" action="{{ route('sliders.store') }}"
                novalidate="novalidate" enctype='multipart/form-data'>
                @csrf
                <h2 class="text-center">Create Slider!</h2>
                <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                <hr><br>
                {{-- Name --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-bag"></i></span>
                    </div>
                    <input required placeholder="Title" type="text" id="title" name="title" class="form-control">
                </div><br>

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ship"></i></span>
                    </div>
                    <textarea required placeholder="Description" type="text" id="description" name="description" row=10 class="form-control"></textarea>
                </div><br>

                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-ring"></i></span>
                    </div>

                    <input required placeholder="Image" id="image" name="image" type="file" class="form-control">
                </div><br>
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Sign up">Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Create New User')
@section('header')
    <div class="page-title-heading text-primary">
        Update Unit
        <div class="page-title-subheading">
            Update Unit Without Any Hassel!!!
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
                        <span>Update Unit</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('units.index') }}" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Unit List
                </a>
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="signupForm" class="col-md-5 mx-auto" method="post" action="{{ route('units.update', $unit->id) }}"
                novalidate="novalidate">
                @csrf
                @method('PUT')
                <h2 class="text-center">Update Unit!</h2>
                <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                <hr><br>
                {{-- Name --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use shopping-bag"></i></span>
                    </div>
                    <input required placeholder="Unit Name" type="text" id="name" name="name" value="{{ $unit->name }}" class="form-control">
                </div><br>

                {{-- Email --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use ship"></i></span>
                    </div>
                    <input placeholder="Unit Slug" type="text" id="slug" name="slug" value="{{ $unit->slug }}" class="form-control">
                </div><br>

                {{-- Phone --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw" aria-hidden="true" title="Copy to use life-ring"></i></span>
                    </div>

                    <input placeholder="Full Name" id="full_name" name="full_name" type="text" value="{{ $unit->full_name }}" class="form-control">
                </div><br>
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Sign up">Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

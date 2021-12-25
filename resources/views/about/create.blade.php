@extends('layouts.app')
@section('title', 'Create New User')
@section('header')
    <div class="page-title-heading text-primary">
        Create About
        <div class="page-title-subheading">
            Add New About Without Any Hassel!!!
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
                        <span>Create About</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <div class="btn-actions-pane-right">
                <a type="button" href="{{ route('categories.index') }}"
                    class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    About List
                </a>
            </div>
        </div>
    </div>
@endsection



@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="signupForm" class="col-md-12 mx-auto" method="post" action="{{ route('categories.store') }}"
                novalidate="novalidate">
                @csrf
                <h2 class="text-center">Create About!</h2>
                <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                <hr><br>
                {{-- Name --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use shopping-bag"></i></span>
                    </div>
                    <input required placeholder="Category Name" type="text" id="name" name="name" class="form-control">
                </div><br>

                {{-- Email --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use shopping-bag"></i></span>
                    </div>
                    <textarea required placeholder="Category Name" type="text" id="name" name="name" class="form-control" rows="10"></textarea>
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Sign up">Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        var editor = null;
        ClassicEditor.create(document.querySelector("#editor"), {
                toolbar: [
                    "bold",
                    "italic",
                    "link",
                    "bulletedList",
                    "numberedList",
                    "blockQuote",
                    "undo",
                    "redo"
                ]
            })
            .then(editor => {
                //debugger;
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>City Bank Capital | User Login.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('public/assets/css/main.07a59de7b920cd76b874.css') }}" rel="stylesheet">
</head>

<body>

    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="mx-auto mb-3 text-center text-white"><h3>City Bank Capital | User Login</h3></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail" class="">Email</label>
                                                    <input id="
                                                        email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        placeholder="Email here..." autocomplete="email" autofocus>
    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword" class="">Password</label>
                                                    <input id="
                                                        password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password here..." required
                                                        autocomplete="current-password">
    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck"
                                                type="checkbox" class="form-check-input"><label for="exampleCheck"
                                                class="form-check-label">Keep me logged in</label></div>
                                    <div class="divider"></div>
                                    {{-- <h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign
                                            up now</a></h6> --}}
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left"><a href="javascript:void(0);"
                                            class="btn-lg btn btn-link">Recover Password</a></div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © City Bank Capital <?php echo date("Y") ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('public/assets/scripts/main.07a59de7b920cd76b874.js') }}"></script>
</body>

</html>

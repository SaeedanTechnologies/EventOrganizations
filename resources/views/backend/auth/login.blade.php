<!DOCTYPE html>
<html lang="en">

<head>

    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
</head>

<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Signin</h4>
                        <hr>
                        <form action="{{route('login')}}" method="post">
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            @if(Session::get('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                            @endif
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="Email" name="email"
                                    placeholder="Email address" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="Password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                            <hr>
                            <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html"
                                    class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html"
                                    class="f-w-400">Signup</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('backend/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pcoded.min.js')}}"></script>
</body>

</html>
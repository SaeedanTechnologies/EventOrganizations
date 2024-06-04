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

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="{{asset('backend/assets/images/logo.png')}}" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="f-w-400">Sign up</h4>
                        <hr>
                        <form action="{{route('organizer.register')}}" method="post">
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
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="first_name" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="last_name" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="email" id="Email"
                                    placeholder="Email address" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password" id="Password"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    required>
                            </div>
                            <div class="custom-control custom-checkbox  text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Send me the <a href="#!">
                                        Newsletter</a> weekly.</label>
                            </div>
                            <button class="btn btn-primary btn-block mb-4">Sign up</button>
                        </form>
                        <hr>
                        <p class="mb-2">Already have an account? <a href="{{route('login_view')}}"
                                class="f-w-400">Signin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{asset('backend/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pcoded.min.js')}}"></script>



</body>

</html>
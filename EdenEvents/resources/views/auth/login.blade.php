<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Eden Events</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.min.css')}}'">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url('data:image/png;base64,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')"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}" autocomplete="off">
                                    @csrf

                                    <div class="form-group"><input class="form-control form-control-user @error('email') is-invalid @enderror" name="email" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror</div>
                                    <div class="form-group"><input class="form-control form-control-user @error('password') is-invalid @enderror" name="password" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror</div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                        </div>
                                    </div><button class="btn btn-info btn-block text-white btn-user" type="submit">Login</button>
                                    <hr><a class="btn btn-info btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-info btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                    <hr class="text-info">
                                </form>
                                <div class="text-center"><a class="small text-info" href="{{ route('password.request') }}">Forgot Password?</a></div>
                                <div class="text-center"><a class="small text-info" href="{{ route('register') }}">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}'"></script>
<script src="{{asset('frontend/assets/js/chart.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{asset('frontend/assets/js/script.min.js')}}'"></script>
</body>

</html>

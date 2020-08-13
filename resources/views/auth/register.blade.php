<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Forum Komunikasi Programmer</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"><img src="{{ asset('assets/img/logo-dark.png') }}"
                                    alt="Klorofil Logo"></div>
                            <p class="lead">Register Your Account</p>
                        </div>
                        <div class="px-3 mx-3">
                            <form class="form-auth-small" action="{{ route('daftar') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label sr-only">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" placeholder="Email"
                                        name="email">
                                </div>
                                @error('email')
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                @enderror
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="signin-password" class="control-label sr-only">Password</label>
                                            <input type="password" class="form-control" id="signin-password"
                                                placeholder="Password" name="password">
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="signin-password" class="control-label sr-only">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="signin-password"
                                                placeholder="Confirm Password" name="cpassword">
                                        </div>
                                        @error('cpassword')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>

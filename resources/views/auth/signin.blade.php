<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/laravel/modern-dark-menu/authentication/boxed/signin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:29:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <link rel="icon" type="image/x-icon"
        href="https://designreset.com/cork/laravel/build/assets/favicon.34dd7cba.ico" />
    <link rel="preload" as="style" href="{{ asset('build/assets/loader.c40a282a.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/loader.c40a282a.css') }}" />
    <link rel="modulepreload" href="{{ asset('build/assets/loader.ebb4c7c9.js') }}" />
    <script type="module" src="{{ asset('build/assets/loader.ebb4c7c9.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="preload" as="style" href="{{ asset('build/assets/main.72b3e3e6.css') }}" />
    <link rel="preload" as="style" href="{{ asset('build/assets/main.b0573015.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/main.72b3e3e6.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/main.b0573015.css') }}" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="preload" as="style" href="{{ asset('build/assets/auth-boxed.fc616aa1.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/auth-boxed.fc616aa1.css') }}" />
    <link rel="preload" as="style" href="{{ asset('build/assets/auth-boxed.8681090a.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/auth-boxed.8681090a.css') }}" />
    <!--  END CUSTOM STYLE FILE  -->
    <!-- END GLOBAL MANDATORY STYLES -->
</head>

<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div> <!--  END LOADER -->



    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

           <form action="{{route('login')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>
                                    
                                </div>
                                <div class="col-md-12 mt-1">
                                    @if (Session::has('success'))
                                    <p class="text-success">
                                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                    </p>
                                @endif
                        
                                @if (Session::has('error'))
                                    <p class="text-danger">
                                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('error') }}
                                    </p>
                                @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email *</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password *</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox"
                                                id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);"
                                                class="text-warning">Sign Up</a></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
           </form>

        </div>

    </div>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <!--  END CUSTOM SCRIPTS FILE  -->



</body>

<!-- Mirrored from designreset.com/cork/laravel/modern-dark-menu/authentication/boxed/signin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 07:29:19 GMT -->

</html>

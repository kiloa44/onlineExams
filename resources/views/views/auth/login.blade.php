<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>دار القرآن الكريم والسنة النبوية- دائرة السنة النبوية</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/custom-rtl.css') }}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/login-register.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                        <img src="app-assets/images/logo/logo.png" alt="branding logo">
                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>دائرة السنة النبوية</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" method="POST"  action="{{ route('loginByIdentityNumber') }}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" class="form-control form-control-lg"  id="identity_number" name="identity_number" placeholder="رقم الهوية" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @if ($errors->has('identity_number'))

                                                    <strong>{{ $errors->first('identity_number') }}</strong>

                                            @endif
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" id="user-password" name="password" placeholder="كلمة المرور"
                                                   required>
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" name="remember" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember-me"> تذكرني </label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 text-center text-md-right">
                                                @if (Route::has('password.request'))
                                                    <a class="card-link" href="{{ route('password.request') }}">
                                                        نسيت كلمة المرور ؟
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> تسجيل الدخول </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-center m-0">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app.js" type="text/javascript') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/forms/form-login-register.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>


<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>مدرسة الصلاح الخيرية - الصفحة الرئيسية</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('app-assets/js/jquery.serializejson.min.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/arabic-fonts/style.css') }}">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/icheck/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/custom-rtl.css') }}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/sunnah.css') }}">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
    <!-- END Custom CSS-->


</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="stack admin logo" src="app-assets/images/logo/stack-logo-light.png">
                        <h4 class="brand-text">مدرسة الصلاح الخيرية</h4>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Stack...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                            <span class="user-name">{{ Auth::User()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> الملف الشخصي</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="ft-power"></i> تسجيل خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span>الرئيسية</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="الرئيسية"></i>
            </li>
            <li><a class="menu-item" href="#"><i class="ft-settings"></i> المدخلات </a></li>
            <li class=" nav-item"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">الإدارة</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">الأدوار والصلاحيات</a>
                    </li>
                    <li><a class="menu-item" href="#">المستخدمين</a>
                    </li>
                    <li class="menu-item"><a class="menu-item" href="#">محاضر الإجتماعات</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">هيكلية المدرسة</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">اضافة طالب لصف</a>
                    </li>
                    <li><a class="menu-item" href="#">عرض العلامات</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-layout"></i><span class="menu-title" data-i18n="">قسم الاختبارات</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">الاسئلة</a>
                    </li>
                    <li><a class="menu-item" href="">الاختبارات</a>
                    </li>
                    <li><a class="menu-item" href="">الشهادات</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span class="menu-title" data-i18n="">قسم المسابقات</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">المسابقات</a>
                    </li>

                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span class="menu-title" data-i18n="">صفي</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">طلابي</a>
                    </li>
                    <li><a class="menu-item" href="#">تقارير</a>
                    </li>

                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">جميع الحقوق محفوظة &copy; 2019 دار القرآن الكريم والسنة<a class="text-bold-800 grey darken-2" href="#"
                                                                                                                      target="_blank"></a>, دائرة السنة. </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">تطوير شركة المجداد</span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>

<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.knob.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/extensions/knob.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/unslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-climacon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css') }}">
<script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}" type="text/javascript"></script>

<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-repeater.js') }}" type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->
<script>
    function getFormData(form){
        var unindexed_array = form.serializeArray();
        //console.log(unindexed_array);
        var indexed_array = {};

        $.map(unindexed_array, function(item, index){
            //console.log(item.length);
            indexed_array[item['name']] = item['value'];
        });

        return indexed_array;
    }

    function success(){
        swal({
            title: "تمت عملية الاضافة بنجاح",
            icon: "success",
            closeOnClickOutside: false,
            buttons: {
                confirm: {
                    text: "متابعة",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
            .then((isConfirm) => {
                if (isConfirm) {
                    location.reload();
                    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    //swal("Cancelled", "Your imaginary file is safe", "error");
                    location.reload();
                }
            });
    }

    function error(){
        swal({
            title: "خطأ",
            icon: "success",
            buttons: {
                confirm: {
                    text: "متابعة",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
            .then((isConfirm) => {
                if (isConfirm) {
                    location.reload();
                    //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                } else {
                    //swal("Cancelled", "Your imaginary file is safe", "error");
                    location.reload();
                }
            });
    }
</script>

</body>
</html>
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
                            {{--                            <span class="user-name">{{ Auth::User()->name }}</span>--}}
                            <span class="user-name">Whatsoever</span>
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
    <!-- Card sizing section start -->
<div class="app-content content noMargin">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section id="sizing">
                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$exam->first()->name}}</h4>
                        <input type="hidden" value="{{$exam->id}}" id="exam_id">
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
{{--                            Remember to make it somewhere to use it here--}}
                            <h2 class="lead">{{$exam->exam_question->keyBy("question_id")->question->text}}</h2>
                            <form class="form">
                                <div class="form-body">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="choice" name="choice">
                                            <label class="custom-control-label" for="choice"></label>
                                        </div>
                                </div>
                            </form>
                            <input type="button" value="GET stuff" onclick="fillQuestion(2)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </section>
        </div>
    </div>
</div>
    <!-- Card sizing section end -->
<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">جميع الحقوق محفوظة &copy; 2019 دار القرآن الكريم والسنة<a class="text-bold-800 grey darken-2" href="#"
                                                                                                                      target="_blank"></a>, دائرة السنة. </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">تطوير شركة المجداد</span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<style>
    .noMargin{
        margin: 0px !important;
    }
</style>
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
        var questionIds;
        var questionNumber;
        var examId = $('#exam_id').val();
        $(function () {
            questionIds = getQuestionsIds();

        });


        function getQuestionsIds() {
            axios({
                method:'get',
                url:'{{route("GetQuestionsIds",$exam->id)}}',
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                return response.data;
            }).catch(function (error) {
                console.log(error);
            });
        }

        function fillQuestion(id) {
            axios({
                method:'get',
                url:'{{url('/')}}'+"/api/GetForExam"+'/'+id,
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }


        function getFormData(form){
            var unindexed_array = form.serializeArray();
            var indexed_array = {};
            $.map(unindexed_array, function(item, index){
                indexed_array[item['name']] = item['value'];
            });
            return indexed_array;
        }

        function addNewUser() {
            var data=getFormData($("#form-addNewUser"));
            console.log(data);
            axios({
                method:'post',
{{--                url:'{{ route("addUser") }}',--}}
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function editUser(item) {
            var id=$(item).attr('data-id');
           // console.log(id);
            axios({
                method:'GET',
{{--                url:'{{ route("showUser") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editUser").modal('show');
                $("#editUser #form-editUser #name").val(response.data.data.name);
                $("#editUser #form-editUser #id").val(response.data.data.id);
                $("#editUser #form-editUser #identity_number").val(response.data.data.identity_number);
                $("#editUser #form-editUser #email").val(response.data.data.email);
                $("#editUser #form-editUser #mobile_number").val(response.data.data.mobile_number);
                $("#editUser #form-editUser #password").val(response.data.data.password);
                $('#editUser #form-editUser #roleName').val(response.data.data.roles[0].id).trigger('change');

                $("#editUser #form-editUser #major_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.major_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editUser #form-editUser #local_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.local_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveUser() {
            var data=getFormData($("#form-editUser"));
            axios({
                method:'PUT',
{{--                url:'{{ route("updateUser") }}'+'/'+data.id,--}}
                responseType:'json',
                data:data,
                //params:{id}
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });

        }

        function deleteUser(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
{{--                url:'{{ route("deleteUser") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });

        }

        function dateReformatting(date) {
            if (date == null)
                return 0;
            var mydate = date.split(" ");
            var newDate = mydate.pop();
            newDate = mydate.pop();
            return newDate;
        }

        function GetFormattedDate(date) {
            var todayTime = new Date(date);
            var month = todayTime .getMonth() + 1;
            var day = todayTime .getDate();
            var year = todayTime .getFullYear();
            var newDate=month + "/" + day + "/" + year;
            return newDate;
        }

    </script>

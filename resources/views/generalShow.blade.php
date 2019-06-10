@extends('layouts.app')

@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">المدخلات</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-students" data-toggle="tab" aria-controls="students"
                                       href="#students" aria-expanded="true">الطلاب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-subjects" data-toggle="tab" aria-controls="subjects" href="#subjects"
                                       aria-expanded="false">المواد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-classrooms" data-toggle="tab" aria-controls="classrooms" href="#classrooms"
                                       aria-expanded="false">الصفوف</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-exams" data-toggle="tab" aria-controls="exams" href="#exams"
                                       aria-expanded="false">الامتحانات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-teachers" data-toggle="tab" aria-controls="teachers" href="#teachers"
                                       aria-expanded="false">المعلمين</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-minutes-of-meetings" data-toggle="tab" aria-controls="minutes-of-meetings" href="#minutes-of-meetings"
                                       aria-expanded="false">محاضر الاجتماعات</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" id="base-qualifications" data-toggle="tab" aria-controls="qualifications" href="#qualifications"--}}
{{--                                       aria-expanded="false">المؤهلات العلمية</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" id="base-certificates_of_judgments" data-toggle="tab" aria-controls="certificates_of_judgments" href="#certificates_of_judgments"--}}
{{--                                       aria-expanded="false">شهادات الاحكام</a>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="students" aria-expanded="true" aria-labelledby="base-students">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addStudent"><i class="fa fa-plus"></i> إضافة طالب جديد </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                                    <table id ="dataTable" class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >الطالب</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($Days as $index =>$Day)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $Day->name }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Day->id }}" onclick="editDay(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Day->id }}" id="confirm-text" onclick="deleteDay(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="subjects" aria-labelledby="subjects">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addSubject"><i class="fa fa-plus"></i> إضافة مادة جديد </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >المادة</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($Books as $index =>$Book)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $Book->name }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Book->id }}" onclick="editBook(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Book->id }}" id="confirm-text" onclick="deleteBook(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="classrooms" aria-labelledby="base-classrooms">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addClassroom"><i class="fa fa-plus"></i> إضافة صف</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >الصف</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($MajorAreas as $index => $MajorArea)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $MajorArea->name }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $MajorArea->id }}" onclick="editMajorArea(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $MajorArea->id }}" id="confirm-text" onclick="deleteMajorArea(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="exams" aria-labelledby="base-exams">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addExam"><i class="fa fa-plus"></i> إضافة امتحان </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >الامتحان</th>
{{--                                                            <th >المنطقة الكبرى</th>--}}
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($LocalAreas as $index => $Area)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $Area->name }}</td>--}}
{{--                                                            <td>{{ $Area->parentArea->name }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Area->id }}" onclick="editLocalArea(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Area->id }}" id="confirm-text" onclick="deleteLocalArea(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                            @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="teachers" aria-labelledby="base-teachers">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addTeacher"><i class="fa fa-plus"></i> إضافة معلم</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >المعلم</th>
{{--                                                            <th >المنطقة المحلية</th>--}}
{{--                                                            <th >المسجد</th>--}}
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($Mosques as $index => $Mosque)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $Mosque->majorArea->name }}</td>--}}
{{--                                                            <td>{{ $Mosque->localArea->name }}</td>--}}
{{--                                                            <td>{{ $Mosque->name }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Mosque->id }}" onclick="editMosque(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Mosque->id }}" id="confirm-text" onclick="deleteMosque(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="minutes-of-meetings" aria-labelledby="base-minutes-of-meetings">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addMinutesOfMeeting"><i class="fa fa-plus"></i> إضافة محضر اجتماع</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >محضر الاجتماع</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
{{--                                                        @foreach($MeetingTypes as $index => $MeetingType)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $MeetingType->name}}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $MeetingType->id }}" onclick="editMeetingType(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $MeetingType->id }}" id="confirm-text" onclick="deleteMeetingType(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="tab-pane" id="qualifications" aria-labelledby="base-qualifications">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-12">--}}
{{--                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addQualification"><i class="fa fa-plus"></i> إضافة مؤهل علمي جديد </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <hr/>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <div class="table-responsive">--}}
{{--                                                    <table class="table table-bordered table-xs">--}}
{{--                                                        <thead>--}}
{{--                                                        <tr class="text-center">--}}
{{--                                                            <th >#</th>--}}
{{--                                                            <th >العنوان</th>--}}
{{--                                                            <th >الوصف</th>--}}
{{--                                                            <th>خيارات</th>--}}
{{--                                                        </tr>--}}
{{--                                                        </thead>--}}
{{--                                                        <tbody>--}}
{{--                                                        @foreach($Qualifications as $index => $Qualification)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $Qualification->name }}</td>--}}
{{--                                                            <td>{{ $Qualification->description }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Qualification->id }}" onclick="editQualification(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Qualification->id }}" id="confirm-text" onclick="deleteQualification(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
{{--                                                        </tbody>--}}
{{--                                                    </table>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane" id="certificates_of_judgments" aria-labelledby="base-certificates_of_judgments">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-12">--}}
{{--                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addCertificatesOfJudgments"><i class="fa fa-plus"></i> إضافة مؤهل شهادة أحكام </button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <hr/>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-10">--}}
{{--                                                <div class="table-responsive">--}}
{{--                                                    <table class="table table-bordered table-xs">--}}
{{--                                                        <thead>--}}
{{--                                                        <tr class="text-center">--}}
{{--                                                            <th >#</th>--}}
{{--                                                            <th >العنوان</th>--}}
{{--                                                            <th >الوصف</th>--}}
{{--                                                            <th>خيارات</th>--}}
{{--                                                        </tr>--}}
{{--                                                        </thead>--}}
{{--                                                        <tbody>--}}
{{--                                                        @foreach($CertificatesOfJudgments as $index => $CertificatesOfJudgment)--}}
{{--                                                        <tr class="text-center s-1">--}}
{{--                                                            <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                            <td>{{ $CertificatesOfJudgment->name }}</td>--}}
{{--                                                            <td>{{ $CertificatesOfJudgment->description }}</td>--}}
{{--                                                            <td>--}}
{{--                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $CertificatesOfJudgment->id }}" onclick="editCertificatesOfJudgment(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $CertificatesOfJudgment->id }}" id="confirm-text" onclick="deleteCertificatesOfJudgment(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                                <!--</div>-->--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                        @endforeach--}}
{{--                                                        </tbody>--}}
{{--                                                    </table>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card sizing section end -->

    <!-- Modal addStudent -->
    <div class="modal fade text-left" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة طالب جديد</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addStudent" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">اسم الطالب</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الطالب" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="identity_number">رقم الهوية</label>
                                        <input type="text" id="identity_number" class="form-control" placeholder="رقم الهوية" name="identity_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">تاريخ الميلاد</label>
                                        <input type="date" id="dob" class="form-control" placeholder="تاريخ الميلاد" name="dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="classroom">الصف</label>
                                        <input type="text" id="classroom" class="form-control" placeholder="الصف" name="classroom">
                                    </div>
                                </div>
                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="form-group">--}}
                                {{--                                            <label for="qualification_id">المؤهل العلمي</label>--}}
                                {{--                                            <div class="position-relative has-icon-left">--}}
                                {{--                                                <select id="qualification_id" class="form-control" name="qualification_id">--}}
                                {{--                                                    <option value="null">-- اخنر المؤهل العلمي --</option>--}}
                                {{--                                                    @foreach($qualifications as $index => $qualification)--}}
                                {{--                                                    <option value="{{ $qualification->id }}">{{ $qualification->name }}</option>--}}
                                {{--                                                    @endforeach--}}
                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="form-group">--}}
                                {{--                                            <label for="qualification_auto_update">تحديث المؤهل آليا</label><br>--}}
                                {{--                                            <div class="position-relative has-icon-left icheck_minimal skin">--}}
                                {{--                                                <fieldset>--}}
                                {{--                                                    <input type="checkbox" id="updated_automatically_qualified" name="updated_automatically_qualified" value="1">--}}
                                {{--                                                    <label for="status">فعال </label>--}}
                                {{--                                                </fieldset>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="guardian_name">اسم ولي الامر</label>
                                        <input type="text" id="guardian_name" class="form-control" placeholder="اسم ولي الامر" name="guardian_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="guardian_identity_number">رقم هوية ولي الامر</label>
                                        <input type="text" id="guardian_identity_number" class="form-control" placeholder="رقم هوية ولي الامر" name="guardian_identity_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="guardian_mobile_number">رقم جوال ولي الامر</label>
                                        <input type="text" id="guardian_mobile_number" class="form-control" placeholder="رقم جوال ولي الامر" name="guardian_mobile_number">
                                    </div>
                                </div>

                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="form-group">--}}
                                {{--                                            <label for="major_area_id">المنطقة الكبرى</label>--}}
                                {{--                                            <div class="position-relative has-icon-left">--}}
                                {{--                                                <select id="major_area_id" class="form-control select2" name="major_area_id" onchange="getAreaByParentID(this)">--}}
                                {{--                                                    <option value="null">-- اختر المنطقة الكبرى --</option>--}}
                                {{--                                                    @foreach($majorAreas as $index => $majorArea)--}}
                                {{--                                                    <option value="{{ $majorArea->id }}">{{ $majorArea->name }}</option>--}}
                                {{--                                                    @endforeach--}}
                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="local_area_id">مكان السكن</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="local_area_id" class="form-control select2 local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{--                                    <div class="col-md-4">--}}
                                {{--                                        <div class="form-group">--}}
                                {{--                                            <label for="mosque_id">المسجد</label>--}}
                                {{--                                            <div class="position-relative has-icon-left">--}}
                                {{--                                                <select id="mosque_id" class="form-control select2 mosque_id" name="mosque_id">--}}

                                {{--                                                </select>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>

                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <div class="form-group">--}}
                        {{--                                            <label for="group_id">الحلقة (المحفظ)</label>--}}
                        {{--                                            <div class="position-relative has-icon-left">--}}
                        {{--                                                <select id="group_id" class="form-control" name="group_id">--}}
                        {{--                                                    <option value="null">-- اختر المحفظ --</option>--}}
                        {{--                                                    @foreach($groups as $index => $group)--}}
                        {{--                                                    <option value="{{ $group->id }}">{{ $group->teacher->name }}</option>--}}
                        {{--                                                    @endforeach--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="notes">ملحوظات</label>
                                    <textarea id="notes" class="form-control" placeholder="ملحوظات" name="notes" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="addNewStudent()"><i class="fa fa-save"></i> إضافة</button>
                <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                       value="إغلاق">
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- End Modal addStudent -->

    <!-- Modal addDay-->
    <div class="modal fade text-left" id="addDay" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة يوم جديد </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addDay" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">اليوم</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم اليوم" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addDay"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addDay-->

    <!-- Modal editDay-->
    <div class="modal fade text-left" id="editDay" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل يوم</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editDay" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">اليوم</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم اليوم" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editDay" onclick="saveDay()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editDay-->

    <!-- Modal addSubject-->
    <div class="modal fade text-left" id="addSubject" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة مادة جديد </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addSubject" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المادة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المادة" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addSubject" onclick="addNewBook()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addSubject-->

    <!-- Modal editBook-->
    <div class="modal fade text-left" id="editBook" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل الكتاب</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editBook" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الكتاب</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الكتاب" name="name">
                                        <input type="hidden" id="id" class="form-control"  name="id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editBook" onclick="saveBook()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editBook-->

    <!-- Modal addClassroom-->
    <div class="modal fade text-left" id="addClassroom" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة صف </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addClassroom">
                    <input type="hidden" name="parent_id" value="0">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">الصف</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الصف" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">الوصف</label>
                                        <input type="text" id="name" class="form-control" placeholder="الوصف" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addClassroom" id="btn-addClassroom" onclick="addNewMajorArea()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addClassroom-->

    <!-- Modal editMajorArea-->
    <div class="modal fade text-left" id="editMajorArea" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل منطقة كبرى</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editMajorArea" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المنطقة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المنطقة" name="name">
                                        <input type="hidden" id="id" class="form-control"  name="id">
                                        <input type="hidden" id="parent_id" class="form-control"  name="parent_id" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editMajorArea" onclick="saveMajorArea()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editMajorArea-->

    <!-- Modal addExam-->
    <div class="modal fade text-left" id="addExam" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة امتحان</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addExam" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="major_area_id">الصف</label>
                                        <select id="major_area_id" class="form-control" name="major_area_id">
                                            <option value="null">-- اختر الصف --</option>
{{--                                            @foreach($MajorAreas as $index => $MajorArea)--}}
{{--                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="major_area_id">المادة</label>
                                        <select id="major_area_id" class="form-control" name="major_area_id">
                                            <option value="null">-- اختر المادة --</option>
                                            {{--                                            @foreach($MajorAreas as $index => $MajorArea)--}}
                                            {{--                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>--}}
                                            {{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="name">المنطقة</label>--}}
{{--                                        <input type="text" id="name" class="form-control" placeholder="اسم المنطقة" name="name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addExam" onclick="addNewLocalArea()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addExam-->

    <!-- Modal editLoaclArea-->
    <div class="modal fade text-left" id="editLocalArea" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل منطقة محلية</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editLocalArea" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <select id="major_area_id" class="form-control" name="major_area_id">
                                            <option value="null">-- اختر المنطقة الكبرى --</option>
{{--                                            @foreach($MajorAreas as $index => $MajorArea)--}}
{{--                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المنطقة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المنطقة" name="name">
                                        <input type="hidden" id="id" name="id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editLoaclArea" onclick="saveLocalArea()"><i class="fa fa-save"></i> تعديل</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editLoaclArea-->

    <!-- Modal addTeacher-->
    <div class="modal fade text-left" id="addTeacher" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة معلم </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addNewTeacher">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">اسم المعلم</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المعلم" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="identity_number">رقم الهوية</label>
                                        <input type="text" id="identity_number" class="form-control" placeholder="رقم الهوية" name="identity_number" onchange="setPass()">
                                        <input type="hidden" id="password" name="password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">تاريخ الميلاد</label>
                                        <input type="date" id="dob" class="form-control" name="dob">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile_number">رقم الجوال</label>
                                        <input type="text" id="mobile_number" class="form-control" placeholder="رقم الجوال" name="mobile_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="qualification_id">المؤهل العلمي</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="qualification_id" class="form-control" name="qualification_id" onchange="getDescriptionForQualification(this)">
                                                <option value="null">-- اختر المؤهل العلمي --</option>
                                                {{--                                                @foreach($Qualifications as $index => $Qualification)--}}
                                                {{--                                                <option value="{{ $Qualification->id }}">{{ $Qualification->name }}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="description_of_qualification_">وصف المؤهل</label>
                                        <input type="text" id="description_of_qualification" class="form-control description_of_qualification" placeholder="وصف المؤهل" name="description_of_qualification_">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="area_id">مكان السكن</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="area_id" class="form-control" name="area_id" onchange="getAreaByParentID(this)">
                                                <option value="1">-- اختر المنطقة --</option>
                                                {{--                                                @foreach($MajorAreas as $MajorArea)--}}
                                                {{--                                                    <option value="{{ $MajorArea['id'] }}">{{ $MajorArea['name'] }}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="col-md-4">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label for="local_area_id">المنطقة المحلية</label>--}}
                                {{--                                        <div class="position-relative has-icon-left">--}}
                                {{--                                            <select id="local_area_id" class="form-control local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">--}}
                                {{--                                                <option value="1">-- اختر المنطقة المحلية --</option>--}}
                                {{--                                            </select>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-md-4">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label for="mosque_id">المسجد</label>--}}
                                {{--                                        <div class="position-relative has-icon-left">--}}
                                {{--                                            <select id="mosque_id" class="form-control mosque_id" name="mosque_id">--}}

                                {{--                                            </select>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="row">--}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="social_status">الحالة الاجتماعية</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="social_status" class="form-control" name="social_status">
                                                <option value="null">-- اختر الحالة الاجتماعية --</option>
                                                <option value="s">أعزب</option>
                                                <option value="m">متزوج</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number_of_family_members">عدد أفراد العائلة</label>
                                        <input type="text" id="number_of_family_members" class="form-control" placeholder="عدد أفراد العائلة" name="number_of_family_members">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Date_of_work">تاريخ بدء العمل</label>
                                        <input type="date" id="Date_of_work" class="form-control"  name="Date_of_work">
                                    </div>
                                </div>
                                {{--                        </div>--}}
                                {{--                        <div class="row">--}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input type="email" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="certificates_of_judgments_id">شهادات المعلم</label>
                                        <div id="certificates_of_judgments_id" class="position-relative has-icon-left icheck_minimal skin">
                                            {{--                                        @foreach($CertificatesOfJudgments as $index => $CertificatesOfJudgment)--}}
                                            {{--                                            <fieldset>--}}
                                            {{--                                                <input type="checkbox" id="certificates_of_judgments{{ $CertificatesOfJudgment->id }}" name="certificates_of_judgments[]" value="{{ $CertificatesOfJudgment->id }}">--}}
                                            {{--                                                <label for="certificates_of_judgments{{ $CertificatesOfJudgment->id }}">{{ $CertificatesOfJudgment->name }}</label>--}}
                                            {{--                                            </fieldset>--}}
                                            {{--                                        @endforeach--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="teacher">حالة المعلم</label>
                                    <div class="position-relative has-icon-left icheck_minimal skin">
                                        <fieldset>
                                            <input type="checkbox" id="status" name="status" value="1">
                                            <label for="status">فعال</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="note">ملحوظات</label>
                                    <textarea id="notes" class="form-control" placeholder="ملحوظات" name="notes" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button id="btnNewTeacher" type="button" class="btn btn-primary" onclick="addNewTeacher()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
{{--                <form id="form-addTeacher" action="#">--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="form-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="major_area_id">المنطقة الكبرى</label>--}}
{{--                                        <select id="major_area_id" class="form-control" name="major_area_id" onchange="getAreaByParentID(this)">--}}
{{--                                            <option value="null">-- اختر المنطقة الكبرى --</option>--}}
{{--                                            @foreach($MajorAreas as $index => $MajorArea)--}}
{{--                                            <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="local_area_id">المنطقة المحلية</label>--}}
{{--                                        <select id="local_area_id" class="form-control local_area_id" name="local_area_id">--}}

{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="name">المسجد</label>--}}
{{--                                        <input type="text" id="name" class="form-control" placeholder="اسم المسجد" name="name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-primary" name="addTeacher" onclick="addNewMosque()"><i class="fa fa-save"></i> إضافة</button>--}}
{{--                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </div>
    <!-- End Modal addTeacher-->

    <!-- Modal editMosques-->
    <div class="modal fade text-left" id="editMosques" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل مسجد</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editMosques" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <select id="major_area_id" class="form-control select2" name="major_area_id" onchange="getAreaByParentID(this)">
                                            <option value="null">-- اختر المنطقة الكبرى --</option>
{{--                                            @foreach($MajorAreas as $index => $MajorArea)--}}
{{--                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="local_area_id">المنطقة المحلية</label>
                                        <select id="local_area_id" class="form-control select2 local_area_id" name="local_area_id">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المسجد</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المسجد" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editMosques" onclick="saveMosque()"><i class="fa fa-save"></i> تعديل</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editMosques-->

    <!-- Modal addMinutesOfMeeting-->
    <div class="modal fade text-left" id="addMinutesOfMeeting" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة محضر اجتماع </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addMinutesOfMeeting" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الاجتماع</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الاجتماع" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addMinutesOfMeeting" onclick="addNewMeetingType()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addMinutesOfMeeting-->

    <!-- Modal editMeetingTypes-->
    <div class="modal fade text-left" id="editMeetingTypes" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل نوع اجتماع</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editMeetingTypes" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الاجتماع</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الاجتماع" name="name">
                                        <input type="hidden" id="id" class="form-control"  name="id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editMeetingTypes" onclick="saveMeetingType()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editMeetingTypes-->

    <!-- Modal addQualification-->
    <div class="modal fade text-left" id="addQualification" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة مؤهل علمي جديد </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addQualification" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المؤهل</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المؤهل" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addQualification" onclick="addNewQualification()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addQualification-->

    <!-- Modal editQualification-->
    <div class="modal fade text-left" id="editQualification" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل المؤهل العلمي</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editQualification" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المؤهل</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المؤهل" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editQualification" onclick="saveQualification()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editQualification-->

    <!-- Modal addCertificatesOfJudgments-->
    <div class="modal fade text-left" id="addCertificatesOfJudgments" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة شهادة أحكام جديدة </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addCertificatesOfJudgments" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الشهادة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الشهادة" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addCertificatesOfJudgments" onclick="addNewCertificatesOfJudgment()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addCertificatesOfJudgments-->

    <!-- Modal editCertificatesOfJudgments-->
    <div class="modal fade text-left" id="editCertificatesOfJudgments" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل شهادة أحكام</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editCertificatesOfJudgments" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الشهادة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الشهادة" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الوصف</label>
                                        <input type="text" id="description" class="form-control" placeholder="الوصف" name="description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="editCertificatesOfJudgments" onclick="saveCertificatesOfJudgment()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editCertificatesOfJudgments-->

    <script>

        function editDay(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
                {{--url: '{{ route("showDay") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                $("#editDay").modal('show');
                $("#editDay #name").val(response.data.data.name);
                $("#editDay #id").val(response.data.data.id);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveDay(){
            var data=getFormData($('#form-editDay'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
                {{--url: '{{ route("updateDay") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteDay(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteDay") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                $("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function addNewBook() {
            var data=getFormData($("#form-addSubject"));
            console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewBook") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                success();
               // $("#editDay").modal('hide');
                //location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editBook(item) {
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showBook") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                //console.log(response);
                $("#editBook").modal('show');
                $("#editBook #name").val(response.data.data.name);
                $("#editBook #id").val(response.data.data.id);
                $("#editBook #description").val(response.data.data.description);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveBook(){
            var data=getFormData($('#form-editBook'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateBook") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editBook").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteBook(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteBook") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function addNewMajorArea() {
            var data=getFormData($("#form-addClassroom"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewArea") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editMajorArea(item) {
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showArea") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                //console.log(response);
                $("#editMajorArea").modal('show');
                $("#editMajorArea #name").val(response.data.data.name);
                $("#editMajorArea #id").val(response.data.data.id);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveMajorArea(){
            var data=getFormData($('#form-editMajorArea'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateArea") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editBook").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteMajorArea(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteArea") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }



        function addNewLocalArea() {
            var data=getFormData($("#form-addExam"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewArea") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editLocalArea(item) {

            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showArea") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                //console.log(response);
                console.log('editLocalArea');
                $("#editLocalArea").modal('show');
                $("#editLocalArea #name").val(response.data.data.name);
                $("#editLocalArea #id").val(response.data.data.id);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveLocalArea(){
            var data=getFormData($('#form-editLocalArea'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateArea") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editBook").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteLocalArea(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteArea") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function addNewMeetingType() {
            var data=getFormData($("#form-addMinutesOfMeeting"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
                {{--url: '{{ route("addNewMeetingType") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                success();
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editMeetingType(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showMeetingType") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                $("#editMeetingTypes").modal('show');
                $("#editMeetingTypes #name").val(response.data.data.name);
                $("#editMeetingTypes #id").val(response.data.data.id);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveMeetingType(){
            var data=getFormData($('#form-editMeetingTypes'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateMeetingType") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editMeetingTypes").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteMeetingType(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteMeetingType") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                $("#editMeetingTypes").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function addNewQualification() {
            var data=getFormData($("#form-addQualification"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewQualification") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editQualification(item) {
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showQualification") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                //console.log(response);
                $("#editQualification").modal('show');
                $("#editQualification #name").val(response.data.data.name);
                $("#editQualification #id").val(response.data.data.id);
                $("#editQualification #description").val(response.data.data.description);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveQualification(){
            var data=getFormData($('#form-editQualification'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateQualification") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editBook").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteQualification(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteQualification") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function addNewCertificatesOfJudgment() {
            var data=getFormData($("#form-addCertificatesOfJudgments"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewCertificatesOfJudgment") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editCertificatesOfJudgment(item) {
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showCertificatesOfJudgment") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                //console.log(response);
                $("#editCertificatesOfJudgments").modal('show');
                $("#editCertificatesOfJudgments #name").val(response.data.data.name);
                $("#editCertificatesOfJudgments #id").val(response.data.data.id);
                $("#editCertificatesOfJudgments #description").val(response.data.data.description);
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveCertificatesOfJudgment(){
            var data=getFormData($('#form-editCertificatesOfJudgments'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateCertificatesOfJudgment") }}'+'/'+data.id,--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                //$("#editBook").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteCertificatesOfJudgment(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteCertificatesOfJudgment") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function getAreaByParentID(item) {
            if (item) {
                axios({
                    method: 'get',
                    url:'localhost',
{{--                    url: '{{ route('getAreaByParentID') }}'+'/'+item.value,--}}
                    responseType: 'json',
                }).then(function (response) {
                    //$("#form-addNewTeacher #description_of_qualification").val(response.data.data.description);
                    $(".local_area_id").find("option").remove().end();

                    $.each(response.data, function (index, item) {
                        $(".local_area_id").append(new Option(item.name, item.id));
                    });
                    //console.log(response.data);
                }).catch(function (error) {
                    //console.log(error);
                    swal("خطا !","الرجاء تحديد المنطقة الكبرى","error");
                });
            }
            else {
                swal("خطا !","الرجاء تحديد المنطقة الكبرى","error");
            }
        }

        function addNewMosque() {
            var data=getFormData($("#form-addTeacher"));
            //console.log(data);
            axios({
                method: 'post',
                url:'localhost',
{{--                url: '{{ route("addNewMosque") }}',--}}
                responseType:'json',
                params:data
            }).then(function (response) {
                //handle success
                // $("#editDay").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function editMosque(item) {
            var id=$(item).attr('data-id');
            axios({
                method: 'get',
                url:'localhost',
{{--                url: '{{ route("showMosque") }}'+'/'+id,--}}
                responseType:'json',
                //params:form
            }).then(function (response) {
                //handle success
                console.log(response.data.data);
                $("#editMosques").modal('show');
                $('#editMosques #form-editMosques #major_area_id').val(response.data.data.majorArea.id).trigger('change');
                $('#editMosques #form-editMosques #name').val(response.data.data.name);
                $('#editMosques #form-editMosques #local_area_id').val(response.data.data.localArea.id).trigger('change');
                $('#editMosques #form-editMosques #id').val(response.data.data.id);

            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function saveMosque(){
            var data=getFormData($('#form-editMosques'));
            //console.log(data);

            axios({
                method: 'put',
                url:'localhost',
{{--                url: '{{ route("updateMosque") }}'+'/'+data.id,--}}
                responseType:'json',
                data:data
            }).then(function (response) {
                //handle success
                //$("#editMosques").modal('hide');
                //location.reload();
                success();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }

        function deleteMosque(item){
            var id=$(item).attr('data-id');
            axios({
                method: 'delete',
                url:'localhost',
{{--                url: '{{ route("deleteMosque") }}'+'/'+id,--}}
                responseType:'json',
                //params:data
            }).then(function (response) {
                //handle success
                //$("#editDay").modal('hide');
                location.reload();
            }).catch(function (response) {
                //handle error
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(response);
            });
        }
    </script>
    @endsection

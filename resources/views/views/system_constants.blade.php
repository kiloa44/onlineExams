@extends('layouts.app')

@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ثوابت النظام</h4>
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
                                    <a class="nav-link active" id="base-days" data-toggle="tab" aria-controls="days"
                                       href="#days" aria-expanded="true">أيام الاسبوع</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-books" data-toggle="tab" aria-controls="books" href="#books"
                                       aria-expanded="false">الكتب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-major_area" data-toggle="tab" aria-controls="major_area" href="#major_area"
                                       aria-expanded="false">المناطق الكبرى</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-local_area" data-toggle="tab" aria-controls="local_area" href="#local_area"
                                       aria-expanded="false">المناطق المحلية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-mosques" data-toggle="tab" aria-controls="mosques" href="#mosques"
                                       aria-expanded="false">المساجد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-meeting_types" data-toggle="tab" aria-controls="meeting_types" href="#meeting_types"
                                       aria-expanded="false">أنواع الاجتماعات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-qualifications" data-toggle="tab" aria-controls="qualifications" href="#qualifications"
                                       aria-expanded="false">المؤهلات العلمية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-certificates_of_judgments" data-toggle="tab" aria-controls="certificates_of_judgments" href="#certificates_of_judgments"
                                       aria-expanded="false">شهادات الاحكام</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="days" aria-expanded="true" aria-labelledby="base-days">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addDay"><i class="fa fa-plus"></i> إضافة يوم جديد </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="table-responsive">
                                                    <table id ="dataTable" class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >اليوم</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($Days as $index =>$Day)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $Day->name }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Day->id }}" onclick="editDay(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Day->id }}" id="confirm-text" onclick="deleteDay(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="books" aria-labelledby="books">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addBook"><i class="fa fa-plus"></i> إضافة كتاب جديد </button>
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
                                                            <th >الكتاب</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($Books as $index =>$Book)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $Book->name }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Book->id }}" onclick="editBook(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Book->id }}" id="confirm-text" onclick="deleteBook(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="major_area" aria-labelledby="base-major_area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addMajorArea"><i class="fa fa-plus"></i> إضافة منطقة كبرى </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >المنطقة الكبرى</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($MajorAreas as $index => $MajorArea)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $MajorArea->name }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $MajorArea->id }}" onclick="editMajorArea(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $MajorArea->id }}" id="confirm-text" onclick="deleteMajorArea(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="local_area" aria-labelledby="base-local_area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addLoaclArea"><i class="fa fa-plus"></i> إضافة منطقة محلية </button>
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
                                                            <th >المنطقة المحلية</th>
                                                            <th >المنطقة الكبرى</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($LocalAreas as $index => $Area)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $Area->name }}</td>
                                                            <td>{{ $Area->parentArea->name }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Area->id }}" onclick="editLocalArea(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Area->id }}" id="confirm-text" onclick="deleteLocalArea(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="mosques" aria-labelledby="base-mosques">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addMosques"><i class="fa fa-plus"></i> إضافة مسجد جديد </button>
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
                                                            <th >المنطقة الكبرى</th>
                                                            <th >المنطقة المحلية</th>
                                                            <th >المسجد</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($Mosques as $index => $Mosque)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $Mosque->majorArea->name }}</td>
                                                            <td>{{ $Mosque->localArea->name }}</td>
                                                            <td>{{ $Mosque->name }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Mosque->id }}" onclick="editMosque(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Mosque->id }}" id="confirm-text" onclick="deleteMosque(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="meeting_types" aria-labelledby="base-meeting_types">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addMeetingTypes"><i class="fa fa-plus"></i> إضافة نوع اجتماعات </button>
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
                                                            <th >الاسم</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($MeetingTypes as $index => $MeetingType)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $MeetingType->name}}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $MeetingType->id }}" onclick="editMeetingType(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $MeetingType->id }}" id="confirm-text" onclick="deleteMeetingType(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="qualifications" aria-labelledby="base-qualifications">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addQualification"><i class="fa fa-plus"></i> إضافة مؤهل علمي جديد </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >العنوان</th>
                                                            <th >الوصف</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($Qualifications as $index => $Qualification)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $Qualification->name }}</td>
                                                            <td>{{ $Qualification->description }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $Qualification->id }}" onclick="editQualification(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $Qualification->id }}" id="confirm-text" onclick="deleteQualification(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="certificates_of_judgments" aria-labelledby="base-certificates_of_judgments">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#addCertificatesOfJudgments"><i class="fa fa-plus"></i> إضافة مؤهل شهادة أحكام </button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-xs">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th >#</th>
                                                            <th >العنوان</th>
                                                            <th >الوصف</th>
                                                            <th>خيارات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($CertificatesOfJudgments as $index => $CertificatesOfJudgment)
                                                        <tr class="text-center s-1">
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $CertificatesOfJudgment->name }}</td>
                                                            <td>{{ $CertificatesOfJudgment->description }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $CertificatesOfJudgment->id }}" onclick="editCertificatesOfJudgment(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $CertificatesOfJudgment->id }}" id="confirm-text" onclick="deleteCertificatesOfJudgment(this)" ><i class="fa fa-trash"></i></button>
                                                                <!--</div>-->
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card sizing section end -->


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

    <!-- Modal addBook-->
    <div class="modal fade text-left" id="addBook" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة كتاب جديد </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addBook" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">الكتاب</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم الكتاب" name="name">
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
                        <button type="button" class="btn btn-primary" name="addBook" onclick="addNewBook()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addBook-->

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

    <!-- Modal addMajorArea-->
    <div class="modal fade text-left" id="addMajorArea" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافةمنطقة كبرى </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addMajorArea">
                    <input type="hidden" name="parent_id" value="0">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المنطقة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المنطقة" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addMajorArea" id="btn-addMajorArea" onclick="addNewMajorArea()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addMajorArea-->

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

    <!-- Modal addLoaclArea-->
    <div class="modal fade text-left" id="addLoaclArea" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة منطقة محلية </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addLoaclArea" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <select id="major_area_id" class="form-control" name="major_area_id">
                                            <option value="null">-- اختر المنطقة الكبرى --</option>
                                            @foreach($MajorAreas as $index => $MajorArea)
                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المنطقة</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المنطقة" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addLoaclArea" onclick="addNewLocalArea()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addLoaclArea-->

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
                                            @foreach($MajorAreas as $index => $MajorArea)
                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>
                                            @endforeach
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

    <!-- Modal addMosques-->
    <div class="modal fade text-left" id="addMosques" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة مسجد </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addMosques" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <select id="major_area_id" class="form-control" name="major_area_id" onchange="getAreaByParentID(this)">
                                            <option value="null">-- اختر المنطقة الكبرى --</option>
                                            @foreach($MajorAreas as $index => $MajorArea)
                                            <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="local_area_id">المنطقة المحلية</label>
                                        <select id="local_area_id" class="form-control local_area_id" name="local_area_id">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">المسجد</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المسجد" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" name="addMosques" onclick="addNewMosque()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addMosques-->

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
                                            @foreach($MajorAreas as $index => $MajorArea)
                                                <option value="{{ $MajorArea->id }}">{{ $MajorArea->name }}</option>
                                            @endforeach
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

    <!-- Modal addMeetingTypes-->
    <div class="modal fade text-left" id="addMeetingTypes" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة نوع اجتماع </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addMeetingTypes" action="#">
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
                        <button type="button" class="btn btn-primary" name="addMeetingTypes" onclick="addNewMeetingType()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal addMeetingTypes-->

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
                url: '{{ route("showDay") }}'+'/'+id,
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
                url: '{{ route("updateDay") }}'+'/'+data.id,
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
                url: '{{ route("deleteDay") }}'+'/'+id,
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
            var data=getFormData($("#form-addBook"));
            console.log(data);
            axios({
                method: 'post',
                url: '{{ route("addNewBook") }}',
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
                url: '{{ route("showBook") }}'+'/'+id,
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
                url: '{{ route("updateBook") }}'+'/'+data.id,
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
                url: '{{ route("deleteBook") }}'+'/'+id,
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
            var data=getFormData($("#form-addMajorArea"));
            //console.log(data);
            axios({
                method: 'post',
                url: '{{ route("addNewArea") }}',
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
                url: '{{ route("showArea") }}'+'/'+id,
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
                url: '{{ route("updateArea") }}'+'/'+data.id,
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
                url: '{{ route("deleteArea") }}'+'/'+id,
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
            var data=getFormData($("#form-addLoaclArea"));
            //console.log(data);
            axios({
                method: 'post',
                url: '{{ route("addNewArea") }}',
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
                url: '{{ route("showArea") }}'+'/'+id,
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
                url: '{{ route("updateArea") }}'+'/'+data.id,
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
                url: '{{ route("deleteArea") }}'+'/'+id,
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
            var data=getFormData($("#form-addMeetingTypes"));
            //console.log(data);
            axios({
                method: 'post',
                url: '{{ route("addNewMeetingType") }}',
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
                url: '{{ route("showMeetingType") }}'+'/'+id,
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
                url: '{{ route("updateMeetingType") }}'+'/'+data.id,
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
                url: '{{ route("deleteMeetingType") }}'+'/'+id,
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
                url: '{{ route("addNewQualification") }}',
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
                url: '{{ route("showQualification") }}'+'/'+id,
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
                url: '{{ route("updateQualification") }}'+'/'+data.id,
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
                url: '{{ route("deleteQualification") }}'+'/'+id,
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
                url: '{{ route("addNewCertificatesOfJudgment") }}',
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
                url: '{{ route("showCertificatesOfJudgment") }}'+'/'+id,
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
                url: '{{ route("updateCertificatesOfJudgment") }}'+'/'+data.id,
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
                url: '{{ route("deleteCertificatesOfJudgment") }}'+'/'+id,
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
                    url: '{{ route('getAreaByParentID') }}'+'/'+item.value,
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
            var data=getFormData($("#form-addMosques"));
            //console.log(data);
            axios({
                method: 'post',
                url: '{{ route("addNewMosque") }}',
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
                url: '{{ route("showMosque") }}'+'/'+id,
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
                url: '{{ route("updateMosque") }}'+'/'+data.id,
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
                url: '{{ route("deleteMosque") }}'+'/'+id,
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

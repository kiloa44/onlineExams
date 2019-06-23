@extends('layouts.app')

@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">المعلمين</h4>
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
                            <div class="card-text">
                            </div>
                            <form class="form">
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1" data-toggle="modal"
                                            data-target="#newTeacher">
                                        <i class="ft-plus"></i>معلم جديد
                                    </button>
                                </div>


                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>بيانات المعلمين</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table id="tt" class="table table-xs table-striped table-bordered compact dataTable">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>#</th>
                                                        <th>اسم المعلم</th>
{{--                                                        <th>المشرف الميداني</th>--}}
                                                        <th>رقم الجوال</th>
                                                        <th>عدد<br>الطلاب</th>
                                                        <!--<th>عدد الاحاديث<br>للحفظ</th>-->
                                                        <!--<th>عدد الاختبارات<br>السنوية </th>-->
                                                        <th>مكان السكن</th>
{{--                                                        <th>المنطقة الكبرى</th>--}}
{{--                                                        <th>المنطقة المحلية</th>--}}
                                                        <th>الصف</th>
{{--                                                        <th>حالة المحفظ</th>--}}
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($teachers as $index => $teacher)
                                                    <tr>
                                                        <th scope="col">{{ $index+1 }}</th>
                                                        <td>{{ $teacher->user->name }}</td>
                                                        <td>{{ $teacher->user->phone_number }}</td>
                                                        <td>blank</td>
                                                        <!--<td>12</td>-->
                                                        <!--<td>12</td>-->
                                                        <td> {{ $teacher->status == 1 ? "نشط" : "غير نشط" }} </td>
                                                        <td>
                                                            <!--<div class="btn-group" role="group" aria-label="First Group"> data-toggle="modal" data-target="#editTeacher"-->
                                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-toggle="modal" data-target="#userGroup"><i class="fa fa-table"></i></button>
                                                            <button type="button" class="btn btn-icon btn-light btn-sm"  data-id="{{ $teacher->id }}" onclick="editTeacher(this)"><i class="fa fa-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" id="confirm-text" data-id="{{ $teacher->id }}" onclick="deleteTeacher(this)" ><i class="fa fa-trash"></i></button>
                                                            <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#viewGroup" ><i class="fa fa-eye"></i></button>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card sizing section end -->

    <!-- Modal newTeacher-->
    <div class="modal fade text-left" id="newTeacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة مُحفظ جديد</label>
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
            </div>
        </div>
    </div>
    <!-- End Modal newTeacher-->
    <!-- Modal editTeacher-->
    <div class="modal fade text-left" id="editTeacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات مُحفظ</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editTeacher" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">اسم المُحفظ</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم المُحفظ" name="name">
                                        <input type="hidden" id="id" class="form-control" name="id" value="0">
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
                                        <input type="text" id="description_of_qualification_" class="form-control description_of_qualification" placeholder="وصف المؤهل" name="description_of_qualification_">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="great_area_id">المنطقة الكبرى</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="major_area_id" class="form-control" name="major_area_id" onchange="getAreaByParentID(this)">
{{--                                                @foreach($MajorAreas as $MajorArea)--}}
{{--                                                    <option value="{{ $MajorArea['id'] }}">{{ $MajorArea['name'] }}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="local_area_id">المنطقة المحلية</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="local_area_id" class="form-control local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mosque_id">المسجد</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="mosque_id" class="form-control mosque_id" name="mosque_id">
                                                <option value="1">مسجد الفاتح</option>
                                                <option value="2">مسجد صلاح الدين</option>
                                                <option value="3">المسجد العمري</option>
                                                <option value="4">المسجد الكبير</option>
                                                <option value="5">مسجد يافا</option>
                                                <option value="6">مسجد الشافعي</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="teacher_social_status">الحالة الاجتماعية</label>
                                    <div class="position-relative has-icon-left">
                                        <select id="social_status" class="form-control" name="social_status">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Date_of_work">تاريخ بدء العمل</label>
                                    <input type="date" id="Date_of_work" class="form-control"  name="Date_of_work">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">البريد الالكتروني</label>
                                    <input type="text" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="certificates_of_judgments_id">شهادات الأحكام</label>
                                    <div id="certificates_of_judgments_id" class="position-relative has-icon-left icheck_minimal skin">
{{--                                        @foreach($CertificatesOfJudgments as $index => $CertificatesOfJudgment)--}}
{{--                                            <fieldset>--}}
{{--                                                <input type="checkbox" id="certificates_of_judgments{{ $CertificatesOfJudgment->id }}" name="certificates_of_judgments{{ $CertificatesOfJudgment->id }}" value="{{ $CertificatesOfJudgment->id }}">--}}
{{--                                                <label for="certificates_of_judgments{{ $CertificatesOfJudgment->id }}">{{ $CertificatesOfJudgment->name }}</label>--}}
{{--                                            </fieldset>--}}
{{--                                        @endforeach--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="teacher">حالة المحفظ</label>
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
                                    <label for="notes">ملحوظات</label>
                                    <textarea id="notes" class="form-control" placeholder="ملحوظات" name="notes" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveTeacher()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editTeacher-->
    <!-- Modal userGroup-->
    <div class="modal fade text-left" id="userGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">المُحفظ</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post"  action="">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row border m-1 p-1">
                                <div class="col-sm-3">
                                    <strong>رقم الحلقة: </strong><span>8888</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>المحفظ: </strong><span>محمد علي</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>المشرف الميداني: </strong><span>عمر بن عبد العزيز</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>تاريخ الانشاء: </strong><span>15/02/2019</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>المنطقة الكبرى: </strong><span>وسط غزة</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>المنطقة المحلية: </strong><span>النصر</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>المسجد: </strong><span>المسجد الكبير</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>عدد الطلاب: </strong><span>10</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>عدد أحاديث الحفظ: </strong><span>10</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>حالة الحلقة: </strong><span>فعالة</span>
                                </div>
                                <div class="col-sm-3">
                                    <strong>عدد الاختبارات السنوية: </strong><span>10</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="userGroupTable" class="table table-bordered table-sm">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>الكتاب</th>
                                            <th> المنطقة الكبرى</th>
                                            <th> المنطقة المحلية</th>
                                            <th>المسجد</th>
                                            <th>حذف</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>الشمال</td>
                                            <td>الشمال</td>
                                            <td>العمري</td>
                                            <td><button type="button" class="btn btn-icon btn-danger btn-sm" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                            <td><button type="button" class="btn btn-icon btn-danger btn-sm" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <select class="select2 form-control" id="student_id" name="student_id">
                                            <option>أحمد علي محمود</option>
                                            <option>محمود شاهين بركة</option>
                                            <option>محمد علي ابراهيم</option>
                                            <option>علي خليل معتصم</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button type="button" id="add_student" class="btn btn-primary" name="add_student" onclick="add_student_to_table()">إضافة</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary " ><i class="fa fa-print"></i> طباعة</button>
                        <input type="reset" class="btn btn-secondary " data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal userGroup-->
    <!-- Modal viewGroup-->
    <div class="modal fade text-left" id="viewGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض معلومات المُحفظ</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body m-1">
                    <form class="form form-horizontal" method="post"  action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="text-center">
                                        بسم الله الرحمن الرحيم
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mt-3">دار القرأن الكريم والسنة</p>
                                    <p>جمعية خيرية رقم 4006</p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <img src="assets/images/logo.jpg" width="150px" height="150px">
                                </div>
                                <div class="col-sm-4">
                                    <p class="mt-3 text-right">Dar Al Quran and the Sunnah</p>
                                    <p class="text-right">Charity No. 4006</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label >التاريخ : 05/05/2019 م</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h3><u>نموذج بطاقة مُحفظ</u></h3>
                                </div>
                            </div>
                            <div class="row border m-1 p-1">
                                <div class="col-sm-12">
                                    <p>
                                        <strong>بيانات المحفظ الأساسية</strong>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>اسم المحفظ: </strong>
                                        <span>عمر بن عبد العزيز</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>رقم الهوية: </strong>
                                        <span>80604527</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>تاريخ الميلاد: </strong>
                                        <span>01/01/1992 م</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>رقم الجول: </strong>
                                        <span>0597100912</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المؤهل العلمي: </strong>
                                        <span>بكالوريوس</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>وصف المؤهل: </strong>
                                        <span>هندسة مدني</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المنطقة الكبرى: </strong>
                                        <span>غزة</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المنطقة المحلية: </strong>
                                        <span>الشاطئ</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المسجد: </strong>
                                        <span>المسجد الابيض</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>الحالة الاجتماعية: </strong>
                                        <span>أعزب</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد أفراد العائلة: </strong>
                                        <span>5</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>تاريخ بدء العمل: </strong>
                                        <span>25/11/2017</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>البريد الإلكتروني: </strong>
                                        <span>asd@asd.com</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>شهادات الأحكام: </strong>
                                        <span>سند و قراءات</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>حالة المحفظ: </strong>
                                        <span>فعال</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row border m-1 p-1">
                                <div class="col-sm-12">
                                    <p>
                                        <strong>احصائيات المحفظ</strong>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الطلاب الذين خرجهم: </strong>
                                        <span>41</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الدورات التي درسها: </strong>
                                        <span>35</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>التقييم الشهري: </strong>
                                        <span>86%</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>التقييم السنوي: </strong>
                                        <span>91%</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نسبة إنجاز الخطة: </strong>
                                        <span>85%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <strong>ملحوظات: </strong>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <br>
                                    <hr>
                                    <br>
                                    <hr>
                                    <br>
                                    <hr>
                                </div>
                            </div>

                            <div class="row">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " ><i class="fa fa-print"></i> طباعة</button>
                    <input type="reset" class="btn btn-secondary " data-dismiss="modal"
                           value="إغلاق">
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal viewGroup-->

    <script type="text/javascript">
        $(document).ready(function() {

        });

        function addNewTeacher() {

                var data=getFormData($("#form-addNewTeacher"));
                //var data=$("#form-addNewTeacher").serializeArray();
                console.log(data);
                axios({
                    method:'post',
                    url:'localhost',
                    {{--url:'{{ route("addNewTeacher") }}',--}}
                    responseType:'json',
                    data:data
                }).then(function (response) {
                    success();
                    //console.log(response.data);
                }).catch(function (error) {
                    swal("خطأ !", error.response, "error");
                });
        }

        function editTeacher(item) {
            var id=$(item).attr('data-id');
            //console.log(id);
            axios({
                method:'GET',
                url:'localhost',
{{--                url:'{{ route("showTeacher") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editTeacher").modal('show');
                $("#editTeacher #form-editTeacher #name").val(response.data.data.name);
                $("#editTeacher #form-editTeacher #identity_number").val(response.data.data.identity_number);
                $("#editTeacher #form-editTeacher #dob").val(dateReformatting(response.data.data.dob));
                $("#editTeacher #form-editTeacher #mobile_number").val(response.data.data.mobile_number);
                $("#editTeacher #form-editTeacher #qualification_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.qualification.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editTeacher #form-editTeacher #major_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.major_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editTeacher #form-editTeacher #local_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.local_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editTeacher #form-editTeacher #social_status").find('option').each(function (index, item) {
                    if(item.value===response.data.data.social_status){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editTeacher #form-editTeacher #number_of_family_members").val(response.data.data.number_of_family_members);
                $("#editTeacher #form-editTeacher #Date_of_work").val(dateReformatting(response.data.data.Date_of_work));
                $("#editTeacher #form-editTeacher #email").val(response.data.data.email);
                $("#editTeacher #form-editTeacher [name^='certificates_']").each(function (index, item) {
                    if(response.data.data.Certificates)
                    if(item.value===response.data.data.Certificates.id)
                        $(item).iCheck('check');

                }).trigger("change");

                if(response.data.data.status===1)
                $("#editTeacher #form-editTeacher #status").iCheck('check');
                $("#editTeacher #form-editTeacher #notes").val(response.data.data.notes);
                $("#editTeacher #form-editTeacher #id").val(response.data.data.id);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveTeacher() {
            var data=getFormData($("#form-editTeacher"));
            var id=$("#editTeacher #form-editTeacher #id").val();
            axios({
                method:'PUT',
                url:'localhost',
{{--                url:'{{ route("updateTeacher") }}'+'/'+id,--}}
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

        function deleteTeacher(item) {
            var id=$(item).attr('data-id');

                axios({
                    method:'DELETE',
                    url:'localhost',
{{--                    url:'{{ route("deleteTeacher") }}'+'/'+id,--}}
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

        function getDescriptionForQualification(item) {
           // alert(item.value);
            if (item) {
                axios({
                    method: 'get',
                    url:'localhost',
{{--                    url: '{{ route('showQualification') }}'+'/'+item.value,--}}
                    responseType: 'json',
                }).then(function (response) {
                    $(".description_of_qualification").val(response.data.data.description);
                    console.log(response.data);
                }).catch(function (error) {
                    //console.log(error);
                    swal("خطا !","الرجاء تحديد المؤهل العلمي","error");
                });
            }
            else {
                swal("خطا !","الرجاء تحديد المؤهل العلمي","error");
            }
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

        function getMosqueByLocalAreaID(item) {
            if (item) {
                axios({
                    method: 'get',
                    url:'localhost',
{{--                    url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+item.value,--}}
                    responseType: 'json',
                }).then(function (response) {
                    //$("#form-addNewTeacher #description_of_qualification").val(response.data.data.description);
                    $(".mosque_id").find("option").remove().end();

                    $.each(response.data.data, function (index, item) {
                        $(".mosque_id").append(new Option(item.name, item.id));
                    });
                    console.log(response.data);
                }).catch(function (error) {
                    //console.log(error);
                    swal("خطا !","الرجاء تحديد المنطقة الكبرى","error");
                });
            }
            else {
                swal("خطا !","الرجاء تحديد المنطقة الكبرى","error");
            }
        }

        function setPass(){
            $("#form-addNewTeacher #password").val($("#form-addNewTeacher #identity_number").val());
            //console.log($("#form-addNewTeacher #password").val());
        }
    </script>
    @endsection

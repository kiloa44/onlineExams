@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> بيانات الطلاب</h4>
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
                                            data-target="#newStudent">
                                        <i class="ft-plus"></i>طالب جديد
                                    </button>
                                </div>

                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>بيانات الطلاب</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الطالب رباعيا</th>
                                                        <th>رقم الجوال</th>
                                                        <th>تاريخ الميلاد</th>
                                                        <th>الحلقة (المحفظ)</th>
                                                        <th>المشرف العام</th>
                                                        <th>المنطقة الكبرى</th>
                                                        <th>المحلية</th>
                                                        <th>المسجد</th>
                                                        <th>حالة الطالب</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
{{--                                                    @foreach($students as $index => $student)--}}
{{--                                                    <tr>--}}
{{--                                                        <th scope="col">{{ $index+1 }}</th>--}}
{{--                                                        <td>{{ $student->name }}</td>--}}
{{--                                                        <td>{{ $student->mobile_number }}</td>--}}
{{--                                                        <td>{{ $student->dob }}</td>--}}
{{--                                                        <td>{{ $student->group->teacher->name }}</td>--}}
{{--                                                        <td>{{ $student->group->teacher->name }}</td>--}}
{{--                                                        <td>{{ $student->majorArea->name}}</td>--}}
{{--                                                        <td>{{ $student->localArea->name }}</td>--}}
{{--                                                        <td>{{ $student->mosque->name }}</td>--}}
{{--                                                        <td>{{ $student->updated_automatically_qualified== 1 ? "نشط" : "غير نشط" }}</td>--}}

{{--                                                        <td>--}}
{{--                                                            <!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
{{--                                                            <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $student->id }}" onclick="editStudent(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $student->id }}" id="confirm-text" onclick="deleteStudent(this)" ><i class="fa fa-trash"></i></button>--}}
{{--                                                            <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#viewStudent" ><i class="fa fa-eye"></i></button>--}}
{{--                                                            <!--</div>-->--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                    @endforeach--}}
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

        <!-- Modal newStudent-->
        <div class="modal fade text-left" id="newStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة طالب جديد</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-addNewStudent" action="#">
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
        <!-- End Modal newStudent-->
        <!-- Modal editStudent-->
        <div class="modal fade text-left" id="editStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات طالب</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-editStudent" action="#">
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">اسم الطالب</label>
                                            <input type="text" id="name" class="form-control" placeholder="اسم الطالب" name="name">
                                            <input type="hidden" id="id" class="form-control" name="id">
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
                                            <label for="mobile_number">رقم الجوال</label>
                                            <input type="text" id="mobile_number" class="form-control" placeholder="رقم الجوال" name="mobile_number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="qualification_id">المؤهل العلمي</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="qualification_id" class="form-control select2" name="qualification_id">
                                                    <option value="null">-- اخنر المؤهل العلمي --</option>
{{--                                                    @foreach($qualifications as $index => $qualification)--}}
{{--                                                        <option value="{{ $qualification->id }}">{{ $qualification->name }}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="qualification_auto_update">تحديث المؤهل آليا</label><br>
                                            <div class="position-relative has-icon-left icheck_minimal skin">
                                                <fieldset>
                                                    <input type="checkbox" id="updated_automatically_qualified" name="updated_automatically_qualified" value="1">
                                                    <label for="status">فعال </label>
                                                </fieldset>
                                            </div>                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="guardian_mobile_number">رقم جوال ولي الامر</label>
                                            <input type="text" id="guardian_mobile_number" class="form-control" placeholder="رقم جوال ولي الامر" name="guardian_mobile_number">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="major_area_id">المنطقة الكبرى</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="major_area_id" class="form-control select2" name="major_area_id" onchange="getAreaByParentID(this)">
                                                    <option value="null">-- اختر المنطقة الكبرى --</option>
{{--                                                    @foreach($majorAreas as $index => $majorArea)--}}
{{--                                                        <option value="{{ $majorArea->id }}">{{ $majorArea->name }}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="local_area_id">المنطقة المحلية</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="local_area_id" class="form-control select2 local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">

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
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="group_id">الحلقة (المحفظ)</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="group_id" class="form-control select2" name="group_id">
                                                    <option value="null">-- اختر المحفظ --</option>
{{--                                                    @foreach($groups as $index => $group)--}}
{{--                                                        <option value="{{ $group->id }}">{{ $group->teacher->name }}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label >حالة الطالب</label><br>
                                            <label for="group_status">
                                                <input type="checkbox" id="group_status" name="group_status" value="1">
                                                فعالة
                                            </label>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="saveStudent()"><i class="fa fa-save"></i> حفظ</button>
                            <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                                   value="إغلاق">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal editStudent-->
        <!-- Modal viewStudent-->
        <div class="modal fade text-left" id="viewStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض بطاقة طالب</label>
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
                                        <label >التاريخ: 05/05/2019 م</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <h3><u>نموذج بطاقة طالب</u></h3>
                                    </div>
                                </div>
                                <div class="row border m-1 p-1">
                                    <div class="col-sm-12">
                                        <p>
                                            <strong>بيانات الطالب الأساسية</strong>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>اسم الطالب: </strong>
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
                                            <strong>رقم الجوال: </strong>
                                            <span>0597100912</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>المؤهل العلمي: </strong>
                                            <span>دبلوم حديث</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>اسم ولي الامر: </strong>
                                            <span>محمد حمادة</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>رقم هوية ولي الامر: </strong>
                                            <span>9080706254</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>رقم جوال ولي الامر: </strong>
                                            <span>0597100912</span>
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
                                            <strong>المحفظ: </strong>
                                            <span>محمود كمال</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>حالة الطالب: </strong>
                                            <span>فعال</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row border m-1 p-1">
                                    <div class="col-sm-12">
                                        <p>
                                            <strong>احصائيات الطالب</strong>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>عدد الأحاديث المحفوظة: </strong>
                                            <span>257</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>الإختبارات المجتازة: </strong>
                                            <span>تجميعي 1</span><br>
                                            <span>مرحلي 1</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>الكتاب الحالي: </strong>
                                            <span>عمدة الأحكام</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>الحديث الحالي: </strong>
                                            <span>53</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>
                                            <strong>فئة الحديث الحالية: </strong>
                                            <span>200</span>
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
                        <button type="button" class="btn btn-primary" > <i class="fa fa-print"></i> طباعة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal viewStudent-->

    </section>
    <!-- Card sizing section end -->
    <script>
        function addNewStudent() {

            var data=getFormData($("#form-addNewStudent"));
            //console.log(data);
            axios({
                method:'post',
                url:'localhost',
                {{--url:'{{ route("addNewStudent") }}',--}}
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function editStudent(item) {
            var id=$(item).attr('data-id');
            //console.log(id);
            axios({
                method:'GET',
                url:'localhost',

                {{--url:'{{ route("showStudent") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editStudent").modal('show');
                $("#editStudent #form-editStudent #name").val(response.data.data.name);
                $('#editStudent #form-editStudent #identity_number').val(response.data.data.identity_number).trigger('change');
                $("#editStudent #form-editStudent #dob").val(dateReformatting(response.data.data.dob));
                $("#editStudent #form-editStudent #mobile_number").val(response.data.data.mobile_number);
                $('#editStudent #form-editStudent #qualification_id').val(response.data.data.qualification.id).trigger('change');
                if(response.data.data.updated_automatically_qualified===1) $("#editGroup #form-editStudent #updated_automatically_qualified").iCheck('check');
                $("#editStudent #form-editStudent #guardian_name").val(response.data.data.guardian_name);
                $("#editStudent #form-editStudent #guardian_identity_number").val(response.data.data.guardian_identity_number);
                $("#editStudent #form-editStudent #guardian_mobile_number").val(response.data.data.guardian_mobile_number);
                $('#editStudent #form-editStudent #major_area_id').val(response.data.data.mosque.major_area_id).trigger('change');
                $('#editStudent #form-editStudent #local_area_id').val(response.data.data.mosque.local_area_id);
                getMosqueByLocalAreaID2(response.data.data.mosque.local_area_id);
                $('#editStudent #form-editStudent #mosque_id').val(response.data.data.mosque.id).trigger('change');
                $('#editStudent #form-editStudent #group_id').val(response.data.data.group_id).trigger('change');
                $('#editStudent #form-editStudent #notes').val(response.data.data.notes);
                $('#editStudent #form-editStudent #id').val(response.data.data.id);
                //$('#editStudent #form-editGroup #supervisor_id').val(response.data.data.supervisor.id).trigger('change');
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveStudent() {
            var data=getFormData($("#form-editStudent"));
            axios({
                method:'PUT',
                url:'localhost',

                {{--                url:'{{ route("updateStudent") }}'+'/'+data.id,--}}
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

        function deleteStudent(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
                url:'localhost',

                {{--url:'{{ route("deleteStudent") }}'+'/'+id,--}}
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

                    {{--url: '{{ route('showQualification') }}'+'/'+item.value,--}}
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

                    {{--url: '{{ route('getAreaByParentID') }}'+'/'+item.value,--}}
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
            //console.log(item);
            if (item) {
                axios({
                    method: 'get',
                    url:'localhost',

                    {{--url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+item.value,--}}
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
                    swal("خطا !","الرجاء تحديد المنطقة المحلية","error");
                });
            }
            else {
                swal("خطا !","الرجاء تحديد المنطقة المحلية","error");
            }
        }

        function getMosqueByLocalAreaID2(id) {
            //console.log(item);
            if (id) {
                axios({
                    method: 'get',
                    url:'localhost',

                    {{--url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+id,--}}
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
                    swal("خطا !","الرجاء تحديد المنطقة المحلية","error");
                });
            }
            else {
                swal("خطا !","الرجاء تحديد المنطقة المحلية","error");
            }
        }
    </script>
    @endsection

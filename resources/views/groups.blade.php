@extends('layouts.app')

@section('content')
<!-- Card sizing section start -->

<section id="sizing">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">حلقات تحفيظ السنة</h4>
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
                                        data-target="#newGroup">
                                    <i class="ft-plus"></i>حلقة جديدة
                                </button>
                            </div>

                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i>حلقات تحفيظ السنة</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table id ="dataTable" class="table table-bordered table-xs">
                                                <thead>
                                                <tr class="text-center">
                                                    <th >#</th>
                                                    <th>رقم الحلقة</th>
                                                    <th>اسم المحفظ</th>
                                                    <th>المشرف الميداني</th>
                                                    <th>تاريخ البدء</th>
                                                    <th>المنطقة الكبرى</th>
                                                    <th>المنطقة المحلية</th>
                                                    <th>المسجد</th>
                                                    <th>الحالة</th>
                                                    <!--<th>عدد الاختبارات<br>السنوية</th>-->
                                                    <th>خيارات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{--@foreach($groups as $index => $group)--}}
                                                {{--<tr class="text-center s-1">--}}
                                                    {{--<th scope="col">{{ $index+1 }}</th>--}}
                                                    {{--<td>{{ $group->number }}</td>--}}
                                                    {{--<td><a href="" data-toggle="modal" data-target="#userGroup">{{ $group->teacher->user->name }}</a></td>--}}
                                                    {{--<td>{{ $group->supervisor->name }}</td>--}}
                                                    {{--<td>{{ $group->starting_date }}</td>--}}
                                                    {{--<td>{{ $group->majorArea->name }}</td>--}}
                                                    {{--<td>{{ $group->localArea->name }}</td>--}}
                                                    {{--<td>{{ $group->mosque->name }}</td>--}}
                                                    {{--<!--<td>10</td>-->--}}
                                                    {{--<!--<td>10</td>-->--}}
                                                    {{--<td>{{ $group->status== 1 ? "نشط" : "غير نشط" }}</td>--}}
                                                    {{--<!--<td>10</td>-->--}}
                                                    {{--<td>--}}
                                                        {{--<!-- <div class="btn-group" role="group" aria-label="First Group">-->--}}
                                                        {{--<button type="button" class="btn btn-icon btn-warning btn-sm" data-id="{{ $group->id }}" onclick="editGroup(this)"><i class="fa fa-table"></i></button>--}}
                                                        {{--<button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $group->id }}" onclick="editGroup(this)"><i class="fa fa-edit"></i></button>--}}
                                                        {{--<button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $group->id }}" id="confirm-text" onclick="deleteGroup(this)" ><i class="fa fa-trash"></i></button>--}}
                                                        {{--<button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#viewGroup" ><i class="fa fa-eye"></i></button>--}}
                                                        {{--<!--</div>-->--}}
                                                    {{--</td>--}}
                                                {{--</tr>--}}
                                                {{--@endforeach--}}
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

    <!-- Modal newGroup-->
    <div class="modal fade text-left" id="newGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة حلقة جديدة </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addNewGroup" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">رقم الحلقة</label>
                                        <input type="text" id="number" class="form-control" placeholder="رقم الحلقة" name="number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="teacher_id">اسم المحفظ</label>
                                        <select id="teacher_id" class="form-control" name="teacher_id">
                                            <option value="null">-- اختر اسم المحفظ --</option>
                                            {{--@foreach($teachers as $index => $teacher)--}}
                                            {{--<option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>--}}
                                           {{--@endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="starting_date">تاريخ بدء الحلقة</label>
                                        <input type="date" id="starting_date" class="form-control" placeholder="تاريخ بدء الحلقة" name="starting_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="major_area_id" class="form-control" name="major_area_id" onchange="getAreaByParentID(this)">
                                                <option value="null">-- اختر المنطقة الكبرى --</option>
                                                {{--@foreach($majorAreas as $index => $majorArea)--}}
                                                {{--<option value="{{ $majorArea->id }}">{{ $majorArea->name }}</option>--}}
                                                {{--@endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="local_area_id">المنطقة المحلية</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="local_area_id" class="form-control local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mosque_id">المسجد</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="mosque_id" class="form-control mosque_id" name="mosque_id">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="number_of_students">عدد الطلاب</label>
                                        <input type="number" id="number_of_students" class="form-control" placeholder="عدد الطلاب" name="number_of_students">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="supervisor_id">المشرف الميداني</label>
                                        <select id="supervisor_id" class="form-control" name="supervisor_id">
                                            <option value="null">-- اختر اسم المشرف الميداني --</option>
                                            {{--@foreach($supervisors as $index => $supervisor)--}}
                                                {{--<option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>--}}
                                            {{--@endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="number_of_conversations_to_remember">عدد احاديث الحفظ</label>
                                        <input type="number" id="number_of_conversations_to_remember" class="form-control" name="number_of_conversations_to_remember">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="number_of_annual_tests">عدد الاختبارات السنوية</label>
                                        <input type="number" id="number_of_annual_tests" class="form-control" name="number_of_annual_tests">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label >حالة المجموعة</label><br>
                                        <div class="position-relative has-icon-left icheck_minimal skin">
                                            <fieldset>
                                                <input type="checkbox" id="status" name="status" value="1">
                                                <label for="status">فعالة</label>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="addNewGroup()"><i class="fa fa-save"></i> إضافة</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal newGroup-->
    <!-- Modal editGroup-->
    <div class="modal fade text-left" id="editGroup"  role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل حلقة </label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editGroup" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">رقم الحلقة</label>
                                        <input type="text" id="number" class="form-control" placeholder="رقم الحلقة" name="number">
                                        <input type="hidden" id="id" class="form-control" ame="id">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="teacher_id">اسم المحفظ</label>
                                        <select id="teacher_id" class="form-control select2" name="teacher_id">
                                            <option value="null">-- اختر اسم المحفظ --</option>
                                            {{--@foreach($teachers as $index => $teacher)--}}
                                                {{--<option value="{{ $teacher->id }}">{{ $teacher->user->name}}</option>--}}
                                            {{--@endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="starting_date">تاريخ بدء الحلقة</label>
                                        <input type="date" id="starting_date" class="form-control" placeholder="تاريخ بدء الحلقة" name="starting_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="major_area_id">المنطقة الكبرى</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="major_area_id" class="form-control select2" name="major_area_id" onchange="getAreaByParentID(this)">
                                                <option value="null">-- اختر المنطقة الكبرى --</option>
                                                {{--@foreach($majorAreas as $index => $majorArea)--}}
                                                    {{--<option value="{{ $majorArea->id }}">{{ $majorArea->name }}</option>--}}
                                                {{--@endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="local_area_id">المنطقة المحلية</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="local_area_id" class="form-control select2 local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mosque_id">المسجد</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="mosque_id" class="form-control select2 mosque_id" name="mosque_id">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="number_of_students">عدد الطلاب</label>
                                        <input type="number" id="number_of_students" class="form-control" placeholder="عدد الطلاب" name="number_of_students">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="supervisor_id">المشرف الميداني</label>
                                        <select id="supervisor_id" class="form-control select2" name="supervisor_id">
                                            <option value="null">-- اختر اسم المشرف الميداني --</option>
                                            {{--@foreach($supervisors as $index => $supervisor)--}}
                                                {{--<option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>--}}
                                            {{--@endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="number_of_conversations_to_remember">عدد احاديث الحفظ</label>
                                        <input type="number" id="number_of_conversations_to_remember" class="form-control" name="number_of_conversations_to_remember">
                                    </div>
                                </div>
                                <div class="col-nd-3">
                                    <div class="form-group">
                                        <label for="number_of_annual_tests">عدد الاختبارات السنوية</label>
                                        <input type="number" id="number_of_annual_tests" class="form-control" name="number_of_annual_tests">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label >حالة المجموعة</label><br>
                                        <div class="position-relative has-icon-left icheck_minimal skin">
                                            <fieldset>
                                                <input type="checkbox" id="status" name="status" value="1">
                                                <label for="status">فعالة</label>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveGroup()"><i class="fa fa-save"></i> حفظ</button>
                        <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editGroup-->
    <!-- Modal viewGroup-->
    <div class="modal fade text-left" id="viewGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض معلومات الحلقة</label>
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
                                    <h3><u>نموذج بطاقة حلقة</u></h3>
                                </div>
                            </div>
                            <div class="row border m-1 p-1">
                                <div class="col-sm-3">
                                    <strong>رقم الحلقة: </strong><span>123456</span>
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
                                    <table class="table table-bordered table-sm">
                                        <thead class="thead-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>الكتاب</th>
                                            <th> المنطقة الكبرى</th>
                                            <th> المنطقة المحلية</th>
                                            <th>المسجد</th>
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
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>عمدة الاحكام</td>
                                            <td>جنوب غزة</td>
                                            <td>مسجد علي بن ابي طالب</td>
                                            <td>مصعب بن عمير</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="print_group_student_report.html" class="btn btn-primary">
                        <i class="fa fa-print"></i>
                        طباعة
                    </a>
                    <input type="reset" class="btn btn-secondary " data-dismiss="modal"
                           value="إغلاق">

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal viewGroup-->
    <!-- Modal userGroup-->
    <div class="modal fade text-left" id="userGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">الطلاب في الحلقة</label>
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
</section>
<!-- Card sizing section end -->

<script>
    function addNewGroup() {

        var data=getFormData($("#form-addNewGroup"));
        //var data=$("#form-addNewTeacher").serializeArray();
        console.log(data);
        axios({
            method:'post',
            url:"localhost/onlineExams/public/",
            {{--url:'{{ route("addNewGroup") }}',--}}
            responseType:'json',
            data:data
        }).then(function (response) {
            success();
            //location.reload();
            //console.log(response.data);
        }).catch(function (error) {
            //console.log(error);
            swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
        });
    }

    function editGroup(item) {
        var id=$(item).attr('data-id');
        //console.log(id);
        axios({
            method:'GET',
            url:"localhost/onlineExams/public/",
            {{--url:'{{ route("showGroup") }}'+'/'+id,--}}
            responseType:'json',
        }).then(function (response) {
            console.log(response.data);
            $("#editGroup").modal('show');
            $("#editGroup #form-editGroup #number").val(response.data.data.number);
            $('#editGroup #form-editGroup #teacher_id').val(response.data.data.teacher.id).trigger('change');
            $("#editGroup #form-editGroup #starting_date").val(dateReformatting(response.data.data.starting_date));
            $('#editGroup #form-editGroup #major_area_id').val(response.data.data.mosque.major_area_id).trigger('change');
            $('#editGroup #form-editGroup #local_area_id').val(response.data.data.mosque.local_area_id);
            getMosqueByLocalAreaID2(response.data.data.mosque.local_area_id);
            $('#editGroup #form-editGroup #number_of_students').val(response.data.data.number_of_students);
            $('#editGroup #form-editGroup #supervisor_id').val(response.data.data.supervisor.id).trigger('change');
            $('#editGroup #form-editGroup #number_of_conversations_to_remember').val(response.data.data.number_of_conversations_to_remember);
            $('#editGroup #form-editGroup #number_of_annual_tests').val(response.data.data.number_of_annual_tests);
            if(response.data.data.status===1) $("#editGroup #form-editGroup #status").iCheck('check');
            $("#editGroup #form-editGroup #notes").val(response.data.data.notes);
            $("#editGroup #form-editGroup #id").val(response.data.data.id);
            $('#editGroup #form-editGroup #mosque_id').val(response.data.data.mosque.id).trigger('change');

        }).catch(function (error) {
            console.log(error);
        });
    }

    function saveGroup() {
        var data=getFormData($("#form-editGroup"));
        var id=$("#editGroup #form-editGroup #id").val();
        axios({
            method:'PUT',
            url:"localhost/onlineExams/public/",
{{--            url:'{{ route("updateGroup") }}'+'/'+id,--}}
            responseType:'json',
            data:data,
            //params:{id}
        }).then(function (response) {
            success();
            //location.reload();
            //console.log(response.data);
        }).catch(function (error) {
            swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
            //console.log(error);
        });

    }

    function deleteGroup(item) {
        var id=$(item).attr('data-id');

        axios({
            method:'DELETE',
            url:"localhost/onlineExams/public/",
            {{--url:'{{ route("deleteGroup") }}'+'/'+id,--}}
            responseType:'json',
        }).then(function (response) {
            location.reload();
            //console.log(response.data);
        }).catch(function (error) {
            swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
            //console.log(error);
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
                url:"localhost/onlineExams/public/",
{{--                url: '{{ route('showQualification') }}'+'/'+item.value,--}}
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
                url:"localhost/onlineExams/public/",
{{--                url: '{{ route('getAreaByParentID') }}'+'/'+item.value,--}}
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
                url:"localhost/onlineExams/public/",
{{--                url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+item.value,--}}
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
                url:"localhost/onlineExams/public/",
{{--                url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+id,--}}
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

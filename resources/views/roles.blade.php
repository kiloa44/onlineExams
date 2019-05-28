@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الادوار والصلاحيات</h4>
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
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i> الأدوار</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الاسم</th>
                                                        <th>ملاحظات</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
{{--                                                    @foreach($roles as $index => $role)--}}
{{--                                                    <tr>--}}
{{--                                                        <th scope="col">{{$role->id}}</th>--}}
{{--                                                        <td>{{$role->name}}</td>--}}
{{--                                                        <td>{{$role->description}}</td>--}}
{{--                                                        <td>--}}
{{--                                                            <div class="btn-group-sm" role="group" aria-label="First Group">--}}
{{--                                                                <button type="button" class="btn btn-icon btn-light" data-toggle="modal"--}}
{{--                                                                        data-target="#editRole" roleID="" onclick="editRole(this)"><i class="fa fa-edit"></i></button>--}}
{{--                                                              <!--  <button type="button" class="btn btn-icon btn-danger" roleID="" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button>-->--}}
{{--                                                            </div>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                    @endforeach--}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="form-section"><i class="fa fa-clipboard"></i> الصلاحيات</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-md-2 label-control" for="projectinput6">الأدوار</label>
                                                <div class="col-md-3">
                                                    <select id="projectinput6" name="interested" class="form-control">
{{--                                                        @foreach($roles as $index => $role)--}}
{{--                                                        <option value="{{$role->name}}" {{($role->slug=='admin')?'selected=""':''}}>{{$role->description}} </option>--}}

{{--                                                        @endforeach--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row icheck_minimal skin">
                                        <div class="col-sm-4">
                                            <label class="text-primary">السيكرتير</label>
                                            <hr>
                                            <fieldset>
                                                <input type="checkbox" id="input-1">
                                                <label for="input-1">إضافة طالب</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-2" checked>
                                                <label for="input-2">تعديل طالب</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-3">
                                                <label for="input-3">حذف طالب</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-4" checked>
                                                <label for="input-4">اختبار الطلاب</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-5">
                                                <label for="input-5">طباعة الشهادات</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-6" checked>
                                                <label for="input-6">رفع تقرير الطلاب</label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="text-primary">المعلم</label>
                                            <hr>
                                            <fieldset>
                                                <input type="checkbox" id="input-7">
                                                <label for="input-7">إضافة طلاب جدد</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-8" checked>
                                                <label for="input-8">فتح صف</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-9">
                                                <label for="input-9">متابعة الحضور والغياب</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-10" checked>
                                                <label for="input-10">إنشاء الامتحان</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-11">
                                                <label for="input-11">طباعة شهادات</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-12" checked>
                                                <label for="input-12">تقييم الامتحانات</label>
                                            </fieldset>

                                        </div>
                                        <div class="col-sm-4">
                                            <label class="text-primary">قسم الانتاج الاعلامي</label>
                                            <hr>
                                            <fieldset>
                                                <input type="checkbox" id="input-13">
                                                <label for="input-13">إضافة منشورات جديد</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-14" checked>
                                                <label for="input-14">نشر المنشورات على مواقع التواصل الاجتماعي</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-15">
                                                <label for="input-15">رفع الصور</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-16" checked>
                                                <label for="input-16">رفع الفيديو</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-17">
                                                <label for="input-17">رفع تقارير الانجاز</label>
                                            </fieldset>
                                            <fieldset>
                                                <input type="checkbox" id="input-18" checked>
                                                <label for="input-18">تقييم الانشطة</label>
                                            </fieldset>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-outline-warning mr-1" data-toggle="modal"
                                            data-target="#newRole">
                                        <i class="ft-plus"></i> إضافة دور جديد
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="newRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة دور جديد</label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label>الإسم</label>
                                                            <input type="text" placeholder="الاسم" class="form-control" name="roleName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>ملاحظات</label>
                                                            <input type="text" placeholder="ملاحظات" class="form-control" name="roleName">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary btn-lg" >حفظ</button>
                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                                               value="إغلاق">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="editRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل</label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>الإسم</label>
                                                            <input type="text" placeholder="الاسم" class="form-control" name="roleName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>ملاحظات</label>
                                                            <input type="text" placeholder="ملاحظات" class="form-control" name="roleName">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary btn-lg" >حفظ</button>
                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                                               value="إغلاق">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card sizing section end -->
    @endsection

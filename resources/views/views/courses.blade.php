@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الدورات العلمية</h4>
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
                                <p class="card-text">في هذه المساحة سوف تتمكن من إضافة وتعديل بيانات الدورات العلمية
                                </p>
                            </div>
                            <form class="form">
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1" data-toggle="modal"
                                            data-target="#newCourse">
                                        <i class="ft-plus"></i>دورة علمية جديدة
                                    </button>
                                </div>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>بيانات الدورات العلمية</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الدورة</th>
                                                        <th>نوع الدورة</th>
                                                        <th>نوع الشهادة</th>
                                                        <th>بداية الدورة</th>
                                                        <th>نهاية الدورة</th>
                                                        <th>عدد الساعات</th>
                                                        <th>عدد الطلاب</th>
                                                        <th>وزن الدورة</th>
                                                        <th>عدد النقاط</th>
                                                        <th>مكان الدورة</th>
                                                        <th>المنطقة</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <td>دور الشمائل المحمدية</td>
                                                        <td>ضمن الخطة</td>
                                                        <td>اختبار</td>
                                                        <td>01/03/2019</td>
                                                        <td>30/05/2019</td>
                                                        <td>60</td>
                                                        <td>100</td>
                                                        <td>10</td>
                                                        <td>10</td>
                                                        <td>المسجد العمري</td>
                                                        <td>غزة</td>
                                                        <td>
                                                            <div class="btn-group btn-group-sm" role="group" aria-label="First Group">
                                                                <button type="button" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#userGroup"><i class="fa fa-table"></i></button>
                                                                <button type="button" class="btn btn-icon btn-light" data-toggle="modal" data-target="#editCourse"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger" roleID="" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info" data-target="modal" data-target="#viewCourse" ><i class="fa fa-eye"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <td>دور الشمائل المحمدية</td>
                                                        <td>ضمن الخطة</td>
                                                        <td>اختبار</td>
                                                        <td>01/03/2019</td>
                                                        <td>30/05/2019</td>
                                                        <td>60</td>
                                                        <td>100</td>
                                                        <td>10</td>
                                                        <td>10</td>
                                                        <td>المسجد العمري</td>
                                                        <td>غزة</td>
                                                        <td>
                                                            <div class="btn-group btn-group-sm" role="group" aria-label="First Group">
                                                                <button type="button" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#userGroup"><i class="fa fa-table"></i></button>
                                                                <button type="button" class="btn btn-icon btn-light" data-toggle="modal" data-target="#editCourse"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger" roleID="" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#viewCourse" ><i class="fa fa-eye"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions right">
                                    <!--<button type="button" class="btn btn-warning mr-1" data-toggle="modal"
                                            data-target="#newCourse">
                                        <i class="ft-plus"></i>دورة علمية جديدة
                                    </button>-->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card sizing section end -->
    <!-- Modal newCourse-->
    <div class="modal fade text-left" id="newCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة دورة علمية جديدة</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="courseName">اسم الدورة</label>
                                        <input type="text" id="courseName" class="form-control" placeholder="اسم الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bookNo">اسم الكتاب</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="none" selected="" disabled="">سيرة ابن هشام.</option>
                                            <option value="design">الفصول في اختصار سيرة الرسول</option>
                                            <option value="development">الرحيق المختوم</option>
                                            <option value="illustration">زاد المعاد في هدي خير العباد</option>
                                            <option value="branding">فقه السيرة ، محمد الغزالي</option>
                                            <option value="video">السيرة النبوية كيف نبني دولة قوية</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bookNo">اسم المدرس</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="none" selected="" disabled="">محمد مححود</option>
                                            <option value="design">احمد عزت</option>
                                            <option value="development">علي عثمان</option>
                                            <option value="illustration">محمد علي </option>
                                            <option value="branding"> محمد الغزالي</option>
                                            <option value="video">محمد عز</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="bookNo">نوع الدورة</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="design">ضمن الخطة</option>
                                            <option value="development">خارج الخطة</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="bookNo">نوع الشهادة</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="design">اختبار مسبق</option>
                                            <option value="development">بدون اختبار</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="meetingDate">بداية الدورة</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="meetingDate" class="form-control" name="meetingDate">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="meetingDate">نهاية الدورة</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="meetingDate" class="form-control" name="meetingDate">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="courseName">عدد الساعات</label>
                                        <input type="number" id="courseName" class="form-control" placeholder="عدد الساعات" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="numberOfStudent">عدد الطلاب</label>
                                        <input type="number" id="numberOfStudent" class="form-control" placeholder="عدد الطلاب" name="numberOfStudent">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="courseWeghit">وزن الدورة</label>
                                        <input type="number" id="courseWeghit" class="form-control" placeholder="وزن الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="numberOfPoint">عدد النقاط</label>
                                        <input type="number" id="numberOfPoint" class="form-control" placeholder=">عدد النقاط" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="coursePlace">مكان الدورة</label>
                                        <input type="text" id="coursePlace" class="form-control" placeholder="مكان الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="area">المنطقة</label>
                                        <input type="text" id="area" class="form-control" placeholder="المنطقة" name="courseName">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg" >حفظ</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal newCourse-->
    <!-- Modal editCourse-->
    <div class="modal fade text-left" id="editCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات الدورة</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="courseName">اسم الدورة</label>
                                        <input type="text" id="courseName" class="form-control" placeholder="اسم الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bookNo">اسم الكتاب</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="none" selected="" disabled="">سيرة ابن هشام.</option>
                                            <option value="design">الفصول في اختصار سيرة الرسول</option>
                                            <option value="development">الرحيق المختوم</option>
                                            <option value="illustration">زاد المعاد في هدي خير العباد</option>
                                            <option value="branding">فقه السيرة ، محمد الغزالي</option>
                                            <option value="video">السيرة النبوية كيف نبني دولة قوية</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bookNo">اسم المدرس</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="none" selected="" disabled="">محمد مححود</option>
                                            <option value="design">احمد عزت</option>
                                            <option value="development">علي عثمان</option>
                                            <option value="illustration">محمد علي </option>
                                            <option value="branding"> محمد الغزالي</option>
                                            <option value="video">محمد عز</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="bookNo">نوع الدورة</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="design">ضمن الخطة</option>
                                            <option value="development">خارج الخطة</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="bookNo">نوع الشهادة</label>
                                        <select id="bookNo" name="bookNo" class="form-control">
                                            <option value="design">اختبار مسبق</option>
                                            <option value="development">بدون اختبار</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="meetingDate">بداية الدورة</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="meetingDate" class="form-control" name="meetingDate">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="meetingDate">نهاية الدورة</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="meetingDate" class="form-control" name="meetingDate">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="courseName">عدد الساعات</label>
                                        <input type="number" id="courseName" class="form-control" placeholder="عدد الساعات" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="numberOfStudent">عدد الطلاب</label>
                                        <input type="number" id="numberOfStudent" class="form-control" placeholder="عدد الطلاب" name="numberOfStudent">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="courseWeghit">وزن الدورة</label>
                                        <input type="number" id="courseWeghit" class="form-control" placeholder="وزن الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="numberOfPoint">عدد النقاط</label>
                                        <input type="number" id="numberOfPoint" class="form-control" placeholder=">عدد النقاط" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="coursePlace">مكان الدورة</label>
                                        <input type="text" id="coursePlace" class="form-control" placeholder="مكان الدورة" name="courseName">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="area">المنطقة</label>
                                        <input type="text" id="area" class="form-control" placeholder="المنطقة" name="courseName">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-md" ><i class="fa fa-save"></i>حفظ  </button>
                        <button type="reset" class="btn btn-secondary btn-md" data-dismiss="modal"
                                value="إغلاق"><i class="fa fa-close"></i>إغلاق </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editCourse-->
    <!-- Modal userGroup-->
    <div class="modal fade text-left" id="userGroup" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">الطلاب في الدورة التدريبية</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post"  action="">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row border m-1 p-1">
                                <div class="col-sm-3">
                                    <p>
                                        <strong>اسم الدورة :</strong>
                                        <span>عمر بن عبد العزيز</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نوع الدورة :</strong>
                                        <span>ضمن الخطة	</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نوع الشهادة : 	</strong>
                                        <span>اختبار</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>بداية الدورة : </strong>
                                        <span>01/03/2019</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نهاية الدروة : </strong>
                                        <span>30/05/2019</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الطلاب : </strong>
                                        <span>100</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الساعات : </strong>
                                        <span>60</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>وزن الدورة : </strong>
                                        <span>10</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد النقاط : </strong>
                                        <span>60</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>مكان الدورة : </strong>
                                        <span>المسجد العمري	</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المنطقة : </strong>
                                        <span>غزة</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-12">
                                    <table class="table text-left" style="background-color: #2A2E30; color: #c5c6c8;">
                                        <thead>
                                        <tr>
                                            <th style="width: 3%">م</th>
                                            <th>اسم الطالب رباعي</th>
                                            <th>الدرجة</th>
                                            <th>التقدير</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group mb-2 contact-repeater">
                                <div data-repeater-list="repeater-group">
                                    <div class="input-group mb-1" data-repeater-item>
                                        <span class="border p-1">1</span>
                                        <input type="text" placeholder="اسم الطالب" class="form-control" id="example-tel-input" name="example-tel-input">
                                        <input type="text" placeholder=" الدرجة" class="form-control" id="example-tel-input" name="example-tel-input">
                                        <input type="text" placeholder=" التقدير" class="form-control" id="example-tel-input" name="example-tel-input">
                                        <div class="input-group-append">
                                                                                  <span class="input-group-btn ml-1" id="button-addon2">
                                                                                    <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                                                                  </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create class="btn btn-primary">
                                    <i class="icon-plus4"></i> طالب جديد
                                </button>
                            </div>
                            <hr>
                            <!--<div class="row">
                                <div class="col-sm-12">
                                    <table id="userGroupTable" class="table table-bordered table-sm">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>المنطقة</th>
                                            <th>المسجد</th>
                                            <th>حذف</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>الشمال</td>
                                            <td>العمري</td>
                                            <td><button type="button" class="btn btn-icon btn-danger" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>جنوب غزة</td>
                                            <td>مصعب بن عمير</td>
                                            <td><button type="button" class="btn btn-icon btn-danger" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button></td>
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
                            </div>-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-md" ><i class="fa fa-save"></i>حفظ </button>
                        <button type="reset" class="btn btn-secondary btn-md" data-dismiss="modal"
                                value=""><i class="fa fa-close"></i>إغلاق </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal userGroup-->
    <!-- Modal viewCourse-->
    <div class="modal fade text-left" id="viewCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض معلومات الدورة العلمية</label>
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
                                    <h3><u>نموذج بطاقة دورة علمية</u></h3>
                                </div>
                            </div>
                            <div class="row border m-1 p-1">
                                <div class="col-sm-3">
                                    <p>
                                        <strong>اسم الدورة :</strong>
                                        <span>عمر بن عبد العزيز</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نوع الدورة :</strong>
                                        <span>ضمن الخطة	</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نوع الشهادة : 	</strong>
                                        <span>اختبار</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>بداية الدورة : </strong>
                                        <span>01/03/2019</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>نهاية الدورة : </strong>
                                        <span>30/05/2019</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الطلاب : </strong>
                                        <span>100</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد الساعات : </strong>
                                        <span>60</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>وزن الدورة : </strong>
                                        <span>10</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>عدد النقاط : </strong>
                                        <span>60</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>مكان الدورة : </strong>
                                        <span>المسجد العمري	</span>
                                    </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>
                                        <strong>المنطقة : </strong>
                                        <span>غزة</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-sm">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>المنطقة</th>
                                            <th>المسجد</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>الشمال</td>
                                            <td>العمري</td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <td>محمد سعيد</td>
                                            <td>جنوب غزة</td>
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

                    <button type="button" class="btn btn-primary">
                        <i class="fa fa-save"></i>
                        حفظ
                    </button>
                    <a href="print_students_replacement.html" class="btn btn-warning">
                        <i class="fa fa-print"></i>
                        طباعة
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal viewCourse-->
@endsection

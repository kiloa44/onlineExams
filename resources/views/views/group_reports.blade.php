@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">التقارير الشهرية</h4>
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
                        <div id="pdf" class="card-body">
                            <div class="card-text">
                            </div>
                            <form class="form">
                                <div class="form-actions right">
                                    <button id="cmd" class="btn btn-warning mr-1" type="button"  data-toggle="modal"
                                            data-target="#newReport">
                                        <i class="ft-plus"></i>جديد
                                    </button>
                                </div>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>التقرير</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الحلقة  / المحفظ</th>
                                                        <th>تقرير شهر</th>
                                                        <th>المنطقة الكبرى</th>
                                                        <th>المطقة المحلية</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="col">2</th>
                                                        <td>محمد عبد الرحمن</td>
                                                        <td>الوسطى</td>
                                                        <td>دير البلح</td>
                                                        <td>03/2019 م</td>
                                                        <td>
                                                            <!--<div class="btn-group" role="group" aria-label="First Group">-->
                                                            <button type="button" class="btn btn-icon btn-light btn-sm" data-toggle="modal"
                                                                    data-target="#editReport" roleID="" onclick="editRole(this)"><i class="fa fa-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" roleID="" id="confirm-text" onclick="deleteItem(this)" ><i class="fa fa-trash"></i></button>
                                                            <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#viewReport" ><i class="fa fa-eye"></i></button>
                                                            <!--</div>-->
                                                        </td>
                                                    </tr>
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

    <!-- Modal newReport-->
    <div class="modal fade text-left" id="newReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة تقرير إنجاز</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-1">
                    <form class="form form-horizontal" method="post"  action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <style>

                                        </style>
                                        <table class="mb-2" style="width: 100%;">
                                            <tbody style="text-align: end;">
                                            <tr>
                                                <td colspan="7" style="text-align: start;">
                                                    دار القرآن الكريم والسنة -دائرة السنة النبوية
                                                </td>
                                                <td colspan="2">
                                                    شهر التقرير
                                                </td>
                                                <td colspan="2">
                                                    <input type="text" id="report_no" class="form-control square" name="report_no" placeholder="رقم التقرير" >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: start;">
                                                    التقرير الشهري لحلقات تحفيظ السنة النبوية
                                                </td>
                                                <td colspan="1">
                                                    رقم الجوال
                                                </td>
                                                <td colspan="1">
                                                    <input type="text" id="mobile_no" class="form-control square" name="mobile_no" placeholder="رقم الجوال" >
                                                </td>
                                                <td colspan="2">
                                                    المنطقة الكبرى
                                                </td>
                                                <td colspan="2">
                                                    <select id="branch_id" name="branch_id" class="form-control square">
                                                        <option value="">غزة</option>
                                                        <option value="">الشمال</option>
                                                        <option value="">الوسطى</option>
                                                        <option value="">الجنوب</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    اسم المحفظ رباعيًا
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                    </select>
                                                </td>
                                                <td colspan="1">
                                                    المسجد
                                                </td>
                                                <td colspan="1">
                                                    <select id="mosque_id" class="form-control square" name="mosque_id">
                                                        <option value="1">مسجد الفاتح</option>
                                                        <option value="2">مسجد صلاح الدين</option>
                                                        <option value="3">المسجد العمري</option>
                                                        <option value="4">المسجد الكبير</option>
                                                        <option value="5">مسجد يافا</option>
                                                        <option value="6">مسجد الشافعي</option>
                                                    </select>
                                                </td>
                                                <td colspan="2">
                                                    المنطقة المحلية
                                                </td>
                                                <td colspan="2">
                                                    <select id="local_area_id" class="form-control square" name="local_area_id">
                                                        <option value="1">معسكر جباليا</option>
                                                        <option value="2">معسكر الشاطئ</option>
                                                        <option value="3"> دير البلح</option>
                                                        <option value="4">المنطقة الرابع</option>
                                                        <option value="5">المنطقة الخامس</option>
                                                        <option value="6">المنطقة السادس</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    المشرف العام
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>

                                                    </select>
                                                </td>
                                                <td colspan="6"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table-bordered">
                                            <tbody style="text-align: center;">
                                            <tr>
                                                <td rowspan="3" style="width: 30px;">
                                                    م
                                                </td>
                                                <td rowspan="3" style="width: 200px;">
                                                    اسم الطالب رباعيا
                                                </td>
                                                <td rowspan="3" style="width: 120px;">
                                                    اسم الكتاب
                                                </td>
                                                <td colspan="4">
                                                    رقم الحديث
                                                </td>
                                                <td colspan="2">
                                                    الفئة
                                                </td>
                                                <td rowspan="3">
                                                    مجموع الحفظ الحالي
                                                </td>
                                                <td rowspan="3">
                                                    نسبة إنجاز خطة الطالب
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    الحفظ السابق
                                                </td>
                                                <td colspan="2">
                                                    الحفظ الحالي
                                                </td>
                                                <td rowspan="2">
                                                    السابقة
                                                </td>
                                                <td rowspan="2">
                                                    الحالية
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td><input type="text" id="" class="form-control square" name=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    نسبة انجاز خطة الحلقة
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="5" class="text-right">
                                                    <label for="">التقييم الشهري للحلقة</label>
                                                </td>
                                                <td colspan="6">
                                                    <input type="text" id="" class="form-control col-sm-8 square" name="" value="">
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="fa fa-save"></i> حفظ التقرير</button>
                    <button class="btn btn-primary"><i class="fa fa-file"></i> اعتماد التقرير</button>
                    <button type="button" class="btn btn-warning" ><i class="fa fa-print"></i> طباعة</button>
                    <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                           value="إغلاق">
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal newReport-->
    <!-- Modal editReport-->
    <div class="modal fade text-left" id="editReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل تقرير الانجاز</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-1">
                    <form class="form form-horizontal" method="post"  action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <style>

                                        </style>
                                        <table class="mb-2" style="width: 100%;">
                                            <tbody style="text-align: end;">
                                            <tr>
                                                <td colspan="7" style="text-align: start;">
                                                    دار القرآن الكريم والسنة -دائرة السنة النبوية
                                                </td>
                                                <td colspan="2">
                                                    رقم التقرير
                                                </td>
                                                <td colspan="2">
                                                    <input type="text" id="report_no" class="form-control square" name="report_no" placeholder="رقم التقرير" >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: start;">
                                                    التقرير الشهري لحلقات تحفيظ السنة النبوية
                                                </td>
                                                <td colspan="1">
                                                    رقم الجوال
                                                </td>
                                                <td colspan="1">
                                                    <input type="text" id="mobile_no" class="form-control square" name="mobile_no" placeholder="رقم الجوال" >
                                                </td>
                                                <td colspan="2">
                                                    الفرع
                                                </td>
                                                <td colspan="2">
                                                    <select id="branch_id" name="branch_id" class="form-control square">
                                                        <option value="">الفرع الاول</option>
                                                        <option value="">الفرع الثاني</option>
                                                        <option value="">الفرع الثالث</option>
                                                        <option value="">الفرع الرابع</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    اسم المحفظ رباعيًا
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                    </select>
                                                </td>
                                                <td colspan="1">
                                                    المسجد
                                                </td>
                                                <td colspan="1">
                                                    <select id="mosque_id" class="form-control square" name="mosque_id">
                                                        <option value="1">مسجد الفاتح</option>
                                                        <option value="2">مسجد صلاح الدين</option>
                                                        <option value="3">المسجد العمري</option>
                                                        <option value="4">المسجد الكبير</option>
                                                        <option value="5">مسجد يافا</option>
                                                        <option value="6">مسجد الشافعي</option>
                                                    </select>
                                                </td>
                                                <td colspan="2">
                                                    المنطقة
                                                </td>
                                                <td colspan="2">
                                                    <select id="local_area_id" class="form-control square" name="local_area_id">
                                                        <option value="1">المنطقة الاول</option>
                                                        <option value="2">المنطقة الثاني</option>
                                                        <option value="3"> المنطقة الثالث</option>
                                                        <option value="4">المنطقة الرابع</option>
                                                        <option value="5">المنطقة الخامس</option>
                                                        <option value="6">المنطقة السادس</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    المشرف العام
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>

                                                    </select>
                                                </td>
                                                <td colspan="6"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table-bordered">
                                            <tbody style="text-align: center;">
                                            <tr>
                                                <td rowspan="3" style="width: 30px;">
                                                    م
                                                </td>
                                                <td rowspan="3" style="width: 200px;">
                                                    اسم الطالب رباعيا
                                                </td>
                                                <td rowspan="3" style="width: 120px;">
                                                    اسم الكتاب
                                                </td>
                                                <td colspan="4">
                                                    رقم الحديث
                                                </td>
                                                <td colspan="2">
                                                    الفئة
                                                </td>
                                                <td rowspan="3">
                                                    مجموع الحفظ الحالي
                                                </td>
                                                <td rowspan="3">
                                                    نسبة إنجاز خطة الطالب
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    الحفظ السابق
                                                </td>
                                                <td colspan="2">
                                                    الحفظ الحالي
                                                </td>
                                                <td rowspan="2">
                                                    السابقة
                                                </td>
                                                <td rowspan="2">
                                                    الحالية
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    نسبة انجاز خطة الحلقة
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <!--<tr height="16" style="height:12.0pt">
                                                <td colspan="11" height="16" class="xl96" dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="22" style="height:16.5pt">
                                                <td colspan="11" height="22" class="xl90" dir="LTR" style="height:16.5pt">توصيات
                                                    المشرف العام</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">1</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">2</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">3</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="21" style="height:15.75pt">
                                                <td height="21" class="xl76" dir="LTR" style="height:15.75pt;border-top:none">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="22" style="height:16.5pt">
                                                <td colspan="3" height="22" class="xl90" dir="LTR" style="height:16.5pt">توقيع المحفظ</td>
                                                <td class="xl78" dir="LTR"></td>
                                                <td colspan="7" class="xl90" dir="LTR">توقيع المشرف العام</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="41" style="mso-height-source:userset;height:30.75pt">
                                                <td colspan="3" height="41" class="xl91" dir="LTR" style="height:30.75pt">&nbsp;</td>
                                                <td class="xl79" dir="LTR"></td>
                                                <td colspan="7" class="xl91" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="16" style="height:12.0pt">
                                                <td height="16"  dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="16" style="height:12.0pt">
                                                <td height="16"  dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="26" style="height:19.5pt">
                                                <td colspan="2" height="26" class="xl90" dir="LTR" style="height:19.5pt">موعد تسليم
                                                    التقرير</td>
                                                <td colspan="9" class="xl92" dir="LTR">.يتم تسليم التقرير الشهري في نهاية الشهر
                                                    الحالي أو في موعد أقصاه 3 من الشهرالتالي</td>
                                                <td  dir="LTR"></td>
                                            </tr>-->
                                            <!--[if supportMisalignedColumns]-->
                                            <!--<tr height="0" style="display:none">
                                                <td width="26" style="width:20pt"></td>
                                                <td width="179" style="width:134pt"></td>
                                                <td width="82" style="width:62pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="45" style="width:34pt"></td>
                                                <td width="50" style="width:38pt"></td>
                                                <td width="51" style="width:38pt"></td>
                                                <td width="64" style="width:48pt"></td>
                                                <td width="71" style="width:53pt"></td>
                                                <td width="179" style="width:134pt"></td>
                                            </tr>-->
                                            <!--[endif]-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="fa fa-save"></i> حفظ التقرير</button>
                    <button class="btn btn-primary"><i class="fa fa-file"></i> اعتماد التقرير</button>
                    <button type="button" class="btn btn-warning" ><i class="fa fa-print"></i> طباعة</button>
                    <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                           value="إغلاق">
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal editReport-->
    <!-- Modal viewReport-->
    <div class="modal fade text-left" id="viewReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض تقرير الانجاز</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-1">
                    <form class="form form-horizontal" method="post"  action="">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <style>

                                        </style>
                                        <table class="mb-2" style="width: 100%;">
                                            <tbody style="text-align: end;">
                                            <tr>
                                                <td colspan="7" style="text-align: start;">
                                                    دار القرآن الكريم والسنة -دائرة السنة النبوية
                                                </td>
                                                <td colspan="2">
                                                    رقم التقرير
                                                </td>
                                                <td colspan="2">
                                                    <input type="text" id="report_no" class="form-control square" name="report_no" placeholder="رقم التقرير" >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: start;">
                                                    التقرير الشهري لحلقات تحفيظ السنة النبوية
                                                </td>
                                                <td colspan="1">
                                                    رقم الجوال
                                                </td>
                                                <td colspan="1">
                                                    <input type="text" id="mobile_no" class="form-control square" name="mobile_no" placeholder="رقم الجوال" >
                                                </td>
                                                <td colspan="2">
                                                    الفرع
                                                </td>
                                                <td colspan="2">
                                                    <select id="branch_id" name="branch_id" class="form-control square">
                                                        <option value="">الفرع الاول</option>
                                                        <option value="">الفرع الثاني</option>
                                                        <option value="">الفرع الثالث</option>
                                                        <option value="">الفرع الرابع</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    اسم المحفظ رباعيًا
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                    </select>
                                                </td>
                                                <td colspan="1">
                                                    المسجد
                                                </td>
                                                <td colspan="1">
                                                    <select id="mosque_id" class="form-control square" name="mosque_id">
                                                        <option value="1">مسجد الفاتح</option>
                                                        <option value="2">مسجد صلاح الدين</option>
                                                        <option value="3">المسجد العمري</option>
                                                        <option value="4">المسجد الكبير</option>
                                                        <option value="5">مسجد يافا</option>
                                                        <option value="6">مسجد الشافعي</option>
                                                    </select>
                                                </td>
                                                <td colspan="2">
                                                    المنطقة
                                                </td>
                                                <td colspan="2">
                                                    <select id="local_area_id" class="form-control square" name="local_area_id">
                                                        <option value="1">المنطقة الاول</option>
                                                        <option value="2">المنطقة الثاني</option>
                                                        <option value="3"> المنطقة الثالث</option>
                                                        <option value="4">المنطقة الرابع</option>
                                                        <option value="5">المنطقة الخامس</option>
                                                        <option value="6">المنطقة السادس</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    المشرف العام
                                                </td>
                                                <td colspan="2">
                                                    <select id="teacher_id" class="select2 form-control square" name="teacher_id">
                                                        <option value="1">محمد محمود المحمود</option>
                                                        <option value="2">أحمد محمود محمد</option>
                                                        <option value="3">جميل جمال الجمال</option>
                                                        <option value="1">محمد محمود المحمود</option>

                                                    </select>
                                                </td>
                                                <td colspan="6"></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <table class="table-bordered">
                                            <tbody style="text-align: center;">
                                            <tr>
                                                <td rowspan="3" style="width: 30px;">
                                                    م
                                                </td>
                                                <td rowspan="3" style="width: 200px;">
                                                    اسم الطالب رباعيا
                                                </td>
                                                <td rowspan="3" style="width: 120px;">
                                                    اسم الكتاب
                                                </td>
                                                <td colspan="4">
                                                    رقم الحديث
                                                </td>
                                                <td colspan="2">
                                                    الفئة
                                                </td>
                                                <td rowspan="3">
                                                    مجموع الحفظ الحالي
                                                </td>
                                                <td rowspan="3">
                                                    نسبة إنجاز خطة الطالب
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    الحفظ السابق
                                                </td>
                                                <td colspan="2">
                                                    الحفظ الحالي
                                                </td>
                                                <td rowspan="2">
                                                    السابقة
                                                </td>
                                                <td rowspan="2">
                                                    الحالية
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                                <td width="60px">
                                                    من
                                                </td>
                                                <td width="60px">
                                                    إلى
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>محمد أحمد عبد الرحمن</td>
                                                <td>رياض الصالحين</td>
                                                <td>
                                                    <select class="form-control square previous_from" name="previous_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_to" name="previous_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_from" name="next_from[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square next_to" name="next_to[]">
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square previous_category" name="previous_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control square current_category" name="current_category[]">
                                                        <option value="">100</option>
                                                        <option value="">200</option>
                                                        <option value="">300</option>
                                                        <option value="">400</option>
                                                    </select>
                                                </td>
                                                <td>1</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td colspan="10">
                                                    نسبة انجاز خطة الحلقة
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <!--<tr height="16" style="height:12.0pt">
                                                <td colspan="11" height="16" class="xl96" dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="22" style="height:16.5pt">
                                                <td colspan="11" height="22" class="xl90" dir="LTR" style="height:16.5pt">توصيات
                                                    المشرف العام</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">1</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">2</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="27" style="height:20.25pt">
                                                <td height="27" class="xl68" dir="LTR" style="height:20.25pt;border-top:none">3</td>
                                                <td colspan="10" class="xl97" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="21" style="height:15.75pt">
                                                <td height="21" class="xl76" dir="LTR" style="height:15.75pt;border-top:none">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td class="xl77" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="22" style="height:16.5pt">
                                                <td colspan="3" height="22" class="xl90" dir="LTR" style="height:16.5pt">توقيع المحفظ</td>
                                                <td class="xl78" dir="LTR"></td>
                                                <td colspan="7" class="xl90" dir="LTR">توقيع المشرف العام</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="41" style="mso-height-source:userset;height:30.75pt">
                                                <td colspan="3" height="41" class="xl91" dir="LTR" style="height:30.75pt">&nbsp;</td>
                                                <td class="xl79" dir="LTR"></td>
                                                <td colspan="7" class="xl91" dir="LTR">&nbsp;</td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="16" style="height:12.0pt">
                                                <td height="16"  dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="16" style="height:12.0pt">
                                                <td height="16"  dir="LTR" style="height:12.0pt"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                                <td  dir="LTR"></td>
                                            </tr>
                                            <tr height="26" style="height:19.5pt">
                                                <td colspan="2" height="26" class="xl90" dir="LTR" style="height:19.5pt">موعد تسليم
                                                    التقرير</td>
                                                <td colspan="9" class="xl92" dir="LTR">.يتم تسليم التقرير الشهري في نهاية الشهر
                                                    الحالي أو في موعد أقصاه 3 من الشهرالتالي</td>
                                                <td  dir="LTR"></td>
                                            </tr>-->
                                            <!--[if supportMisalignedColumns]-->
                                            <!--<tr height="0" style="display:none">
                                                <td width="26" style="width:20pt"></td>
                                                <td width="179" style="width:134pt"></td>
                                                <td width="82" style="width:62pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="40" style="width:30pt"></td>
                                                <td width="45" style="width:34pt"></td>
                                                <td width="50" style="width:38pt"></td>
                                                <td width="51" style="width:38pt"></td>
                                                <td width="64" style="width:48pt"></td>
                                                <td width="71" style="width:53pt"></td>
                                                <td width="179" style="width:134pt"></td>
                                            </tr>-->
                                            <!--[endif]-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="fa fa-save"></i> حفظ التقرير</button>
                    <button class="btn btn-primary"><i class="fa fa-file"></i> اعتماد التقرير</button>
                    <button type="button" class="btn btn-warning" ><i class="fa fa-print"></i> طباعة</button>
                    <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                           value="إغلاق">
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal viewReport-->
    @endsection

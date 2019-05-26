@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">طلبات استبدال محفظين</h4>
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
                                        <i class="ft-plus"></i>طلب استبدال جديد
                                    </button>
                                </div>

                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>طلبات الاستبدال</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table id="tt" class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>تاريخ الطلب</th>
                                                        <th>اسم الطالب القديم</th>
                                                        <th>اسم الطالب الجديد</th>
                                                        <th>حالة الطلب</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($teacherReplacements as $index => $teacherReplacement)
                                                        <tr>
                                                            <th scope="col">{{ $index+1 }}</th>
                                                            <td>{{ $teacherReplacement->date }}</td>
                                                            <td>{{ $teacherReplacement->oldTeacher->name }}</td>
                                                            <td>{{ $teacherReplacement->newTeacher->name }}</td>
                                                            <td>{{ $teacherReplacement->status }}</td>
                                                            <td>
                                                                <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                                <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $teacherReplacement->id }}" onclick="editReplacementTeacher(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $teacherReplacement->id }}" id="confirm-text" onclick="deleteReplacementTeacher(this)" ><i class="fa fa-trash"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#newStudent" ><i class="fa fa-eye"></i></button>
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

    <!-- Modal newStudent-->
    <div class="modal fade text-left" id="newStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">طلب استبدال جديد</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addNewReplacmentStudent" action="#">
                    <div class="modal-body">
                        <div class="form-body" style="padding:30px;">

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
                                    <h3><u>نموذج استبدال محفظ</u></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>بيانات المحفظ القديم</u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="old_teacher_id" style="line-height: 40px;">الاسم رباعياً :</label>
                                <div class="col-sm-6">
                                    <select id="old_teacher_id" class="form-control select2" name="old_teacher_id" onchange="getTeacherInfo(this)">
                                        <option value="null">-- اختر المحفظ --</option>
                                        @foreach($teachers as $index => $teacher)
                                           @if($teacher->group) <option value="{{ $teacher->id }}">{{ $teacher->name }}</option> @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="old_student_identity_number" style="line-height: 40px;">رقم الهوية :  </label>
                                <div class="col-sm-1 text-right">
                                    <p class="old_student_identity_number">400198222</p>
                                </div>
                                <div class="offset-sm-4 col-sm-3 text-right">
                                    <!--<p>
                                            المسمى الموظيفي : محفظ سنة نبوية
                                    </p>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>بيانات المحفظ الجديد</u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="new_teacher_id" style="line-height: 40px;">الاسم رباعياً : </label>
                                <div class="col-sm-6">
                                    <select id="new_teacher_id" class="form-control select2" name="new_teacher_id" onchange="getTeacherInfo(this)">
                                        <option value="null">-- اختر المحفظ --</option>
                                        @foreach($teachers as $index => $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="new_student_identity_number" style="line-height: 40px;">رقم الهوية :  </label>
                                <div class="col-sm-1 text-right">
                                    <p class="new_student_identity_number">400198222</p>
                                </div>
                                <div class="offset-sm-4 col-sm-3 text-right">
                                    <!--<p>
                                            المسمى الموظيفي : محفظ سنة نبوية
                                    </p>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>أسباب الستبدال </u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="reasons_to_replace" name="reasons_to_replace" placeholder="أسباب الستبدال" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="date" style="line-height: 40px;">اعتماد الحلقة من </label>
                                <div class="col-sm-3">
                                    <input type="date" id="date" class="form-control" name="date">
                                </div>

                                <label class="col-md-2 label-control" for="teacher_id" style="line-height: 40px;">تاريخ الاستبدال </label>
                                <div class="col-sm-3">
                                    <input type="date" id="startof" class="form-control" name="startof" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="addNewReplacementTeacher()" ><i class="fa fa-save"></i> اعتماد</button>
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
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات استبدال محفظ</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editReplacmentStudent" action="#">
                    <div class="modal-body">
                        <div class="form-body" style="padding:30px;">

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
                                    <h3><u>نموذج استبدال محفظ</u></h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>بيانات المحفظ القديم</u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="old_teacher_id" style="line-height: 40px;">الاسم رباعياً :</label>
                                <div class="col-sm-6">
                                    <select id="old_teacher_id" class="form-control select2" name="old_teacher_id" onchange="getTeacherInfo(this)">
                                        <option value="null">-- اختر المحفظ --</option>
                                        @foreach($teachers as $index => $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="old_student_identity_number" style="line-height: 40px;">رقم الهوية :  </label>
                                <div class="col-sm-1 text-right">
                                    <p class="old_student_identity_number">400198222</p>
                                </div>
                                <div class="offset-sm-4 col-sm-3 text-right">
                                    <!--<p>
                                            المسمى الموظيفي : محفظ سنة نبوية
                                    </p>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>بيانات المحفظ الجديد</u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="new_teacher_id" style="line-height: 40px;">الاسم رباعياً : </label>
                                <div class="col-sm-6">
                                    <select id="new_teacher_id" class="form-control select2" name="new_teacher_id" onchange="getTeacherInfo(this)">
                                        <option value="null">-- اختر الطالب --</option>
                                        @foreach($teachers as $index => $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 label-control" for="new_student_identity_number" style="line-height: 40px;">رقم الهوية :  </label>
                                <div class="col-sm-1 text-right">
                                    <p class="new_student_identity_number">400198222</p>
                                </div>
                                <div class="offset-sm-4 col-sm-3 text-right">
                                    <!--<p>
                                            المسمى الموظيفي : محفظ سنة نبوية
                                    </p>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" style="background-color: #cccccc;">
                                    <h3><u>أسباب الاستبدال </u></h3>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="reasons_to_replace" name="reasons_to_replace" placeholder="أسباب الستبدال" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-2">

                                <label class="col-md-2 label-control" for="date" style="line-height: 40px;">اعتماد الحلقة من </label>
                                <div class="col-sm-3">
                                    <input type="date" id="date" class="form-control" name="date">
                                    <input type="hidden" id="id" class="form-control" name="id">
                                </div>

                                <label class="col-md-2 label-control" for="teacher_id" style="line-height: 40px;">تاريخ الاستبدال </label>
                                <div class="col-sm-3">
                                    <input type="date" id="startof" class="form-control" name="startof" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" ><i class="fa fa-save" onclick="saveReplacementTeacher()"></i> حفظ</button>
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
                                        <strong>رقم الجول: </strong>
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
                                        <strong>عدد الدورات المجتازة: </strong>
                                        <span>35</span>
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

    <script>

        function getTeacherInfo(item) {
            //console.log(item.value);
            axios({
                method:'GET',
                url:'{{ route("showTeacher") }}'+'/'+item.value,
                responseType:'json',
            }).then(function (response) {
                //console.log(response.data.data);
                if(item.id==='old_student_id')
                    $(".old_student_identity_number").text( response.data.data.identity_number )
                else
                    $(".new_student_identity_number").text( response.data.data.identity_number )
            }).catch(function (error) {
                console.log(error);
            });
        }

        function addNewReplacementTeacher() {

            var data=getFormData($("#form-addNewReplacmentStudent"));
            //console.log(data);
            axios({
                method:'post',
                url:'{{ route("addNewTeacherReplacement") }}',
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function editReplacementTeacher(item) {
            var id=$(item).attr('data-id');
            //console.log(id);
            axios({
                method:'GET',
                url:'{{ route("showTeacherReplacement") }}'+'/'+id,
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editStudent").modal('show');
                $('#editStudent #form-editReplacmentStudent #old_teacher_id').val(response.data.data.old_teacher_id).trigger('change');
                $('#editStudent #form-editReplacmentStudent #new_teacher_id').val(response.data.data.new_teacher_id).trigger('change');
                $("#editStudent #form-editReplacmentStudent #date").val(dateReformatting(response.data.data.date));
                $("#editStudent #form-editReplacmentStudent #id").val(response.data.data.id);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveReplacementTeacher() {
            var data=getFormData($("#form-editReplacmentStudent"));
            axios({
                method:'PUT',
                url:'{{ route("updateTeacherReplacement") }}'+'/'+data.id,
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

        function deleteReplacementTeacher(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
                url:'{{ route("deleteTeacherReplacement") }}'+'/'+id,
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
                    url: '{{ route('showQualification') }}'+'/'+item.value,
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

        function getMosqueByLocalAreaID(item) {
            //console.log(item);
            if (item) {
                axios({
                    method: 'get',
                    url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+item.value,
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
                    url: '{{ route('getMosqueByLocalAreaID') }}'+'/'+id,
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

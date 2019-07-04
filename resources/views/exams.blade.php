@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->

    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">عرض الامتحانات</h4>
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
                                            data-target="#newExam">
                                        <i class="ft-plus"></i>امتحان جديد
                                    </button>
                                </div>

                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>عرض الامتحانات</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الامتحان</th>
                                                        <th>المادة</th>
                                                        <th>تاريخ الصنع</th>
                                                        <th>صف الامتحان</th>
                                                        <th>اسم المعلم</th>
                                                        <th>تاريخ البداء</th>
                                                        <th>تاريخ الانتهاء</th>
{{--                                                        <th>الحلقة (المحفظ)</th>--}}
{{--                                                        <th>المشرف العام</th>--}}

                                                        <th>نتيجة الطالب</th>
{{--                                                        <th>المسجد</th>--}}

                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($exams as $index => $exam)
                                                    <tr>
                                                        <th scope="col">{{ $index+1 }}</th>
                                                        <td>{{ $exam->name }}</td>
                                                        <td>{{$exam->class_subject->subject->name}}</td>
                                                        <td>{{ date('d-M-y', strtotime($exam->created_at))}}</td>
                                                        <td>{{ $exam->class_subject->classroom->name}}</td>
                                                        <td>{{ $exam->teacher->user->name }}</td>
                                                        <td>{{ date('h:i:s', strtotime($exam->begin_at))}}</td>
                                                        <td>{{ date('h:i:s', strtotime($exam->end_at))}}</td>
                                                        <td>blank</td>
{{--                                                        <td>{{ $student->group->teacher->name }}</td>--}}
{{--                                                        <td>{{ $student->majorArea->name}}</td>--}}
{{--                                                        <td>{{ $student->localArea->name }}</td>--}}
{{--                                                        <td>{{ $student->mosque->name }}</td>--}}
{{--                                                        <td>{{ $student->updated_automatically_qualified== 1 ? "نشط" : "غير نشط" }}</td>--}}

                                                        <td>
                                                            <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                            <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $exam->id }}" onclick="editStudent(this)"><i class="fa fa-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $exam->id }}" id="confirm-text" onclick="deleteExam(this)" ><i class="fa fa-trash"></i></button>
                                                            <button type="button" class="btn btn-icon btn-info btn-sm" data-toggle="modal" data-target="#viewStudent" ><i class="fa fa-eye"></i></button>
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

        <!-- Modal newExam-->
        <div class="modal fade text-left" id="newExam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة امتحان جديد</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-addnewExam" action="#">
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">اسم الامتحان</label>
                                            <input type="text" id="name" class="form-control" placeholder="اسم الامتحان" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="classroom">صف الامتحان</label>
{{--                                            <input type="text" id="classroom" class="form-control" placeholder="صف الامتحان" name="classroom">--}}
                                            <div class="position-relative has-icon-left">
                                                <select id="classroom" class="form-control" name="classroom">
                                                    <option value="null">-- اختر الصف --</option>
                                                    @foreach($classrooms as $index => $classroom)
                                                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="teacher">اسم المعلم</label>
                                            <select id="teacher" class="form-control" name="teacher">
                                            @foreach($teachers as $index => $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subject">المادة</label>
{{--                                            <input type="text" id="subject" class="form-control" placeholder="المادة" name="subject">--}}
                                            <div class="position-relative has-icon-left">
                                                <select id="subject" class="form-control" name="subject" onchange="getQuestionsToSubject(this)">
                                                    <option value="null">-- اختر المادة --</option>
                                                    @foreach($subjects as $index => $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="questions">الأسئلة</label>
                                            <div id="questions" class="form-control container1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">ملحوظات</label>
                                            <textarea id="description" class="form-control" placeholder="الوصف" name="description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="addnewExam()"><i class="fa fa-save"></i> إضافة</button>
                            <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                                   value="إغلاق">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal newExam-->
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
                                            <label for="classroom">رقم الهوية</label>
                                            <input type="text" id="classroom" class="form-control" placeholder="رقم الهوية" name="classroom">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="teacher_name">تاريخ الميلاد</label>
                                            <input type="date" id="teacher_name" class="form-control" placeholder="تاريخ الميلاد" name="teacher_name">
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
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="questions">رقم هوية ولي الامر</label>--}}
{{--                                            <input type="text" id="questions1" class="form-control" placeholder="رقم هوية ولي الامر" name="questions">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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
                                            <label for="area_id">مكان السكن</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="area_id" class="form-control select2" name="area_id" onchange="getAreaByParentID(this)">
                                                    <option value="null">-- اختر مكان السكن --</option>
{{--                                                    @foreach($majorAreas as $index => $majorArea)--}}
{{--                                                        <option value="{{ $majorArea->id }}">{{ $majorArea->name }}</option>--}}
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
                    </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="saveStudent()"><i class="fa fa-save"></i> حفظ</button>
                            <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                                   value="إغلاق">
                        </div>
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
    <style>
        .container1 {width:390px; height: 100px; overflow-y: scroll}
    </style>
    <!-- Card sizing section end -->
    <script>



        function getStuff(list){
            var i =[];
            function recursion(list) {
                if(typeof list != 'string'){
                    return recursion(list[0]),i.push(list[list.length-1]);
                }
                else
                {
                    i.push(list);
                }
            }
            recursion(list);
            return i;
        }



        function addnewExam() {

            var data=getFormData($("#form-addnewExam"));
            var fields = $( ":input" ).serializeArray();
            var indexed_array = {};

            $.map(fields, function(item, index){
                if (item['name'] in indexed_array){

                    indexed_array[item['name']] =[indexed_array[item['name']],item['value']];
                }else{
                    indexed_array[item['name']] = item['value'];
                }
            });
            console.log(indexed_array['questions']);
            var questions = getStuff(indexed_array['questions']);
            console.log(questions);
            data.questions = questions;


            axios({
                method:'post',
                url:'{{route('exams.store')}}',
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
            }).catch(function (error) {
                console.log(error);
            });
        }

        //on Track
        function getQuestionsToSubject(select){
            var subject_id = select.value;
            var quesitons = $('#questions')[0];
            console.log(quesitons);
            axios({
                method:'GET',
                url:'api/SubQuestions'+'/'+subject_id,
                responseType:'json',
            }).then(function (response) {
                //success();
                console.log(response.data);
                questions.innerHTML='';
                response.data.forEach(function (question) {

                    var checkbox = document.createElement('input');
                    checkbox.type = "checkbox";
                    checkbox.name = "questions";
                    checkbox.value = question.id;
                    checkbox.id = question.id;

                    // creating label for checkbox
                    var label = document.createElement('label');
                    label.htmlFor = checkbox.id;

                    label.appendChild(document.createTextNode(question.text));
                    quesitons.appendChild(checkbox);
                    quesitons.appendChild(label);
                });
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
                $('#editStudent #form-editStudent #classroom').val(response.data.data.classroom).trigger('change');
                $("#editStudent #form-editStudent #teacher_name").val(dateReformatting(response.data.data.teacher_name));
                $("#editStudent #form-editStudent #mobile_number").val(response.data.data.mobile_number);
                $('#editStudent #form-editStudent #qualification_id').val(response.data.data.qualification.id).trigger('change');
                if(response.data.data.updated_automatically_qualified===1) $("#editGroup #form-editStudent #updated_automatically_qualified").iCheck('check');
                $("#editStudent #form-editStudent #guardian_name").val(response.data.data.guardian_name);
                $("#editStudent #form-editStudent #questions").val(response.data.data.questions);
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

        function deleteExam(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
                url:'{{url("exams")}}'+'/'+id,
                responseType:'json',
            }).then(function (response) {
                location.reload();
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
    @endsection

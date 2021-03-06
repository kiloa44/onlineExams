@extends('layouts.app')
@section('content')
    <style>
        .shrink_it{
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">عرض الأسئلة</h4>
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
                                            data-target="#newQuestion">
                                        <i class="ft-plus"></i>سؤال جديد
                                    </button>
                                </div>

                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>أسئلة</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="shrink_it">نص السؤال</th>
                                                        <th>نوع السؤال</th>
{{--                                                        <th>تاريخ الميلاد</th>--}}
{{--                                                        --}}{{--                                                        <th>الحلقة (المحفظ)</th>--}}
{{--                                                        --}}{{--                                                        <th>المشرف العام</th>--}}
{{--                                                        <th>مكان السكن</th>--}}
{{--                                                        <th>معدل الطالب</th>--}}
{{--                                                        --}}{{--                                                        <th>المسجد</th>--}}
{{--                                                        <th>حالة الطالب</th>--}}
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($questions as $index => $question)
                                                    <tr>
                                                        <th scope="col">{{ $index+1 }}</th>
                                                        <td class="shrink_it">{{ $question->text }}</td>
                                                        <td>{{ $question->type}}</td>
                                                        <td>
                                                            <!-- <div class="btn-group" role="group" aria-label="First Group">-->
                                                            <button type="button" class="btn btn-icon btn-light btn-sm" data-id="{{ $question->id }}" onclick="editQuestion(this)"><i class="fa fa-edit"></i></button>
                                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-id="{{ $question->id }}" id="confirm-text" onclick="deleteQuestion(this)" ><i class="fa fa-trash"></i></button>
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

        <!-- Modal newQuestion-->
        <div class="modal fade text-left" id="newQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة سؤال جديد</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-addQuestion" class="repeater" action="#">
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="text">نص السؤال</label>
                                            <input type="text" id="text" class="form-control" placeholder="نص السؤال" name="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="type">نوع السؤال</label>
                                            <input type="text" id="type" class="form-control" placeholder="نوع السؤال" name="type">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="correct_answer">الجواب الصحيح</label>
                                            <input type="text" id="correct_answer" class="form-control" placeholder="الجواب الصحيح" name="correct_answer">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subject">المادة</label>
                                            <div class="position-relative has-icon-left">
                                                <select id="subject" class="form-control" name="subject_id" onchange="getQuestionsToSubject(this)">
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

                                            <form class="">
                                                <label for="choices">خيارات السؤال</label>
                                                <div data-repeater-list="choices">
                                                    <div data-repeater-item>
                                                        <input type="text" name="text-input" value="A"/>
                                                        <input data-repeater-delete type="button" value="Delete"/>
                                                    </div>
                                                </div>
                                                <input data-repeater-create type="button" value="Add"/>
                                            </form>

                                            {{--                                            <input type="text" id="choices" class="form-control" placeholder="خيارات السؤال" name="choices">--}}
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addQuestion()"><i class="fa fa-save"></i> إضافة</button>
                    <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                           value="إغلاق">
                </div>
                </form>
            </div>
        </div>
        </div>
        <!-- End Modal newQuestion-->
        <!-- Modal editQuestion-->
        <div class="modal fade text-left" id="editQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات طالب</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-editQuestion" action="#">
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">نص السؤال</label>
                                            <input type="text" id="name" class="form-control" placeholder="نص السؤال" name="name">
                                            <input type="hidden" id="id" class="form-control" name="id">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="question_type">نوع السؤال</label>
                                            <input type="text" id="question_type" class="form-control" placeholder="نوع السؤال" name="question_type">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="choices">تاريخ الميلاد</label>
                                            <input type="date" id="choices" class="form-control" placeholder="تاريخ الميلاد" name="choices">
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
                                            <label for="guardian_question_type">رقم هوية ولي الامر</label>
                                            <input type="text" id="guardian_question_type" class="form-control" placeholder="رقم هوية ولي الامر" name="guardian_question_type">
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
                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <label for="local_area_id">المنطقة المحلية</label>--}}
                                    {{--                                            <div class="position-relative has-icon-left">--}}
                                    {{--                                                <select id="local_area_id" class="form-control select2 local_area_id" name="local_area_id" onchange="getMosqueByLocalAreaID(this)">--}}

                                    {{--                                                </select>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <label for="mosque_id">المسجد</label>--}}
                                    {{--                                            <div class="position-relative has-icon-left">--}}
                                    {{--                                                <select id="mosque_id" class="form-control mosque_id" name="mosque_id">--}}
                                    {{--                                                    <option value="1">مسجد الفاتح</option>--}}
                                    {{--                                                    <option value="2">مسجد صلاح الدين</option>--}}
                                    {{--                                                    <option value="3">المسجد العمري</option>--}}
                                    {{--                                                    <option value="4">المسجد الكبير</option>--}}
                                    {{--                                                    <option value="5">مسجد يافا</option>--}}
                                    {{--                                                    <option value="6">مسجد الشافعي</option>--}}
                                    {{--                                                </select>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="col-md-4">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <label for="group_id">الحلقة (المحفظ)</label>--}}
                                    {{--                                            <div class="position-relative has-icon-left">--}}
                                    {{--                                                <select id="group_id" class="form-control select2" name="group_id">--}}
                                    {{--                                                    <option value="null">-- اختر المحفظ --</option>--}}
                                    {{--                                                    @foreach($groups as $index => $group)--}}
                                    {{--                                                        <option value="{{ $group->id }}">{{ $group->teacher->name }}</option>--}}
                                    {{--                                                    @endforeach--}}
                                    {{--                                                </select>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
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
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="saveStudent()"><i class="fa fa-save"></i> حفظ</button>
                    <input type="reset" class="btn btn-secondary" data-dismiss="modal"
                           value="إغلاق">
                </div>
                </form>
            </div>
        </div>
        <!-- End Modal editQuestion-->
        
    </section>
    <!-- Card sizing section end -->
    <script>
        $(function () {
            $('.repeater').repeater({
                initEmpty: true,
                defaultValues: {
                    'text-input': 'foo'
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
                isFirstItemUndeletable: true
            });
        });


        function addQuestion() {
            var choices = {};
            var index = 0;
            var data=getFormData($("#form-addQuestion"));
            console.log("keys",Object.keys(data));
            Object.keys(data).forEach(function (key) {
                if(key.startsWith('choices')){
                    choices[index] = data[key];
                    index++;
                    delete data[key];
                }
            });
            data['choices'] = choices;
            console.log(data);
            axios({
                method:'post',
                url:'{{route('questions.store')}}',
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function editQuestion(item) {
            var id=$(item).attr('data-id');
            //console.log(id);
            axios({
                method:'GET',
                url:'localhost',

                {{--url:'{{ route("showStudent") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editQuestion").modal('show');
                $("#editQuestion #form-editQuestion #name").val(response.data.data.name);
                $('#editQuestion #form-editQuestion #question_type').val(response.data.data.question_type).trigger('change');
                $("#editQuestion #form-editQuestion #choices").val(dateReformatting(response.data.data.choices));
                $("#editQuestion #form-editQuestion #mobile_number").val(response.data.data.mobile_number);
                $('#editQuestion #form-editQuestion #qualification_id').val(response.data.data.qualification.id).trigger('change');
                if(response.data.data.updated_automatically_qualified===1) $("#editGroup #form-editQuestion #updated_automatically_qualified").iCheck('check');
                $("#editQuestion #form-editQuestion #guardian_name").val(response.data.data.guardian_name);
                $("#editQuestion #form-editQuestion #guardian_question_type").val(response.data.data.guardian_question_type);
                $("#editQuestion #form-editQuestion #guardian_mobile_number").val(response.data.data.guardian_mobile_number);
                $('#editQuestion #form-editQuestion #major_area_id').val(response.data.data.mosque.major_area_id).trigger('change');
                $('#editQuestion #form-editQuestion #local_area_id').val(response.data.data.mosque.local_area_id);
                getMosqueByLocalAreaID2(response.data.data.mosque.local_area_id);
                $('#editQuestion #form-editQuestion #mosque_id').val(response.data.data.mosque.id).trigger('change');
                $('#editQuestion #form-editQuestion #group_id').val(response.data.data.group_id).trigger('change');
                $('#editQuestion #form-editQuestion #notes').val(response.data.data.notes);
                $('#editQuestion #form-editQuestion #id').val(response.data.data.id);
                //$('#editQuestion #form-editGroup #supervisor_id').val(response.data.data.supervisor.id).trigger('change');
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveStudent() {
            var data=getFormData($("#form-editQuestion"));
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

        function deleteQuestion(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
                url:'{{url("questions")}}'+'/'+id,

                {{--url:'{{ route("deleteQuestion") }}'+'/'+id,--}}
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                location.reload();
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

@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">محاضر الإجتماعات</h4>
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

                            <form class="form">
                                <div class="form-body">
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-warning mr-1" data-toggle="modal"
                                                data-target="#newMeeting">
                                            <i class="ft-plus"></i> محضر إجتماع جديد
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>المحضر</th>
                                                        <th>نوع الاجتماع</th>
                                                        <th>التاريخ</th>
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($meetings as $index => $meeting)
                                                    <tr>
                                                        <th scope="col">{{ $index+1 }}</th>
                                                        <td>محضر اجتماع شهر {{ $meeting->date }}</td>
                                                        <td>{{ $meeting->meetingType->name }}</td>
                                                        <td>{{ $meeting->date }}</td>
                                                        <td>
                                                            <div class="btn-group-sm" role="group" aria-label="First Group">
                                                                <button type="button" class="btn btn-icon btn-light" data-id="{{ $meeting->id }}" onclick="editMeeting(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger" data-id="{{ $meeting->id }}" id="confirm-text" onclick="deleteMeeting(this)" ><i class="fa fa-trash"></i></button>
                                                                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#viewMeeting" ><i class="fa fa-eye"></i></button>
                                                            </div>
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
    <!-- Modal newMeeting-->
    <div class="modal fade text-left" id="newMeeting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة محضر إجتماع جديد</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addNewMeeting" action="{{ route('addNewMeeting') }}" method="post" enctype="text/plain">
                    @csrf
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="type_id">النوع</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="type_id" class="form-control" name="type_id">
                                                <option value="null">-- اختر النوع --</option>
                                                @foreach($meetingTypes as $meetingType)
                                                    <option value="{{ $meetingType->id }}">{{ $meetingType->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="day_id">اليوم</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="day_id" class="form-control" name="day_id">
                                                <option value="null">-- اختر اليوم --</option>
                                                @foreach($days as $day)
                                                    <option value="{{ $day->id }}">{{ $day->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">التاريخ</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="date" class="form-control" name="date">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="start_time">وقت البداية</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="start_time" class="form-control" name="start_time">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="end_time">وقت الانتهاء</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="end_time" class="form-control" name="end_time">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="number">رقم التقرير</label>
                                        <input type="text" id="number" class="form-control" name="number" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2 contact-repeater">
                                <div data-repeater-list="repeater-group">
                                    <div class="input-group mb-1" data-repeater-item>
                                        <input type="text" placeholder="اسم الحضور" class="form-control" id="attendees" name="attendees">
                                        <div class="input-group-append">
                                              <span class="input-group-btn ml-1" id="button-addon2">
                                                <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                              </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create class="btn btn-primary">
                                    <i class="icon-plus4"></i> جديد
                                </button>
                            </div>
                            <hr>
                            <div class="form-group mb-2 contact-repeater">
                                <div data-repeater-list="repeater-group">
                                    <div class="input-group mb-1" data-repeater-item>
                                        <input type="text" placeholder="اسم الغياب" class="form-control" id="absence" name="absence">
                                        <div class="input-group-append">
                                          <span class="input-group-btn ml-1" id="button-addon2">
                                            <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create class="btn btn-primary">
                                    <i class="icon-plus4"></i> جديد
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="record">المحضر</label>
                                <div class="position-relative has-icon-left">
                                    <textarea id="record" rows="10" class="form-control" name="record" placeholder="المحضر"></textarea>
                                    <div class="form-control-position">
                                        <i class="ft-file"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-md">إضافة</button>
                        <input type="reset" class="btn btn-secondary btn-md" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal newMeeting-->
    <!-- Modal editMeeting-->
    <div class="modal fade text-left" id="editMeeting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل محضر اجتماع شهر فبراير</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="meetingDay">اليوم</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="meetigDay" class="form-control" name="meetingDay">
                                                <option value="1">السبت</option>
                                                <option value="2">الاحد</option>
                                                <option value="3">الاثنين</option>
                                                <option value="4">الثلاثاء</option>
                                                <option value="5">الاربعاء</option>
                                                <option value="6">الخميس</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="meetingDate">التاريخ</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="meetingDate" class="form-control" name="meetingDate">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="meetingTime">الوقت</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="meetingTime" class="form-control" name="meetingTime">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2 contact-repeater">
                                <div data-repeater-list="repeater-group">
                                    <div class="input-group mb-1" data-repeater-item>
                                        <input type="text" placeholder="اسم الحضور" class="form-control" id="example-tel-input" name="example-tel-input">
                                        <div class="input-group-append">
                                                                                  <span class="input-group-btn ml-1" id="button-addon2">
                                                                                    <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                                                                  </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" data-repeater-create class="btn btn-primary">
                                    <i class="icon-plus4"></i> جديد
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="timesheetinput7">المحضر</label>
                                <div class="position-relative has-icon-left">
                                    <textarea id="timesheetinput7" rows="10" class="form-control" name="notes" placeholder="المحضر"></textarea>
                                    <div class="form-control-position">
                                        <i class="ft-file"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-md" >حفظ</button>
                        <input type="reset" class="btn btn-secondary btn-md" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal editMeeting-->
    <!-- Modal viewMeeting-->
    <div class="modal fade text-left" id="viewMeeting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">عرض محضر اجتماع شهر فبراير</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th>اليوم</th>
                                                <td>السبت</td>
                                                <th>التاريخ</th>
                                                <td>15/02/2019</td>
                                                <th>الساعة</th>
                                                <td>16:22 م</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">الحضور</th>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td colspan="5">محمد سعيد</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td colspan="5">محمد سعيد</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td colspan="5">محمد سعيد</td>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td colspan="5">محمد سعيد</td>
                                            </tr>

                                            <tr>
                                                <th colspan="6">المحضر</th>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="white-space:normal;">
                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                    في هذه المساحة سوف تتمكن من إضافة وتعديل محاضر الإجتماعات

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">التوصيات</th>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <ol>
                                                        <li>1</li>
                                                        <li>2</li>
                                                        <li>3</li>
                                                        <li>4</li>
                                                        <li>5</li>
                                                    </ol>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-md" >طباعة</button>
                        <input type="reset" class="btn btn-secondary btn-md" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal viewMeeting-->


    <script>
       /* function addNewMeeting() {

            var data=getFormData($("#form-addNewMeeting"));
           // console.log(data);
            axios({
                method:'post',
                url:'{{ route("addNewMeeting") }}',
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //location.reload();
                //console.log(response.data);
            }).catch(function (error) {
                swal("خطأ !", "يوجد خطأ في استرجاع البيانات ، حاول مرة اخرى", "error");
                //console.log(error);
            });
        }*/

        function editUser(item) {
            var id=$(item).attr('data-id');
            // console.log(id);
            axios({
                method:'GET',
                url:'{{ route("showUser") }}'+'/'+id,
                responseType:'json',
            }).then(function (response) {
                console.log(response.data);
                $("#editUser").modal('show');
                $("#editUser #form-editUser #name").val(response.data.data.name);
                $("#editUser #form-editUser #id").val(response.data.data.id);
                $("#editUser #form-editUser #identity_number").val(response.data.data.identity_number);
                $("#editUser #form-editUser #email").val(response.data.data.email);
                $("#editUser #form-editUser #mobile_number").val(response.data.data.mobile_number);
                $("#editUser #form-editUser #password").val(response.data.data.password);
                $('#editUser #form-editUser #roleName').val(response.data.data.roles[0].id).trigger('change');
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveUser() {
            var data=getFormData($("#form-editUser"));
            axios({
                method:'PUT',
                url:'{{ route("updateUser") }}'+'/'+data.id,
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

        function deleteUser(item) {
            var id=$(item).attr('data-id');

            axios({
                method:'DELETE',
                url:'{{ route("deleteUser") }}'+'/'+id,
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
    </script>
    @endsection

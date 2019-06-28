@extends('layouts.app')
@section('content')
    <!-- Card sizing section start -->
    <section id="sizing">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">مركز بيانات المستخدمين</h4>
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
                                <p class="card-text">
                                </p>
                            </div>
                            <form class="form">
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-warning mr-1" data-toggle="modal"
                                            data-target="#newUser">
                                        <i class="ft-plus"></i>مستخدم جديد
                                    </button>
                                </div>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-user"></i>بيانات المستخدمين</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-xs">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم المستخدم</th>
                                                        <th>مكان السكن</th>
{{--                                                        <th> المنطقة المحلية</th>--}}
                                                        <th>رقم الهوية</th>
                                                        <th>البريد الالكتروني</th>
                                                        <th>رقم الجوال</th>
{{--                                                        <th>المسمى الوظيفي</th>--}}
                                                        <th>خيارات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $index => $user)
                                                    <tr>
                                                        <th scope="col">{{ $index+1 }}</th>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->address }}</td>
{{--                                                        <td>@if($user->localArea){{ $user->localArea->parentArea->name }}@endif</td>--}}
{{--                                                        <td>@if($user->localArea){{ $user->localArea->name }}@endif</td>--}}
                                                        <td>{{ $user->identity_number }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->phone_number }}</td>
{{--                                                        <td>{{ $user->getRoles()->first()['description']}}</td>--}}
                                                        <td>
                                                            <div class="btn-group-sm" role="group" aria-label="First Group">
                                                                <button type="button" class="btn btn-icon btn-light" data-id="{{ $user->id }}" onclick="editUser(this)"><i class="fa fa-edit"></i></button>
                                                                <button type="button" class="btn btn-icon btn-danger" data-id="{{ $user->id }}" id="confirm-text" onclick="deleteUser(this)" ><i class="fa fa-trash"></i></button>
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
    <!-- Modal -->
    <div class="modal fade text-left" id="newUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">إضافة مستخدم جديد</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addNewUser" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">اسم مستخدم</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم مستخدم" name="name">
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
                                        <label for="email">البريد الالكتروني</label>
                                        <input type="email" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone_number">رقم الجوال</label>
                                        <input type="text" id="phone_number" class="form-control" placeholder="رقم الجوال" name="phone_number">
                                    </div>
                                </div>

                                 <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address">مكان السكن</label>
                                            <input type="text" id="address" class="form-control" placeholder="مكان السكن" name="address">

                                            {{--                                            <div class="position-relative has-icon-left">--}}
{{--                                                --}}
{{--                                                <select id="address" class="form-control" name="address" onchange="getAreaByParentID(this)">--}}
{{--                                                    <option value="1">-- اختر مكان السكن --</option>--}}
{{--                                                    @foreach($MajorAreas as $MajorArea)--}}
{{--                                                        <option value="{{ $MajorArea['id'] }}">{{ $MajorArea['name'] }}</option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
                                        </div>
                                  </div>
{{--                                  <div class="col-md-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="local_area_id">المنطقة المحلية</label>--}}
{{--                                            <div class="position-relative has-icon-left">--}}
{{--                                                <select id="local_area_id" class="form-control local_area_id" name="local_area_id" >--}}
{{--                                                    <option value="1">-- اختر المنطقة المحلية --</option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                   </div>--}}
{{--                              </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="password">كلمة المرور</label>--}}
{{--                                        <input type="password" id="password" class="form-control" placeholder="كلمة المرور" name="password">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="roleName">الدور</label>--}}
{{--                                        <div class="position-relative has-icon-left">--}}
{{--                                            <select id="roleName" class="form-control select2" name="roleName">--}}
{{--                                                <option value="null">-- اختر الدور --</option>--}}
{{--                                                @foreach($roles as $index => $role)--}}
{{--                                                <option value="{{ $role->id }}">{{ $role->description }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg"  onclick="addNewUser()">إضافة</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade text-left" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">تعديل بيانات المستخدم</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editUser" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">اسم مستخدم</label>
                                        <input type="text" id="name" class="form-control" placeholder="اسم مستخدم" name="name">
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
                                        <label for="email">البريد الالكتروني</label>
                                        <input type="email" id="email" class="form-control" placeholder="البريد الالكتروني" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone_number">رقم الجوال</label>
                                        <input type="text" id="phone_number" class="form-control" placeholder="رقم الجوال" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="area_id">مكان السكن</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="area_id" class="form-control" name="area_id" onchange="getAreaByParentID(this)">
                                                <option value="1">-- اختر مكان السكن --</option>
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
{{--                                            <select id="local_area_id" class="form-control local_area_id" name="local_area_id">--}}
{{--                                                <option value="1">-- اختر المنطقة المحلية --</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-md-4">--}}
{{--                                   <div class="form-group">--}}
{{--                                        <label for="password">كلمة المرور</label>--}}
{{--                                        <input type="password" id="password" class="form-control" placeholder="كلمة المرور" name="password">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="roleName">الدور</label>
                                        <div class="position-relative has-icon-left">
                                            <select id="roleName" class="form-control select2" name="roleName">
                                                <option value="null">-- اختر الدور --</option>
{{--                                                @foreach($roles as $index => $role)--}}
{{--                                                    <option value="{{ $role->id }}">{{ $role->description }}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg" onclick="saveUser()">حفظ</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="إغلاق">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script>
        function addNewUser() {

            var data=getFormData($("#form-addNewUser"));
            console.log(data);
            axios({
                method:'post',
                url:'{{ route("users.store") }}',
                responseType:'json',
                data:data
            }).then(function (response) {
                success();
                //console.log(response.data);
            }).catch(function (error) {
                console.log(error);
            });
        }

        function editUser(item) {
            var id=$(item).attr('data-id');
           // console.log(id);
            axios({
                method:'GET',
                url:'localhost',
{{--                url:'{{ route("showUser") }}'+'/'+id,--}}
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

                $("#editUser #form-editUser #major_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.major_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");

                $("#editUser #form-editUser #local_area_id").find('option').each(function (index, item) {
                    if(item.value===response.data.data.local_area.id){
                        item.setAttribute("selected", "selected");
                    }
                }).trigger("change");
            }).catch(function (error) {
                console.log(error);
            });
        }

        function saveUser() {
            var data=getFormData($("#form-editUser"));
            axios({
                method:'PUT',
                url:'localhost',
{{--                url:'{{ route("updateUser") }}'+'/'+data.id,--}}
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
                url:'{{url("users")}}'+'/'+id,
{{--                url:'{{ route("deleteUser") }}'+'/'+id,--}}
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

    </script>
    @endsection

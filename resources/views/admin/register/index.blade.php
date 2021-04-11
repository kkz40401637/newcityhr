
<?php echo View::make ('admin.admin-layouts.head'); ?>

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">


<body class="alt-menu ">
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">`
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<?php echo View::make ('admin.admin-layouts.header'); ?>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing data-out-put-div">

                <div class="page-header">
                    <div class="page-title">
                    <a href="{{route('UserAddForm')}}" class="d-inline btn btn-sm shadow-lg theme-bg theme-color "> ADD ACCOUNT + </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <h3 class="d-inline float-right" >USER INFORMATION</h3>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>  {{session('status')}} <strong style="color: red">123456</strong> ဖြစ်ပါသည်။ </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                @if (session('updsuccess'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <strong>  {{session('updsuccess')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">

                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAME</th>
                                            <th>PHONE</th>
                                            <th>EMAIL</th>
                                            <th>ROLE</th>
                                            <th>DATE</th>
                                            <th>DEPARTMENT</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                            <th>DETAILS</th>
                                            <th>PASSWORD</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($UserDb as $Index => $User)
                                            <input class=" d-none get-user-data{{$User->id}}" data-name="{{$User->name}}" data-phone="{{$User->phone}}" data-email="{{$User->email}}"
                                                   data-created-at="{{$User->created_at}}" data-updated-at="{{$User->updated_at->diffForHumans()}}" data-balance="{{$User->balance}}"
                                                   data-reg-id="{{$User->UserInfo->name}}" data-upd-id="{{$User->upd_id}}"  data-role-user="{{$User->role>=1?$User->UserRole->Name:$User->role}}">
                                            <tr class="tr-{{$User->id}} ">
                                                <td><b>{{$Index+1}}</b></td>
                                                <td><b>{{$User->name}}</b></td>
                                                <td><b>{{$User->phone}}</b></td>
                                                <td><b>{{$User->email}}</b></td>
                                                <td>
                                                    <span class="badge text-white badge-pills bg-warning">
                                                    {{$User->role>=1?$User->UserRole->Name:$User->role}}</span>
                                                </td>
                                                <td><b>{{$User->created_at->toDateString()}}</b></td>
                                                <td>
                                                    @if(empty($User->DepartmentInfo->Name))
                                                        <a class="btn btn-secondary position-relative " href="">
                                                            <i class="material-icons">add</i>
                                                        </a>
                                                    @else
                                                        <span class="badge text-white badge-pills  bg-dark">{{$User->DepartmentInfo->Name}}</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    <a class="btn btn-primary position-relative " href="">
                                                        <i class="material-icons ">edit</i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <button onclick="UserBanded({{$User->id}})" class="user-ban-btn{{$User->id}}  text-white btn bg-solid-red position-relative  ">
                                                        <i class="material-icons ">delete</i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <a onclick="UserDetails({{$User->id}})" class="btn btn-dark position-relative " data-toggle="modal" data-target="#BalanceRequestDetails">
                                                        <i class="material-icons ">remove_red_eye</i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form class="p-0 m-0" method="POST" action="{{ route('DefaultPassword',$User->id) }}"   enctype="multipart/form-data">
                                                        @csrf
                                                        @if(password_verify('123456', $User->password))
                                                            <span class="badge status-badge15 text-white shadow-lg badge-pills bg-success">
                                                            Default</span>
                                                        @else
                                                            <button type="submit" class="text-white btn btn-danger position-relative" >
                                                                <i class="material-icons ">lock_open</i>
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- BalanceRequestDetails -->
            <div class="modal fade" id="BalanceRequestDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header theme-bg">
                            <h5 class="d-inline theme-color model-user"> user </h5> <h5 class=" theme-color d-inline" > ၏ အချက်အလက်များ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons text-white" >clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                    <tr>
                                        <th>နာမည်</th>
                                        <th>ဖုန်းနံပတ်</th>
                                        <th>အီးမေးလ်</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="md-user-name">Shaun Park</td>
                                        <td class="md-user-phone">10/08/2019</td>
                                        <td class="md-user-email">320</td>
                                    </tr>
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th>လျှို့ဝှက်အိုင်ဒီ</th>
                                        <th>အမျိုးအစား</th>
                                        <th>ငွေပမာဏ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="md-user-serial-id"></td>
                                        <td class="md-user-role-user">10/08/2019</td>
                                        <td class="md-user-balance"></td>
                                    </tr>
                                    </tbody>

                                    <thead>
                                    <tr>
                                        <th>လက်ခံသူ</th>
                                        <th>နောက်ဆုံးပြုပြင်ထားသူ</th>
                                        <th>နောက်ဆုံး ပြုပြင်ထားချိန်</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="md-user-reg-id"></td>
                                        <td class="md-user-upd-id"></td>
                                        <td class="md-user-updated-at"></td>
                                    </tr>
                                    </tbody>

                                    </thead>

                                </table>
                            </div>
                        </div>
                        {{--                        <div class="modal-footer">--}}
                        {{--                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>--}}
                        {{--                            <button type="button" class="btn btn-primary">Save</button>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script src="{{asset('admin-assets/plugins/table/datatable/datatables.js')}}"></script>

<script>

        $( document ).ready(function() {

        c3 = $('#style-3').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 25, 50],
            "pageLength": 10
        });

        multiCheck(c3);

    });

    function UserDetails(id)
    {
        console.log('Mi ga lapar  -->  ' +id);
        let Name = $('.get-user-data'+id).attr('data-name');
        let Phone = $('.get-user-data'+id).attr('data-phone');
        let Email = $('.get-user-data'+id).attr('data-email');
        let Balance = $('.get-user-data'+id).attr('data-balance');
        let Created = $('.get-user-data'+id).attr('data-created-at');
        let Updated = $('.get-user-data'+id).attr('data-updated-at');
        let RegId = $('.get-user-data'+id).attr('data-reg-id');
        let UpdId = $('.get-user-data'+id).attr('data-upd-id');
        let SerialId = $('.get-user-data'+id).attr('data-serial-id');
        let RoleUser = $('.get-user-data'+id).attr('data-role-user');

        console.log(Name+'-'+Phone+'-'+Email+'-'+Balance+'-'+Created+'-'+Updated+'-'+RegId+'-'+UpdId+'_'+SerialId+'_'+RoleUser);
        $('.model-user').html( Name +' ');
        $('.md-user-name').html( Name);
        $('.md-user-phone').html( Phone);
        $('.md-user-email').html( Email);
        $('.md-user-balance').html( Balance);
        $('.md-user-created-at').html( Created);
        $('.md-user-updated-at').html( Updated);
        $('.md-user-reg-id').html( RegId);
        $('.md-user-upd-id').html( UpdId);
        $('.md-user-serial-id').html( SerialId);
        $('.md-user-role-user').html( RoleUser);

        console.log(' ******* ');
    }


    function UserBanded(id)
    {
        $('.user-ban-btn'+id).prop('disabled', true);
        console.log(id);
        $.post("{{route('UserStatusChange')}}",
            {
                _token: csrf_token,
                UserId: id
            },
            function(data){

                console.log(data);
                if (data.code == 200 )
                {
                    $('.tr-'+id).fadeOut("slow");
                }else if (data.code == 500){
                    $('.user-ban-btn'+id).prop('disabled', true);
                }else {
                    $('.user-ban-btn'+id).prop('disabled', true);
                    alert('Try again');
                }

            });

    }


</script>


</body>
</html>

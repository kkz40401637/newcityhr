
<link href="{{asset('admin-assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
<?php echo View::make ('admin.admin-layouts.head'); ?>
<style>
    .disabled-cursor{
        cursor: not-allowed !important;
        pointer-events: none;
    }
    .icon-theme-color{
        color: #302b63;
    }
</style>
<body class="alt-menu ">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<?php echo View::make ('admin.admin-layouts.header'); ?>
<div class="main-container sidebar-closed" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">

                <div class="col-sm-12 col-md-6 col-lg-4 layout-spacing">
                    <div class="card shadow-lg " style="border-radius: 13px 13px 0 0">
                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            CREATE ACCOUNT
                        </h5>
                        <div class="card-body form-permission " data-form-permission="0" >
                            <div class="form-group d-none animated zoomIn" id="global-error-div" >
                                <div class="alert alert-light-danger my-1" role="alert">
                                    <button type="button" class="close" data-dismiss="" aria-label="Close">
                                        <i onclick="CloseAlert()" class="material-icons text-danger">clear</i>
                                    </button>
                                    <strong>Danger !</strong><b id="global-error-txt"></b>
                                </div>
                            </div>
                            <form class="form-sample" method="POST" >
                                @csrf
{{--                                <p class="">NAME</p>--}}
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text icon-theme-color " id="basic-addon1">
                                            <i class="material-icons" >account_circle</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" autofocus="autofocus" id="Name" placeholder="NAME" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

{{--                                <p class="">PHONE</p>--}}
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                         <span class="input-group-text icon-theme-color " id="basic-addon1">
                                             <i class="material-icons" >perm_phone_msg</i>
                                         </span>
                                    </div>
                                    <input type="text" class="form-control" id="Phone" placeholder="PHONE" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

{{--                                <p class="">E - MAIL</p>--}}
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text icon-theme-color " id="basic-addon1">
                                            <i class="material-icons" >email</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="Email" placeholder="E - MAIL" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

{{--                                <p class="">PASSWORD</p>--}}
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text icon-theme-color " id="basic-addon1">
                                          <i class="material-icons" >enhanced_encryption</i>
                                      </span>
                                    </div>
                                    <input type="password" class="form-control" id="Password" placeholder="PASSWORD" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class=""> USER ROLE</p>
                                <select class="user-role mb-3">
                                    @foreach($UserRoles as $Index => $Role)
                                        <option class="role-id-{{$Role->id}}" value="{{$Role->id}}">{{$Role->Name }} &nbsp;</option>
                                    @endforeach
                                </select>
                                <p class=""> DEPARTMENT</p>
                                <div class="department-div">
                                    <select class="department mb-3">
                                        @foreach($DepartmentDb as $Index => $Department )
                                            <option value="{{$Department->id}}">{{$Department->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" onclick="SaveUserInfo()" class="btn  user-info-save-btn theme-bg theme-color mt-2 col-12">CREATE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">


                    <div class="card shadow-lg animated slideInRight" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            RECENTS REGISTRATION
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><div class="th-content">NO</div></th>
                                            <th><div class="th-content">NAME</div></th>
                                            <th><div class="th-content">PHONE</div></th>
                                            <th><div class="th-content">ROLE</div></th>
                                            <th><div class="th-content">EDIT</div></th>
                                            <th><div class="th-content">TIME</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($RecentUser as $Index =>  $user)

                                        <tr>
                                            <td><div class="td-content ">{{$Index+1}}</div></td>
                                            <td><div class="td-content ">{{$user->name}}</div></td>
                                            <td><div class="td-content">{{$user->phone}}</div></td>
                                            <td><div class="td-content">
                                                    <span class="badge text-white badge-pills p-2 bg-dark">
                                                    {{$user->UserRole->Name}}</span>
                                                </div></td>
                                            <td>
                                                <a href="" class="td-content ">
                                                    <span  class="badge badge-warning p-2 ">
                                                        <i class="material-icons">edit</i>
                                                    </span>
                                                </a>
                                            </td>
                                            <td><div class="td-content">{{$user->created_at->diffForHumans()}}</div></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>



    </div>
</div>

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>

<script src="{{asset('admin-assets/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/blockui/custom-blockui.js')}}"></script>

<script>

    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    var user_role = $(".user-role").select2();
    $('.department').select2();

    let UserAuthRole = $('.user-role').val();

    // if (parseInt(UserAuthRole) == 2)
    // {
    //     $('.department-div').addClass('d-none');
    // }

    let UserRoles = <?php echo $UserRoles; ?>;
    console.log(UserRoles);

    let ErrorReturn = { Errname:' Name length at least 3 characters',Errpassword: ' Password length must be 5 characters'
        ,Errphone:' Phone number at least 6 characters' ,ErrEmail: ' Email already exit ... '} ;


    const UiFun = (condition) =>
    {
        if(condition == true)
        {
            $('.user-info-save-btn').prop('disabled', true);
            $('.linear-activity').removeClass('d-none');
        }else {
            $('.user-info-save-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    }



    // $('.user-role').change(function (){
    //     let UserRole = $(this).val();
    //     if (parseInt(UserRole) == 2)
    //     {
    //         console.log('Hide ');
    //         $('.department-div').addClass('d-none');
    //     }else {
    //         $('.department-div').removeClass('d-none');
    //     }
    // });


    const SaveUserInfo = ()  =>
    {
        UiFun(true);
        let Name = $('#Name').val();
        let Phone = $('#Phone').val();
        let Email = $('#Email').val();
        let Password = $('#Password').val();
        let UserRole = $('.user-role').val();
        let DepartmentId = $(".department").val();
        let RoleName = $('.role-id-'+UserRole).html();

        console.log(RoleName);
        if (Name.length < 3 )
        {
            UiFun(false);
            SnackAlert( ErrorReturn.Errname,'white','#e7515a' );
        }else {
            if (Phone.length < 6){
                UiFun(false);
                SnackAlert( ErrorReturn.Errphone,'white','#e7515a' );
            }else{
                if (Password.length < 5){
                    UiFun(false);
                    SnackAlert( ErrorReturn.Errpassword,'white','#e7515a' );
                }else{

                    $.post("{{route('UserCreat')}}",
                        {
                            _token: csrf_token,
                            Name: Name,
                            Email: Email,
                            Phone: Phone,
                            Password: Password,
                            UserRole: UserRole,
                            DepartmentId: DepartmentId,

                        },
                        function(data){

                            if (data.code == 200)
                            {
                                $('input').val('');
                                UiFun(false);
                                SnackAlert(data.message,'white','#8dbf42');
                                $('tbody').prepend(`<tr class="animated slideInLeft" >
                                                    <td><div class="td-content ">No</div></td>
                                                    <td><div class="td-content ">${Name}</div></td>
                                                     <td><div class="td-content"> ${Phone} </div></td>
                                                     <td><div class="td-content"><span class="badge text-white badge-pills p-2 bg-dark ">${RoleName}</span></div></td>
                                                     <td><a href="" class="td-content "><span  class="badge badge-warning p-2 "><i class="material-icons">edit</i> </span>     </a> </td>
                                                     <td><div class="td-content">Today</div></td></tr>`);

                            }else if (data.code == 201)
                            {
                                UiFun(false);
                                SnackAlert(data.message,'white','#e7515a');
                            }else {
                                console.log(data);
                            }

                        });

                }


            }

        }

    }


    {{--let DepartmentDb = <?php echo $DepartmentDb; ?>;--}}
    {{--console.log(DepartmentDb);--}}

    {{--const DepartmentAddRoute = '{{route('AddDepartmentList')}}';--}}

    {{--if(DepartmentDb.length == 0  )--}}
    {{--{--}}
    {{--    SnackAlert( 'Please create department first ...','white','#e7515a' );--}}
    {{--    setTimeout(function(){ window.location.href = DepartmentAddRoute; }, 10000);--}}
    {{--}--}}



</script>

</body>
</html>

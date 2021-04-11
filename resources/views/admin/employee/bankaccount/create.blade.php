<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">
<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
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
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">

                <div class="col-sm-12 col-md-8 layout-spacing ">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW BANK ACCOUNT
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >

                            <form action="{{route('BankAccountSave')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('success')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>  {{session('error')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE ID </p>
                                        <div class="input-group my-2">
                                            <select name="EmployeeID" class="form-control EmployeeID" >
                                                @foreach ($EmployeeDb as $key => $Employee)
                                                    <option {{$Token==$Employee->Token?"selected":""}}  value="{{$Employee->id}}">{{$Employee->Name .' ( ID '. $Employee->No .' ) '}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">BANK NAME</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >account_balance</i>
                                            </span>
                                            </div>
                                            <input type="text" value="KBZ BANK"  class="form-control" name="BankName" id="BankName" value="{{ old('BankName ') }}" placeholder="BankName" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">BRANCH</p>
                                        <div class="input-group my-3">
                                            <select class="form-control BranchName" name="BranchName">
                                                @foreach ($StationDb as $key => $Station)
                                                    <option value="{{$Station->id}}">{{$Station->StationName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">BRANCH CODE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >edit</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="007"  class="form-control" name="BranchCode" id="BranchCode" value="{{ old('BranchCode') }}" placeholder="BranchCode" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ACCOUNT TITLE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >edit</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="CITY YANGON"  class="form-control" name="AccountTitle" id="AccountTitle" value="{{ old('AccountTitle') }}" placeholder="AccountTitle" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ACCOUNT NUMBER</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="9875487837"  class="form-control" name="AccountNumber" id="AccountNumber" value="{{ old('AccountNumber') }}" placeholder="AccountNumber" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ACCOUNT TYPE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >edit</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="GOLD"  class="form-control" name="AccountType" id="AccountType" value="{{ old('AccountType') }}" placeholder="AccountType" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">PAY ACCOUNT PHONE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="0958472542"  class="form-control" name="PayAccountPhoneNo" id="PayAccountPhoneNo" value="{{ old('PayAccountPhoneNo') }}" placeholder="PayAccountPhoneNo" >
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>

    $('.EmployeeID').select2();
    $('.BranchName').select2();

</script>

</body>



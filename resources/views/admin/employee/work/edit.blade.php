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
                            ADD NEW EMPLOYEE
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >

                            <form action="{{route('UpdateEmployeeWork')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="EmployeeWorkToken" value="{{$EmployeeWorkDb->Token}}">
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
                                        <div class="input-group my-2 ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeWorkDb->EmployeeID}}"  class="form-control" name="EmployeeID" id="EmployeeID" value="{{ old('EmployeeID') }}" placeholder="EMPLOYEE ID" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ORGANIZATIONNAME</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >rotate_90_degrees_ccw</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeWorkDb->OrganizationName}}"  class="form-control" name="OrganizationName" id="OrganizationName" placeholder="ORGANIZATIONNAME" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOBDESIGNATION</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeWorkDb->JobDesignation}}"  class="form-control" name="JobDesignation" id="JobDesignation" value="{{ old('JobDesignation') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JobField</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeWorkDb->JobField}}"  class="form-control" name="JobField" id="JobField" value="{{ old('JobField ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOBSTART DATE</p>
                                        <div class="input-group my-3">
                                            <input id="JobStartDate" name="JobStartDate" value="{{$EmployeeWorkDb->JobStartDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="JobStartDate..">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOBEND DATE</p>
                                        <div class="input-group my-3">
                                            <input id="JobEndDate" name="JobEndDate" value="{{$EmployeeWorkDb->JobEndDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="JobEndDate..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">STARTINGSALARY</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeWorkDb->StartingSalary}}"  class="form-control" name="StartingSalary" id="StartingSalary" value="{{ old('StartingSalary') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ENDINGSALARY</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeWorkDb->EndingSalary}}"  class="form-control" name="EndingSalary" id="EndingSalary" value="{{ old('EndingSalary ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">TYPEOFBUSINESS</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeWorkDb->TypeOfBusiness}}"  class="form-control" name="TypeOfBusiness" id="TypeOfBusiness" value="{{ old('TypeOfBusiness') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">OTHERBENEFIT</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeWorkDb->OtherBenefit}}"  class="form-control" name="OtherBenefit" id="OtherBenefit" value="{{ old('OtherBenefit') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">REASONFORLEAVING</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeWorkDb->ReasonForLeaving}}"  class="form-control" name="ReasonForLeaving" id="ReasonForLeaving" value="{{ old('ReasonForLeaving') }}" placeholder="REASONFORLEAVING" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">PERIOD</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeWorkDb->Period}}"  class="form-control" name="Period" id="Period" value="{{ old('Period') }}" placeholder="Period" >
                                        </div>
                                    </div>
                                </div>

                                <p>JOBDESCRIPTION</p>
                                <textarea id="JobDescription" name="JobDescription" class="form-control JobDescription"  rows="10" cols="80">{{$EmployeeWorkDb->JobDescription}}</textarea>

                                <button type="submit" class="btn  theme-bg theme-color mt-2 col-12">SAVE</button><br>

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
<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>

    $(document).ready(function(){

        var StartDate = flatpickr(document.getElementById('JobStartDate'));

        var StartDate = flatpickr(document.getElementById('JobEndDate'));

        CKEDITOR.replace( 'JobDescription');

    });


</script>

</body>



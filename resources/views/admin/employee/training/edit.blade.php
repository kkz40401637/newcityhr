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
                            ADD NEW TRAINING
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >

                            <form action="{{route('UpdateTraining')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="TrainingToken" value="{{$EmployeeTrainingDb->Token}}">
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
                                <p class="my-3 d-inline">TRAINING TITLE<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">edit</i>
                                            </span>
                                    </div>
                                    <input  type="text" value="{{$EmployeeTrainingDb->TrainingTitle}}"  class="form-control" name="TrainingTitle" id="TrainingTitle" value="{{ old('TrainingTitle') }}" placeholder="TrainingTitle" >
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE ID </p>
                                        <div class="input-group my-2">
                                            <select name="EmployeeID" class="form-control EmployeeID">
                                                <option>{{$EmployeeTrainingDb->EmployeeID}}</option>
                                                @foreach ($EmployeeDb as $key => $Employee)
                                                    <option value="{{$Employee->No}}">{{$Employee->No}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOBFIELD</p>
                                        <div class="input-group my-2">
                                            <select name="JobField" class="form-control JobField">
                                                <option>{{$EmployeeTrainingDb->JobField}}</option>
                                                @foreach ($EmployeeDb as $key => $Employee)
                                                    <option value="{{$Employee->JobField}}">{{$Employee->JobField}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ORGANIZATION NAME</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >drive_file_rename_outline</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeTrainingDb->OrganizationName}}"  class="form-control" name="OrganizationName" id="OrganizationName" value="{{ old('OrganizationName ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">LOCATION</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >map</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeTrainingDb->Location}}"  class="form-control" name="Location" id="Location" value="{{ old('Location') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">TrainingStartDate</p>
                                        <div class="input-group my-3">
                                            <input id="TrainingStartDate" name="TrainingStartDate" value="{{$EmployeeTrainingDb->TrainingStartDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="TrainingStartDate..">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">TrainingEndDate</p>
                                        <div class="input-group my-3">
                                            <input id="TrainingEndDate" name="TrainingEndDate" value="{{$EmployeeTrainingDb->TrainingEndDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="TrainingEndDate..">
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
<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>
    var StartDate = flatpickr(document.getElementById('TrainingStartDate'));

    var StartDate = flatpickr(document.getElementById('TrainingEndDate'));

    $('.EmployeeID').select2();
    $('.JobField').select2();


</script>

</body>



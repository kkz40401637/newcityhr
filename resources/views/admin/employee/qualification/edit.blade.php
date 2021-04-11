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

                            <form action="{{route('UpdateEmployeeQualification')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" name="EmployeeQualificationToken" value="{{$EmployeeQualification->Token}}">
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
                                            <select name="EmployeeID" class="form-control EmployeeID">
                                                @foreach ($EmployeeID as $key => $Employee)
                                                    <option>{{$EmployeeQualification->EmployeeID}}</option>
                                                    <option value="{{$Employee->No}}">{{$Employee->No}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">DEGREE</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >rotate_90_degrees_ccw</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeQualification->Degree}}"  class="form-control" name="Degree" id="Degree" placeholder="DEGREE" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">SUBJECT</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >subject</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="{{$EmployeeQualification->Subject}}"  class="form-control" name="Subject" id="Subject" value="{{ old('Subject') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">INSTITUTE</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeQualification->Institute}}"  class="form-control" name="Institute" id="Institute" value="{{ old('Institute ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">GRADE</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Grade" name="Grade">
                                                <option>{{$EmployeeQualification->Grade}}</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">GraduationYear</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$EmployeeQualification->GraduationYear}}"  class="form-control" name="GraduationYear" id="GraduationYear" value="{{ old('GraduationYear ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">FROM YEAR</p>
                                        <div class="input-group my-3">
                                            <input id="FromYear" name="FromYear" value="{{$EmployeeQualification->FromYear}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="FROM YEAR..">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">TO YEAR</p>
                                        <div class="input-group my-3">
                                            <input id="ToYear" name="ToYear" value="{{$EmployeeQualification->ToYear}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="TO YEAR..">
                                        </div>
                                    </div>
                                </div>

                                <p>ATTACHEDFILE UPLOAD</p>
                                <div class="custom-file mb-4">
                                    <input type="file" name="AttachedFile" class=" bg-primary custom-file-input" >
                                    <label class="custom-file-label" for="customFile">Choose file</label>
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

    var StartDate = flatpickr(document.getElementById('FromYear'));

    var StartDate = flatpickr(document.getElementById('ToYear'));
    $('.EmployeeID').select2();

</script>

</body>



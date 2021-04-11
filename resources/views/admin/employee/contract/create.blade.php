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
                            ADD NEW CONTRACT
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >

                            <form action="{{route('EmployeeContractSave')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
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
                                        <p class="">CONTRACT ID</p>
                                        <div class="input-group my-2 ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="4567"  class="form-control" name="ContractID" id="ContractID" value="{{ old('ContractID') }}" placeholder="EMPLOYEE ID" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE NAME</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >edit</i>
                                                </span>
                                            </div>
                                            <input type="text" value="AungMyo"  class="form-control" name="EmployeeName" id="EmployeeName" placeholder="EmployeeName" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE ID </p>
                                        <div class="input-group my-2">
                                            <select name="EmployeeID" class="form-control EmployeeID" >
                                                    @foreach ($EmployeeID as $key => $Employee)
                                                        <option value="{{$Employee->id}}">{{$Employee->Name .' ( ID '. $Employee->No .' ) '}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CONTRACT TYPE</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >rotate_90_degrees_ccw</i>
                                                </span>
                                            </div>
                                            <input type="text" value="Software"  class="form-control" name="ContractType" id="ContractType" placeholder="ContractType" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CONTRACT TITLE</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="Myanmar"  class="form-control" name="ContractTitle" id="ContractTitle" value="{{ old('ContractTitle') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEEDESIGNATION</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="aung"  class="form-control" name="EmployeeDesignation" id="EmployeeDesignation" value="{{ old('EmployeeDesignation ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CONTRACTSTART DATE</p>
                                        <div class="input-group my-3">
                                            <input id="ContractStartDate" name="ContractStartDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="ContractStartDate..">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CONTRACTEND DATE</p>
                                        <div class="input-group my-3">
                                            <input id="ContractEndDate" name="ContractEndDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="ContractEndDate..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE TYPE</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="SSS"  class="form-control" name="EmployeeType" id="EmployeeType" value="{{ old('EmployeeType') }}" placeholder="SUBJECT" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE CATEGORY</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="Category"  class="form-control" name="EmployeeCategory" id="EmployeeCategory" value="{{ old('EmployeeCategory ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">ApprovedDate</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >edit</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="Travel"  class="form-control" name="ApprovedDate" id="ApprovedDate" value="{{ old('ApprovedDate') }}" placeholder="REASONFORLEAVING" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">Department</p>
                                        <div class="input-group my-2">
                                            <select name="Department" class="form-control Department" >
                                                @foreach($DepartmentDb as $Index => $Department)
                                                    <option {{$Department->id==auth()->user()->department_id?"selected":''}} value="{{$Department->id}}" >{{$Department->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EMPLOYEE GRADE</p>
                                        <div class="">
                                            <select class="form-control EmployeeGrade" name="EmployeeGrade">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">BRANCH</p>
                                        <div class="input-group my-2">
                                            <select class="form-control Branch  basic" name="Branch" >
                                                @foreach ($Stations as $key => $Station)
                                                    <option value="{{$Station->StationName}}">{{$Station->StationName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CreatedBy</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >notes</i>
                                            </span>
                                            </div>
                                            <input type="text" value="HOLIDAYS"  class="form-control" name="CreatedBy" id="CreatedBy" value="{{ old('CreatedBy') }}" placeholder="Period" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">CreatedDate</p>
                                        <div class="input-group my-2">
                                            <input id="CreatedDate" name="CreatedDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="CreatedDate..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <p class="">ApprovedPerson</p>
                                        <div class="input-group mt-3 " >
                                            <b class="StationError d-none text-danger">CHOICE APPROVE ....</b>
                                            <select class="form-control ApprovedPerson" name="ApprovedPerson">
                                                @foreach($UserDb as $Index => $User)
                                                    <option value="{{$User->name}}" >{{$User->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <p>AdditionalNote</p>
                                <textarea id="AdditionalNote" name="AdditionalNote" class="form-control"  rows="10" cols="80">AdditionalNote</textarea>

                                <p>ContractDescription</p>
                                <textarea id="ContractDescription" name="ContractDescription" class="form-control ContractDescription"  rows="10" cols="80">This is my textarea to be replaced with CKEditor 4.</textarea>

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
</div>
<!-- END MAIN CONTAINER -->
<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>

    $(document).ready(function(){
        var StartDate = flatpickr(document.getElementById('ContractStartDate'));
        var StartDate = flatpickr(document.getElementById('ContractEndDate'));
        var StartDate = flatpickr(document.getElementById('CreatedDate'));

        CKEDITOR.replace( 'ContractDescription');

        $('.Branch').select2();
        $('.EmployeeGrade').select2();
        $('.ApprovedPerson').select2();
        $('.Department').select2();
        $('.Branch').select2();
        $('.EmployeeID').select2();

    });


</script>

</body>



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
                            UPDATE EMPLOYEE
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >

                            <form id="employee-info-saving" enctype="multipart/form-data" class="form-sample" method="POST"  >
                                @csrf
                                <input type="hidden" name="EmployeeToken" value="{{$Employee->Token}}">
                                <p>Click To Chose Employee Photo</p>
                                <center>
                                    <img src="{{empty($Employee->Profile)?asset('admin-assets/img/employee/original').'/employee.png':asset('admin-assets/img/employee/').'/'.$Employee->Profile}}"
                                        style="height: 150px; width: 150px; " id="DisplayImageTag" alt="">
                                </center>

                                <input class="btn btn-dark p-0 m-0"  type="file" name="image" id="FileInputVal" style="visibility: hidden;" />
                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">EMPLOYEE NO.</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >business</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" value="{{$Employee->No}}" autofocus="autofocus"  name="No" id="No " placeholder="EMPLOYEE NO." aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">EMPLOYEE NAME</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >drive_file_rename_outline</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" value="{{$Employee->Name}}"  name="Name" id="Name" placeholder="EMPLOYEE NAME" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">EMPLOYEE NAME ( မြန်မာ )</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >business</i>
                                                </span>
                                            </div>
                                            <input type="text"  class="form-control" value="{{$Employee->NameMM}}" autofocus="autofocus"  name="NameMM" id="NameMM " placeholder="အမည်" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">CARD ID</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="{{$Employee->CardId}}" class="form-control"  name="CardId" id="CardId" placeholder="CARD ID" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">EMPLOYEE TYPE</p>
                                        <div class="input-group my-3">
                                            <select class="form-control EmployeeType" name="Type">
                                                <option>{{$Employee->Type}}</option>
                                                <option>Contract</option>
                                                <option>Regular</option>
                                                <option>Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">POSITION LEVEL</p>
                                        <div class="input-group my-3">
                                            <select class="form-control PositionLevel" name="PositionLevel">
                                                <option>{{$Employee->PositionLevel}}</option>
                                                <option>Department Head</option>
                                                <option>Section Head</option>
                                                <option>Team Leader</option>
                                                <option>Senior Staff</option>
                                                <option>Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">JOB FIELD</p>
                                        <div class="input-group my-3">
                                            <select name="JobField" class="form-control JobField" >
                                                <option>{{$Employee->JobField}}</option>
                                                <option>Administration</option>
                                                <option>Audit</option>
                                                <option>Education & Training</option>
                                                <option>Information Technology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">JOB STATUS</p>
                                        <div class="input-group my-3">
                                            <select class="form-control JobStatus" name="JobStatus">
                                                <option>{{$Employee->JobStatus}}</option>
                                                <option>Permanent</option>
                                                <option>Pre-Parmanent</option>
                                                <option>Probation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">DESIGNATION</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Designation" name="Designation">
                                                <option>{{$Employee->Designation}}</option>
                                                <option>Senior Accountant</option>
                                                <option>Senior Developer</option>
                                                <option>System Analysis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">GRADE</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Grade" name="Grade">
                                                <option>{{$Employee->Grade}}</option>
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
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">WAGE TYPE</p>
                                        <div class="input-group my-3">
                                            <select class="form-control WageType" name="WageType">
                                                <option>{{$Employee->WageType}}</option>
                                                <option>Dayly Salary Structure</option>
                                                <option>Hourly Salary Structure</option>
                                                <option>Monthly Salary Structure</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">WORKSHIFT</p>
                                        <div class="input-group my-3">
                                            <select class="form-control WorkShift" name="WorkShift">
                                                <option>{{$Employee->WorkShift}}</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">JOIN DATE</p>
                                        <div class="input-group my-3">
                                            <input id="JoinDate" name="JoinDate" value="{{$Employee->JoinDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Join Date..">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Is Workschedule Person </p><hr>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="Workschedule" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="Workschedule" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">RESON TO JOIN</p>
                                        <div class="input-group my-3">
                                            <input type="text" value="{{$Employee->ResontoJoin}}" class="form-control"  name="ResontoJoin" id="ResontoJoin" placeholder="RESON TO JOIN" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">MOBILE PHONE NUMBER</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >phone</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->PhoneNumber}}" class="form-control"  name="PhoneNumber" id="PhoneNumber" placeholder="MOBILE PHONE NUMBER" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <hr><b>Office Info</b><br>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">SECTION</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Section" name="Section">
                                                <opti>{{$Employee->Section}}</opti>
                                                <option>Software Section</option>
                                                <option>Hardware</option>
                                                <option>Account</option>
                                                <option>Store</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">DEPARTMENT</p>
                                        <div class="input-group my-3">
                                            <select name="Department" class="form-control Department">
                                                <option>{{$Employee->Department}}</option>
                                                <option>IT</option>
                                                <option>Administration</option>
                                                <option>Finance & Account</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">BUSINESS UNIT </p>
                                        <div class="input-group my-3">
                                            <select class="form-control BusinessUnit" name="BusinessUnit">
                                                <option>{{$Employee->BusinessUnit}}</option>
                                                <option>Corporate Supporting</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">STATION</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Station" name="Station">
                                                <option>{{$Employee->Station}}</option>
                                                <option>Yangon Head Oﬃce</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">OFFICE EMAIL </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >email</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->OfficeEmail}}" class="form-control"  name="OfficeEmail" id="OfficeEmail" placeholder="OFFICE EMAIL" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">REPORT TO</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >report</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->ReportTo}}" class="form-control"  name="ReportTo" id="ReportTo" placeholder="REPORT TO" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Notification by Email </p><hr>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="NotificationEmail" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="NotificationEmail" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">OFFICE PHONE NUMBER</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >phone</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->OfficePhone}}" class="form-control"  name="OfficePhone" id="OfficePhone" placeholder="OFFICE PHONE NUMBER" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <hr><b>Personal Info</b>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">DATE OF BIRTH</p>
                                        <div class="input-group my-3">
                                            <input id="DateOfBirth" name="DateOfBirth" value="{{$Employee->DateOfBirth}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Join Date..">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Birth of Place</p>
                                        <div class="input-group my-3">
                                            <input id="BirthOfPlace" name="BirthOfPlace" value="{{$Employee->BirthOfPlace}}" class="form-control" type="text" placeholder="Birth of Place..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Gender </p>
                                        <div class="input-group my-3">
                                            <select class="form-control" name="Gender">
                                                <option>{{$Employee->Gender}}</option>
                                                <option value="Male" >Male</option>
                                                <option value="Female" >Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Marital Status</p>
                                        <div class="input-group my-3">
                                            <select name="MaritalStatus" class="form-control MaritalStatus" >
                                                <option>{{$Employee->MaritalStatus}}</option>
                                                <option value="Single" >Single</option>
                                                <option value="Engaged" >Engaged</option>
                                                <option value="Married" >Married</option>
                                                <option value="In a civil union" >In a civil union</option>
                                                <option value="In a domestic partnership" >In a domestic partnership</option>
                                                <option value="In an open relationship" >In an open relationship</option>
                                                <option value="It's complicated" >It's complicated</option>
                                                <option value="Separated" >Separated</option>
                                                <option value="Divorced" >Divorced</option>
                                                <option value="Widowed" >Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Blood Group  </p>
                                        <div class="input-group my-3">
                                            <select class="form-control BloodGroup" name="BloodGroup">
                                                <option>{{$Employee->BloodGroup}}</option>
                                                <option value="A" >A</option>
                                                <option value="B" >B</option>
                                                <option value="O" >O</option>
                                                <option value="A+B" >A+B</option>
                                                <option value="A+" >A+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Date Of Marriage</p>
                                        <div class="input-group my-3">
                                            <input id="DateMarriage" name="DateMarriage" value="{{$Employee->DateMarriage}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Join Date..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">Nationality</p>
                                        <div class="input-group my-3">
                                            <select class="form-control Nationality" name="Nationality">
                                                <option>{{$Employee->Nationality}}</option>
                                                <option value="Myanmar" >Myanmar</option>
                                                <option value="English" >English</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">RELIGION  </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >how_to_reg</i>
                                            </span>
                                            </div>
                                            <input type="text" value="{{$Employee->Religion}}" class="form-control" name="Religion"  placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Race </p>
                                        <div class="input-group my-3">
                                            <select class="form-control Race" name="Race">
                                                <option value="Bamar" >Bamar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Personal Email </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >email</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->personalEmail}}" class="form-control"  name="personalEmail" id="personalEmail" placeholder="PersonalEmail" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">NRC Number  </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >assessment</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->NrcNumber}}" class="form-control"  name="NrcNumber" id="NrcNumber" placeholder="NRC Number " aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">NRC ( မြန်မာ ) </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->NrcNumberMM}}" class="form-control"  name="NrcNumberMM" id="NrcNumberMM" placeholder="Passport Number" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2">Passport Number<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">format_list_numbered_rtl</i>
                                        </span>
                                    </div>
                                    <input type="text" value="{{$Employee->PassportNumber}}" class="form-control Initial" name="PassportNumber" id="PassportNumber" placeholder="PassportNumber" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Passport Expiration</p>
                                        <div class="input-group my-3">
                                            <input id="PassportExpiration" name="PassportExpiration" value="{{$Employee->PassportExpiration}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="PassportExpiration..">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Driving License Expiration</p>
                                        <div class="input-group my-3">
                                            <input id="DrivingLicenseExpiration" name="DrivingLicenseExpiration" value="{{$Employee->DrivingLicenseExpiration}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="DrivingLicenseExpiration..">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Have Driving License </p><hr>
                                        <div class="row my-12">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="HaveDrivingLicense" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="HaveDrivingLicense" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Driving License Number</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="DrivingLicenseNumber" value="{{$Employee->DrivingLicenseNumber}}" id="DrivingLicenseNumber" placeholder="Driving License Number" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <b>Other Info</b>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Strong Point</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >center_focus_strong</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="StrongPoint" value="{{$Employee->StrongPoint}}" id="StrongPoint" placeholder="Strong Point" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Weak Point</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">hdr_weak</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="WeakPoint" id="WeakPoint" value="{{$Employee->WeakPoint}}" placeholder="Weak Point" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Have Fatal Accident</p><hr>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="HaveFatalAccident" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="HaveFatalAccident" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Fatal Accident Description</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="FatalAccidentDescription" id="FatalAccidentDescription" value="{{$Employee->FatalAccidentDescription}}" placeholder="Fatal Accident Description" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Have Major Surgery </p><hr>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="HaveMajorSurgery" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="HaveMajorSurgery" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Major Surgery Description</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="MajorSurgeryDescription " id="MajorSurgeryDescription" value="{{$Employee->MajorSurgeryDescription}}" placeholder="Major Surgery Description" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Have Hospitalization </p><hr>
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="Yes" name="MajorSurgeryDescription" checked>
                                                        <span class="new-control-indicator"></span>Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" class="new-control-input" value="No" name="MajorSurgeryDescription" checked>
                                                        <span class="new-control-indicator"></span>No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Hospitalization Description</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >local_hospital</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="HospitalizationDescription" id="HospitalizationDescription" value="{{$Employee->HospitalizationDescription}}" placeholder="Hospitalization Description" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Current Address</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->CurrentAddress}}" class="form-control"  name="CurrentAddress" id="CurrentAddress" placeholder="Current Address" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Current Address ( မြန်မာ )</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->CurrentAddressMM}}" class="form-control"  name="CurrentAddressMM" id="CurrentAddressMM" placeholder="လက်ရှိလိပ်စာ" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Permanent Address</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >gps_fixed</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->PermanentAddress}}" class="form-control"  name="PermanentAddress" id="PermanentAddress" placeholder="Current Address" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">Permanent Address ( မြန်မာ )</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >gps_fixed</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$Employee->PermanentAddressMM}}" class="form-control"  name="PermanentAddressMM" id="PermanentAddressMM" placeholder="အမြဲတမ်းလိပ်စာ" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">DISC Type</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >format_list_numbered_rtl</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="DiscType" id="DiscType" value="{{$Employee->DiscType}}" placeholder="DISC Type" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">DISC Test Date</p>
                                        <div class="input-group my-3">
                                            <input id="DiscTestDate" name="DiscTestDate" value="{{$Employee->DiscTestDate}}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="DiscTestDate..">
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2">Additional Information</p>
                                <div class="input-group my-3">
                                    <textarea name="Information" id="Information" class="form-control" placeholder="Additional Information" >{{$Employee->Information}}</textarea>
                                </div>

                                <button type="submit" class="btn save-employee-info-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

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

    let upload =$('#FileInputVal');
    $("#DisplayImageTag").on('click',function () {
        upload.click();
    });
    upload.on("change",function (e) {
        for (let i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            let file = e.originalEvent.srcElement.files[i];
            let reader = new FileReader();
            reader.onloadend = function() {
                $("#DisplayImageTag").attr("src","");
                $("#DisplayImageTag").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
        $('#FileChange').attr('value',1);
    });

    $('.EmployeeType').select2();
    $('.JobFieldType').select2();
    $('.Position').select2();
    $('.Designation').select2();
    $('.JobStatus').select2();
    $('.WageType').select2();
    $('.Grade').select2();
    $('.WorkShift').select2();
    $('.Section').select2();
    $('.Department').select2();
    $('.BusinessUnit').select2();
    $('.Station').select2();
    $('.BloodGroup').select2();
    $('.JobField').select2();
    $('.PositionLevel').select2();
    $('.MaritalStatus').select2();

    var StartDate = flatpickr(document.getElementById('JoinDate'));

    var StartDate = flatpickr(document.getElementById('DateOfBirth'));

    var StartDate = flatpickr(document.getElementById('DateMarriage'));

    var StartDate = flatpickr(document.getElementById('PassportExpiration'));

    var StartDate = flatpickr(document.getElementById('DrivingLicenseExpiration'));

    var StartDate = flatpickr(document.getElementById('DiscTestDate'));


    const GetInputVal = () =>
    {
        // let Name = $('#Name').val();
        let No = $('#NO').val();
        let Name = $('#Name').val();
        let NameMM = $('#NameMM').val();
        let Type = $('#Type').val();
        let CardId = $('#CardId').val();
        let JobField = $('#JobField').val();
        let PositionLevel = $('#PositionLevel').val();
        let Designation = $('#Designation').val();
        let JobStatus = $('#JobStatus').val();
        let WageType = $('#WageType').val();
        let Grade = $('#Grade').val();
        let JoinDate = $('#JoinDate').val();
        let WorkShift = $('#WorkShift').val();
        let Workschedule = $('#Workschedule').val();
        let ResontoJoin = $('#ResontoJoin').val();
        let PhoneNumber = $('#PhoneNumber').val();
        let Section = $('#Section').val();
        let Department = $('#Department').val();
        let BusinessUnit = $('#BusinessUnit').val();
        let Station = $('#Station').val();
        let OfficeEmail = $('#OfficeEmail').val();
        let ReportTo = $('#ReportTo').val();
        let NotificationEmail = $('#NotificationEmail').val();
        let OfficePhone = $('#OfficePhone').val();
        let DateOfBirth = $('#DateOfBirth').val();
        let BirthOfPlace = $('#BirthOfPlace').val();
        let Gender = $('#Gender').val();
        let MaritalStatus = $('#MaritalStatus').val();
        let BloodGroup = $('#BloodGroup').val();
        let DateMarriage = $('#DateMarriage').val();
        let Nationality = $('#Nationality').val();
        let Religion = $('#Religion').val();
        let Race = $('#Race').val();
        let personalEmail = $('#personalEmail').val();
        let NrcNumber = $('#NrcNumber').val();
        let NrcNumberMM = $('#NrcNumberMM').val();
        let PassportNumber = $('#PassportNumber').val();
        let PassportExpiration = $('#PassportExpiration').val();
        let DrivingLicenseExpiration = $('#DrivingLicenseExpiration').val();
        let HaveDrivingLicense = $('#HaveDrivingLicense').val();
        let DrivingLicenseNumber = $('#DrivingLicenseNumber').val();
        let StrongPoint = $('#StrongPoint').val();
        let WeakPoint = $('#WeakPoint').val();
        let HaveFatalAccident = $('#HaveFatalAccident').val();
        let FatalAccidentDescription = $('#FatalAccidentDescription').val();
        let HaveMajorSurgery = $('#HaveMajorSurgery').val();
        let MajorSurgeryDescription = $('#MajorSurgeryDescription').val();
        let HaveHospitalization = $('#HaveHospitalization').val();
        let HospitalizationDescription = $('#HospitalizationDescription').val();
        let CurrentAddress = $('#CurrentAddress').val();
        let CurrentAddressMM = $('#CurrentAddressMM').val();
        let PermanentAddress = $('#PermanentAddress').val();
        let PermanentAddressMM = $('#PermanentAddressMM').val();
        let DiscType = $('#DiscType').val();
        let DiscTestDate = $('#DiscTestDate').val();
        let Information = $('#Information').val();
        let EmployeeToken = "{{$Employee->Token}}";

        return  InputVal = {
            'No':No,'Name':Name,'NameMM':NameMM,'Type':Type,'CardId':CardId,'JobField':JobField,
            'PositionLevel':PositionLevel,'Designation':Designation,'JobStatus':JobStatus,'WageType':WageType,
            'Grade':Grade,'JoinDate':JoinDate,'WorkShift':WorkShift,'Workschedule':Workschedule,'ResontoJoin':ResontoJoin,
            'PhoneNumber':PhoneNumber,'Section':Section,'Department':Department,'BusinessUnit':BusinessUnit,
            'Station':Station,'OfficeEmail':OfficeEmail,'ReportTo':ReportTo,'NotificationEmail':NotificationEmail,
            'OfficePhone':OfficePhone,'DateOfBirth':DateOfBirth,'BirthOfPlace':BirthOfPlace,
            'Gender':Gender,'MaritalStatus':MaritalStatus,'BloodGroup':BloodGroup,'DateMarriage':DateMarriage,
            'Nationality':Nationality,'Religion':Religion,'Race':Race,
            'personalEmail':personalEmail,'NrcNumber':NrcNumber,'NrcNumberMM':NrcNumberMM,'PassportNumber':PassportNumber,'PassportExpiration':PassportExpiration,
            'DrivingLicenseExpiration':DrivingLicenseExpiration,'HaveDrivingLicense':HaveDrivingLicense,'DrivingLicenseNumber':DrivingLicenseNumber,
            'StrongPoint':StrongPoint,'WeakPoint':WeakPoint,'HaveFatalAccident':HaveFatalAccident,
            'FatalAccidentDescription':FatalAccidentDescription,'HaveMajorSurgery':HaveMajorSurgery,'MajorSurgeryDescription':MajorSurgeryDescription,
            'HaveHospitalization':HaveHospitalization,'HospitalizationDescription':HospitalizationDescription,'CurrentAddress':CurrentAddress,
            'CurrentAddressMM':CurrentAddressMM,'PermanentAddress':PermanentAddress,'PermanentAddressMM':PermanentAddressMM,'DiscType':DiscType,'DiscTestDate':DiscTestDate,'Information':Information,};
    }


    const OriginalPicSrc = '{{asset('admin-assets/img/employee/original/employee.png')}}';

    const UiFun = (condition) =>
    {
        if(condition == true)
        {
            $('.save-employee-info-btn').prop('disabled', true);
            $('.linear-activity').removeClass('d-none');
        }else {
            $('.save-employee-info-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    }


    $('#employee-info-saving').submit(function(e)
    {
        // $('.save-employee-info-btn').prop('disabled', true);
        e.preventDefault();
        const InputVal = GetInputVal();
        if (navigator.onLine)
        {
            UiFun(true);
            let AllFormData = new FormData(this);
            $.ajax({
                type:'POST',
                _token: csrf_token,
                url: "{{route('UpdateEmployee')}}",
                data:new FormData(this),
                InputVal: InputVal,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    if(data.code == 200)
                    {

                        SnackAlert(data.message,'white','#8dbf42');
                        $('input').val('');
                        $('textarea').val('');
                        $('#DisplayImageTag').attr('src',OriginalPicSrc);
                        // $('.save-employee-info-btn').prop('disabled', false);
                        UiFun(false);

                    }else{
                        UiFun(false);
                        SnackAlert(data.message,'white','#e2a03f');
                    }
                }
            });

        }else {
            SnackAlert('Check you are internet connection ... ','white','#e7515a');
            UiFun(false);
        }

    });

</script>
</body>
</html>



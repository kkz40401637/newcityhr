<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

{{--<!-- BEGIN THEME GLOBAL STYLES -->--}}
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
{{--<link href="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">--}}
{{--<!-- END THEME GLOBAL STYLES -->--}}
{{--<!--  BEGIN CUSTOM STYLE FILE  -->--}}
<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
{{--<!--  END CUSTOM STYLE FILE  -->--}}

{{--<link rel="stylesheet" href="{{asset('admin-assets/plugins/editors/markdown/simplemde.min.css')}}">--}}

<style>
    #cke_26{
        display: none !important;
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

                <div class="col-sm-12 col-md-7 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW JOB
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <form action="{{route('JobRequestEdit',$FetchOne->Token)}}" class="form-sample" method="POST" enctype="multipart/form-data" >
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
                                <input type="hidden" name="JobReqId" value="{{$FetchOne->id}}" />
                                <p class="my-2 d-inline">TITLE<p>@error('Title') <p class="text-danger d-inline" > MUST BE FILL</p> @enderror
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" value="{{$FetchOne->Title}}" class="form-control Title" name="Title" placeholder="TITLE" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class="my-2 d-inline">POSITION<p> @error('Position') <p class="text-danger d-inline" > MUST BE FILL</p> @enderror
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">hail</i>
                                        </span>
                                    </div>
                                    <input type="text" value="{{$FetchOne->Position}}" class="form-control Position" name="Position" placeholder="POSITION" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class="my-2">LOCATION<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">location_on</i>
                                        </span>
                                    </div>
                                    <input type="text" value="{{$FetchOne->Location}}" class="form-control Location" name="Location" placeholder="LOCATION" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">SALART RANGE ( FROM )<p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">attach_money</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$FetchOne->RangeFrom}}" class="form-control RangeFrom" name="RangeFrom" placeholder="SALART RANGE ( FROM )">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">SALART RANGE ( TO )<p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">attach_money</i>
                                                    </span>
                                            </div>
                                            <input type="text" value="{{$FetchOne->RangeTo}}" class="form-control RangeFrom" name="RangeTo" placeholder="SALART RANGE ( TO )">
                                        </div>
                                    </div>
                                </div>

                                <p class="">FOR DEPARTMENT<p>
                                <div class="input-group " >
                                    <select name="DepartmentID" class="form-control Department" >
                                        @foreach($DepartmentDb as $Index => $Department)
                                            <option {{$Department->id==$FetchOne->DepartmentID?"selected":''}} value="{{$Department->id}}" >{{$Department->Name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <p class="">APPROVAL REQUEST TO THIS PERSON<p>
                                <div class="input-group mt-3 " >
                                    <b class="StationError d-none text-danger">CHOICE USER ....</b>
                                    <select class="form-control ApprovalId" name="ApprovalId"  >
                                        @foreach($UserDb as $Index => $User)
                                            <option {{$Department->id==$FetchOne->ApprovalId?"selected":''}} value="{{$User->id}}" >{{$User->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="input-group ">DUE DATE</p>
                                        <div class="form-group mb-0">
                                            <input value="{{$FetchOne->DueDate}}" name="DueDate" id="DueDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Due Date">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="input-group ">Employee Type</p>
                                        <div class="input-group mb-3 " >
                                            <select name="EmployeeType" class="form-control EmployeeType" >

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">WORKING EXPERIENCE<p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">hail</i>
                                                </span>
                                            </div>
                                            <input type="text" value="{{$FetchOne->Experience}}" class="form-control Experience" name="Experience" placeholder="WORKING EXPERIENCE">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">NUMBER OF REQUIREMENT</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">format_list_numbered</i>
                                                </span>
                                            </div>
                                            <input required type="number" value="{{$FetchOne->NumberOfEmplyoee}}" class="form-control" name="NumberOfEmplyoee" placeholder="WORKING EXPERIENCE">
                                        </div>
                                    </div>
                                </div>

                                <p >EDUCATIONAL QUALIFICATION</p><br>
                                <div class="row qualification-row">

                                </div><br>

                                <p style="color:blue;">Other Requirement</p><br>
                                <p class="my-2">Gender</p>
                                <div class="row my-3">
                                    @php $GenderArr = json_decode($FetchOne->Gender); @endphp
                                    <div class="col-6">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text">
                                                    <input type="checkbox" {{in_array('Male',$GenderArr)?'checked':''}} name="Gender[]" value="Male"  class="new-control-input  ">
                                                    <span class="new-control-indicator"></span><span class="new-chk-content">Male</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text">
                                                    <input type="checkbox" {{in_array('Female',$GenderArr)?'checked':''}} name="Gender[]" value="Female"  class="new-control-input  ">
                                                    <span class="new-control-indicator"></span><span class="new-chk-content">Female</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                                <p class="">Driving License</p>--}}
{{--                                <div class="row my-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="n-chk">--}}
{{--                                            <label class="new-control new-radio radio-primary">--}}
{{--                                                <input type="radio" class="new-control-input" value="{{$FetchOne->}}" name="DrivingLicense" >--}}
{{--                                                <span class="new-control-indicator"></span>Needed--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="n-chk">--}}
{{--                                            <label class="new-control new-radio radio-primary">--}}
{{--                                                <input type="radio" class="new-control-input" value="{{$FetchOne->}}" name="DrivingLicense" checked>--}}
{{--                                                <span class="new-control-indicator"></span>No Need--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><br>--}}

                                <textarea id="Description" name="Description" class="form-control Description"  rows="10" cols="80">{{$FetchOne->Description}}</textarea>

                                <button type="submit" class="btn save-meeting-btn theme-bg theme-color mt-3 col-12">SAVE</button><br>
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
<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>


    $(".Department").select2();
    $('.EmployeeType').select2();
    $('.ApprovalId').select2();
    $(document).ready(function(){

        var f2 = flatpickr(document.getElementById('DueDate'), {
            enableTime: true,
            dateFormat: "Y-m-d",
        });

        CKEDITOR.replace( 'Description');

    });

    let Qualification = ['Basic Education','Certificate','Under Graduate','Diploma','Bachelor Degree','Master Degree'];
    let EmplyoeeTypeArr = ['Full Time','Work From Home','Part Time','Fullstack','Contract'];
    let EType = '{{$FetchOne->EmployeeType}}';

    let OrigianlQualification = '<?php print_r($FetchOne->qualification); ?>';
    let OrigianlGender = '<?php print_r($FetchOne->Gender); ?>';
    console.log(OrigianlQualification);

    for (var q=0 ; q<Qualification.length; q++)
    {
        $(`.qualification-row`).append(`<div class="col-sm-12 col-md-4">
                            <div class="n-chk">
                                <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text">
                                    <input type="checkbox" name="qualification[]" ${OrigianlQualification.includes(Qualification[q])==true ?'checked':''} value="${Qualification[q]}"  class="new-control-input">
                                    <span class="new-control-indicator"></span><span class="new-chk-content">${Qualification[q]}</span>
                                </label>
                            </div>
                        </div>`);
    }


    for (var e=0 ; e<EmplyoeeTypeArr.length; e++)
    {
        // console.log(EmplyoeeTypeArr[e]);
        $(`.EmployeeType`).append(`<option ${EmplyoeeTypeArr[e]==EType?"selected":''}
                                value="${EmplyoeeTypeArr[e]}" >${EmplyoeeTypeArr[e]}</option>`);
    }

</script>
</body>
</html>

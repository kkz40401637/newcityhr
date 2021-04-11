<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

{{--<!-- BEGIN THEME GLOBAL STYLES -->--}}
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
{{--<link href="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">--}}
{{--<!-- END THEME GLOBAL STYLES -->--}}
{{--<!--  BEGIN CUSTOM STYLE FILE  -->--}}
{{--<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">--}}
{{--<link href="{{asset('admin-assets/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">--}}
{{--<link href="{{asset('admin-assets/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">--}}
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
                            ADD NEW MEETING
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <form action="{{route('CreateMeeting')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
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

                                <p class="my-2">TITLE<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" value="Company Event" class="form-control Title" name="Title" placeholder="TITLE" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class="my-2">TYPE<p>
                                <div class="input-group ">
                                    <select class="form-control  Types" name="Types">
                                        <option value="regular" >REGULAR</option>
                                        <option value="custom" >CUSTOM</option>
                                    </select>
                                </div>

                                <div class="DepartmentDiv">
                                    <p class="">DEPARTMENT<p>
                                    <div class="input-group mt-3 " >
                                        <b class="StationError d-none text-danger">CHOICE DEPARTMENT ....</b>
                                        <select name="DepartmentID[]" class="form-control DepartmentID" multiple="multiple" >
                                            @foreach($DepartmentDb as $Index => $Department)
                                                <option value="{{$Department->id}}" >{{$Department->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="CustomDiv">
                                    <p class="">USER<p>
                                    <div class="input-group mt-3 " >
                                        <b class="CustomDivError d-none text-danger">CHOICE USER ..</b>
                                        <select name="CustomUser[]" class="form-control DepartmentID" multiple="multiple" >
                                            @foreach($UserDb as $Index => $User)
                                                <option value="{{$User->id}}" >{{$User->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <p class="">LOCATION<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">location_on</i>
                                        </span>
                                    </div>
                                    <input type="text" value="Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it." class="form-control Location" name="Location" placeholder="LOCATION" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">START TIMESTEMP</p>
                                        <div class="form-group mb-0">
                                            <input name="StartTimestemp" id="StartTimestemp" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Start Timestemp">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">END TIMESTEMP</p>
                                        <div class="form-group mb-0">
                                            <input name="EndTimestemp" id="EndTimestemp" class="form-control flatpickr flatpickr-input active" type="text" placeholder="End Timestemp">
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2">MEETING CHAIRED BY<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">account_circle</i>
                                        </span>
                                    </div>
                                    <input type="text" value="U Aung Thein ( CEO ) " class="form-control" name="MeetingChaired" placeholder="Chaired By Name" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <textarea name="MeetingDescription" class="form-control " id="MeetingDescription" rows="10" cols="30">
                                    Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day
                                </textarea>
                                <button type="submit" class="btn save-meeting-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>
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
{{--<script src="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.js')}}"></script>--}}
{{--<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>--}}
{{--<script src="{{asset('admin-assets/plugins/editors/markdown/simplemde.min.js')}}"></script>--}}
{{--<script src="{{asset('admin-assets/plugins/editors/markdown/custom-markdown.js')}}"></script>--}}

<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>



    $(document).ready(function(){

        var f2 = flatpickr(document.getElementById('StartTimestemp'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        var f2 = flatpickr(document.getElementById('EndTimestemp'), {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        $(".DepartmentID").select2({
            tags: true,
        });

        $(".Types").select2({
            tags: true,
        });

        CKEDITOR.replace( 'MeetingDescription', {
            filebrowserUploadUrl: "{{route('CreateMeeting', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',

        });
        $('.CustomDiv').hide();
    });


    $('.Types').change(function (){
        if($(this).val() == 'custom')
        {
            $('.DepartmentDiv').hide();
            $('.CustomDiv').show();

        }else {
            $('.DepartmentDiv').show();
            $('.CustomDiv').hide();

        }

        //regular
    });


</script>
</body>
</html>

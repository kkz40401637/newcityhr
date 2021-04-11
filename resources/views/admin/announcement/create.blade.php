<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- END THEME GLOBAL STYLES -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/editors/quill/quill.snow.css')}}">
<!--  END CUSTOM STYLE FILE  -->



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

                <div class="col-sm-12 col-md-8  col-lg-10 offset-md-1 offset-lg-1 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW ANNOUNCEMENT
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <form action="{{ route('AddDepartmentStore') }}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('status')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                <p class="my-2">INFORMATION<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="Title" id="Title" placeholder="TITLE" value="{{ old('DEPARTMENT NAME') }}" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class="my-2">STATION<p>
                                <div class="input-group my-2">
                                    <select class="form-control tagging" multiple="multiple">
                                        <option>orange</option>
                                        <option>white</option>
                                        <option>purple</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">START DATE</p>
                                        <div class="form-group mb-0">
                                            <input id="startDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">END DATE</p>
                                        <div class="form-group mb-0">
                                            <input id="endDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2">ANNOUNCEMENT DATE<p>
                                <div class="input-group my-2">
                                    <input id="AnnouncementDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                </div>


                                <div class="my-2">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4> Description </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div id="editor-container">

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <p class="my-2">ADITIONAL INFORMATION<p>
                                <div class="input-group my-2">
                                    <textarea class="form-control" id="AdditionalNote" name="AdditionalNote" value="{{ old('AdditionalNote') }}" rows="6" cols="50"></textarea>
                                </div>
                                <button type="submit" class="btn save-company-info-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">

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
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('admin-assets/plugins/editors/quill/quill.js')}}"></script>
<script src="{{asset('admin-assets/plugins/editors/quill/custom-quill.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
    $(".tagging").select2({
        tags: true
    });
    var f1 = flatpickr(document.getElementById('startDate'));
    var f1 = flatpickr(document.getElementById('endDate'));

    var f1 = flatpickr(document.getElementById('AnnouncementDate'));
</script>
</body>
</html>

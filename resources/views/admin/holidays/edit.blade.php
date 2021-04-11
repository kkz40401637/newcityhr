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
<style>
    #cke_26,#cke_32{
        display: none !important;
    }
    .original-branch
    {
        border-style: dotted !important;
        border: 1px dashed black !important;
        border-radius: 7px !important;
        padding: 10px 4px !important;
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
                            ADD NEWS HOLIDAY
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <form action="{{ route('UpdateHoliday',$HolidaysDb->Token) }}" class="form-sample" method="POST">
                                @csrf
                                <input type="text" name="Token"  value="{{$HolidaysDb->Token}}" hidden>
                                @error('Title')
                                <span class="alert alert-danger" role="alert">
                                      Place Check Your Title
                                    </span>
                                @enderror
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="Title" id="Title" value="{{$HolidaysDb->Title}}" placeholder="NEWS TITLE"  aria-label="notification" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mt-3 original-branch" style=""  >
                                    @foreach($HolidaysDb->StationID as $Index => $StationName)
                                        <span class="mx-1 badge badge-dark"> {{$StationName}} </span>
                                    @endforeach
                                </div>
                                <div class="input-group mt-3 " >
                                    @error('StationID')
                                    <span class="alert alert-danger" role="alert">
                                      Place Check Your Branch
                                    </span>
                                    @enderror
                                    <select class="form-control StationID" name="StationID[]" id="StationID" multiple="multiple"  >
                                        @foreach($StationDb as $Index => $Station)
                                            <option value="{{$Station->id}}" >{{$Station->StationName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-0">
                                            <input id="StartDate" name="StartDate" class="form-control flatpickr flatpickr-input active" value="{{$HolidaysDb->StartDate}}" type="text" placeholder="Start Date..">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-0">
                                            <input id="EndDate" name="EndDate" class="form-control flatpickr flatpickr-input active" value="{{$HolidaysDb->EndDate}}" type="text" placeholder="End Date..">
                                        </div>
                                    </div>
                                </div><br>
                                <textarea name="NewsDescription" id="NewsDescription" class="form-control NewsDescription"  rows="10" cols="80">
                                    This is my textarea to be replaced with CKEditor 4.
                                </textarea>
                                <div class="input-group my-2">
                                    <textarea class="form-control" id="Note" name="Note" placeholder="NOTE" value="{{$HolidaysDb->Note}}" rows="6" cols="50"></textarea>
                                </div>
                                <button type="submit" class="btn save-news-btn theme-bg theme-color mt-2 col-12">UPDATE</button><br>
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
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    var ss = $(".StationID").select2({
        tags: true,
    });
    CKEDITOR.replace( 'NewsDescription');
    var f2 = flatpickr(document.getElementById('StartDate'), {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    var f2 = flatpickr(document.getElementById('EndDate'), {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>
</body>
</html>

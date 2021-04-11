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

                <div class="col-sm-12 col-md-5 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEWS HOLIDAY
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <form action="{{ route('AddHoliday') }}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>  {{session('error')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                @error('Title')
                                <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="Title" id="Title" placeholder="NEWS TITLE">
                                </div>

                                <div class="input-group mt-3 " >
                                    <b class="StationError d-none text-danger">CHOICE STATION ....</b>
                                    <select class="form-control StationID" name="StationID[]" id="StationID" style="border: 1px solid red !important;"   multiple="multiple">
                                        @foreach($StationDb as $Index => $Station)
                                            <option value="{{$Station->id}}" >{{$Station->StationName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-0">
                                            @error('StartDate')
                                            <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <input id="StartDate" name="StartDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Start Date..">
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-0">
                                            @error('EndDate')
                                            <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                            <input id="EndDate" name="EndDate" class="form-control flatpickr flatpickr-input active" type="text" placeholder="End Date..">
                                        </div>
                                    </div>
                                </div><br>

                                <textarea name="NewsDescription" class="form-control" id="NewsDescription" rows="10" cols="80">
                                    This is my textarea to be replaced with CKEditor 4.
                                </textarea>

                                <div class="input-group my-2">
                                    <textarea class="form-control" id="Note" name="Note" placeholder="NOTE" value="{{ old('NOTE') }}" rows="6" cols="50"></textarea>
                                </div>

                                <button type="submit" class="btn save-news-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>
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

    var StartDate = flatpickr(document.getElementById('StartDate'));
    var EndDate = flatpickr(document.getElementById('EndDate'));

</script>
</body>
</html>

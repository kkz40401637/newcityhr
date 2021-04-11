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

                <div class="col-sm-12 col-md-5 layout-spacing ">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD SOCIAL ACCOUNT
                        </h6>
                        <div class="card-body form-permission p-4" data-form-permission="0" >

                            <form action="{{route('SocialFormSave')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
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

                                <p class="">EMPLOYEE ID </p>
                                <div class="input-group my-2">
                                    <select name="EmployeeID" class="form-control EmployeeID" >
                                        @foreach ($EmployeeDb as $key => $Employee)
                                            <option {{$Token==$Employee->Token?"selected":""}}  value="{{$Employee->id}}">{{$Employee->Name .' ( ID '. $Employee->No .' ) '}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <p class="">FACEBOOK</p>
                                <div class="input-group my-2 ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">FB</span>
                                    </div>
                                    <input  type="text" value="https://www.facebook.com/yellhtutcom"  class="form-control" name="Facebook" placeholder="PROFILE LINK" >
                                </div>

                                <p class="">TWITTER</p>
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">TW</span>
                                    </div>
                                    <input type="text" value="https://www.twitter.com/yellhtutcom"  class="form-control" name="Twitter" placeholder="PROFILE LINK" >
                                </div>

                                <p class="">LINKEDIN</p>
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">TW</span>
                                    </div>
                                    <input type="text" value="https://www.twitter.com/yellhtutcom"  class="form-control" name="LinkedIn" placeholder="PROFILE LINK" >
                                </div>

                                <p class="">SKYPE</p>
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">SK</span>
                                    </div>
                                    <input type="text" value="https://www.skype.com/yellhtutcom"  class="form-control" name="SkyPe" placeholder="PROFILE LINK" >
                                </div>

                                <button type="submit" class="btn  theme-bg theme-color mt-3 col-12">SAVE</button><br>
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
{{--<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>--}}
{{--<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>--}}
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>

    $('.EmployeeID').select2()

</script>

</body>
</html>


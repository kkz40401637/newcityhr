<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

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

            <div class="row">
                <div class="col-sm-12 my-sm-2 col-md-5 layout-spacing">
                    <div class="card animated slideInLeft shadow-lg" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header bg-primary" style="border-radius: 13px 13px 0 0">
                            CONFIGURE YOU CLIENT DEVICE
                        </h6>
                        <div class="card-body">
                            <form action="{{route('LoginAuth')}}" method="POST" >
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control " placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="number" class="form-control" placeholder="Password">
                                </div>

                                <input type="submit" class=" mt-2 btn col-12 btn-primary save-and-config shadow-lg" value="LOGIN">
                            </form>
                        </div>
                        <div class="linear-activity d-none ">
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


</body>
</html>

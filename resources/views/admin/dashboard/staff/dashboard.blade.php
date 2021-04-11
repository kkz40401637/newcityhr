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

            <div class="row my-2" >This is Staff</div>

            <div class="row layout-top-spacing ">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div  class="widget widget-card-four">
                        <a href="" class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-dark">4543 </b>
                                    </h3>
                                    <p class="text-dark">Total Device</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">desktop_mac</i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-success">334</b>
                                    </h3>
                                    <p class="text-dark">Online Devices</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">insights</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-danger">775</b>
                                    </h3>
                                    <p class="text-dark">Offline Devices</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">signal_wifi_off</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div  class="widget widget-card-four">
                        <a href="" class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-dark">456 </b>
                                    </h3>
                                    <p class="text-dark">Graphic Figure</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">multiline_chart</i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row mt-2 ">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <a href="" class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-danger">344</b>
                                    </h3>
                                    <p class="text-dark">Account Quantity</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">supervised_user_circle</i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-danger">1 </b>
                                    </h3>
                                    <p class="text-dark">Dept</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">apartment</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-danger">8 </b>
                                    </h3>
                                    <p class="text-dark">Alarms Unconfirmed</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">notification_important</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-danger">1 </b>
                                    </h3>
                                    <p class="text-dark">Alarm Processed</p>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">library_books</i>
                                    </div>
                                </div>
                            </div>
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

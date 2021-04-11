<?php echo View::make ('admin.admin-layouts.head'); ?>

<link href="{{asset('admin-assets/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
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

            <div class="row layout-top-spacing ">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div  class="widget widget-card-four bg-secondary " >
                        <a href="" class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-white">253,155 MMK </b>
                                    </h3>
                                    <h4 class="text-white">ယခုလ ရရှိသောငွေ</h4>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">attach_money</i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four bg-warning">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-white">5645645 MMK </b>
                                    </h3>
                                    <h4 class="text-white">ယခုလ လျှော််ရငွေ</h4>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">money_off</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget widget-card-four bg-success">
                        <div class="widget-content">
                            <div class="w-content">
                                <div class="w-primary">
                                    <h3 class="value text-danger">
                                        <b class="text-white">54894 MMK</b>
                                    </h3>
                                    <h4 class="text-white">ယခုလ အမြတ်ငွေ</h4>
                                </div>
                                <div class="mt-2">
                                    <div class="w-icon">
                                        <i class="material-icons">monetization_on</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row ">

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Revenue</h5>
                            <ul class="tabs tab-pills">
                                <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                            </ul>
                        </div>

                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <div id="content_1" class="tabcontent">
                                    <div id="revenueMonthly"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class=""> ရောင်းရနှုန်းများ</h5>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
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
<script src="{{asset('admin-assets/plugins/apex/apexcharts.min.js')}}"></script>
{{--<script src="{{asset('admin-assets/js/dashboard/dash_2.js')}}"></script>--}}
<script>
    /*
    =================================
        Revenue Monthly | Options
    =================================
*/
    var options1 = {
        chart: {
            // fontFamily: 'Nunito, sans-serif',
            height: 300,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                opacity: 0.3,
                blur: 5,
                left: -7,
                top: 22
            },
            toolbar: {
                show: false
            },
            events: {
                mounted: function(ctx, config) {
                    const highest1 = ctx.getHighestValueInSeries(0);
                    const highest2 = ctx.getHighestValueInSeries(1);

                    ctx.addPointAnnotation({
                        x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                        y: highest1,
                        label: {
                            style: {
                                cssClass: 'd-none'
                            }
                        },
                        customSVG: {
                            SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                            cssClass: undefined,
                            offsetX: -8,
                            offsetY: 5
                        }
                    })

                    ctx.addPointAnnotation({
                        x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                        y: highest2,
                        label: {
                            style: {
                                cssClass: 'd-none'
                            }
                        },
                        customSVG: {
                            SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                            cssClass: undefined,
                            offsetX: -8,
                            offsetY: 5
                        }
                    })
                },
            }
        },
        colors: ['#1b55e2', '#e7515a'],
        dataLabels: {
            enabled: false
        },
        markers: {
            discrete: [{
                seriesIndex: 0,
                dataPointIndex: 7,
                fillColor: '#000',
                strokeColor: '#000',
                size: 5
            }, {
                seriesIndex: 2,
                dataPointIndex: 11,
                fillColor: '#000',
                strokeColor: '#000',
                size: 4
            }]
        },
        subtitle: {
            text: 'Total Profit',
            align: 'left',
            margin: 0,
            offsetX: -10,
            offsetY: 35,
            floating: false,
            style: {
                fontSize: '14px',
                color:  '#888ea8'
            }
        },
        title: {
            text: '$10,840',
            align: 'left',
            margin: 0,
            offsetX: -10,
            offsetY: 0,
            floating: false,
            style: {
                fontSize: '25px',
                color:  '#0e1726'
            },
        },
        stroke: {
            show: true,
            curve: 'smooth',
            width: 2,
            lineCap: 'square'
        },
        series: [{
            name: 'ဝင်ငွေ',
            data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000]
        }, {
            name: 'အသုံးစရိတ်',
            data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000]
        }],
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                show: true
            },
            labels: {
                offsetX: 0,
                offsetY: 5,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-xaxis-title',
                },
            }
        },
        yaxis: {
            labels: {
                formatter: function(value, index) {
                    return (value / 1000) + 'K'
                },
                offsetX: -22,
                offsetY: 0,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-yaxis-title',
                },
            }
        },
        grid: {
            borderColor: '#e0e6ed',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: -10
            },
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -50,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 10,
                height: 10,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: 0,
                offsetY: 0
            },
            itemMargin: {
                horizontal: 0,
                vertical: 20
            }
        },
        tooltip: {
            theme: 'dark',
            marker: {
                show: true,
            },
            x: {
                show: false,
            }
        },
        fill: {
            type:"gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .28,
                opacityTo: .05,
                stops: [45, 100]
            }
        },
        responsive: [{
            breakpoint: 575,
            options: {
                legend: {
                    offsetY: -30,
                },
            },
        }]
    }


    var chart1 = new ApexCharts(
        document.querySelector("#revenueMonthly"),
        options1
    );

    chart1.render();


    /*
        ==================================
            Sales By Category | Options
        ==================================
    */
    var options = {
        chart: {
            type: 'donut',
            width: 380,
            height: 315
        },
        colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            fontSize: '14px',
            markers: {
                width: 10,
                height: 10,
            },
            itemMargin: {
                horizontal: 0,
                vertical: 8
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '65%',
                    background: 'transparent',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '29px',
                            // fontFamily: 'Nunito, sans-serif',
                            color: undefined,
                            offsetY: -10
                        },
                        value: {
                            show: true,
                            fontSize: '26px',
                            // fontFamily: 'Nunito, sans-serif',
                            color: '20',
                            offsetY: 16,
                            formatter: function (val) {
                                return val
                            }
                        },
                        total: {
                            show: true,
                            showAlways: true,
                            label: 'TOTAL',
                            color: '#888ea8',
                            formatter: function (w) {
                                return w.globals.seriesTotals.reduce( function(a, b) {
                                    return a + b
                                }, 0)
                            }
                        }
                    }
                }
            }
        },
        stroke: {
            show: true,
            width: 25,
        },
        series: [985, 737, 270],
        labels: ['2D ထီ', 'ဘောလုံး', '3D ထီ'],
        responsive: [{
            breakpoint: 1599,
            options: {
                chart: {
                    width: '350px',
                    height: '300px'
                },
                legend: {
                    position: 'bottom'
                }
            },

            breakpoint: 1439,
            options: {
                chart: {
                    width: '250px',
                    height: '390px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '65%',
                        }
                    }
                }
            },
        }]
    }

    var chart = new ApexCharts(
        document.querySelector("#chart-2"),
        options
    );

    chart.render();



</script>

</body>
</html>

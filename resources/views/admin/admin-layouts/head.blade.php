<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.example.com"/>
    <meta property="og:title" content="City HR "/>
    <meta property="og:description" content="09 ......."/>
    <meta property="og:image" content="{{asset('admin-assets/img/meta/hst-meta.jpg')}}"/>
    <meta name="KEYWORDS" content="gym fitness center in myanmar "/>
    <meta name="csrf-token" data-auth-check="1" content="{{csrf_token()}}">


    <title> City HR</title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin-assets/img/city-hr-url-logo.png')}}"/>
    <link href="{{asset('admin-assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/material-font.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
{{--    <link href="{{asset('admin-assets/plugins/highlight/styles/monokai-sublime.css')}}" rel="stylesheet" type="text/css" />--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com">--}}
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
{{--    <link href="{{assert('admin-assets/fonts/material.woff2')}}" rel="stylesheet">--}}


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">--}}
    <link href="{{asset('admin-assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('admin-assets/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
{{--    <link href="{{asset('admin-assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />--}}
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{asset('admin-assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin-assets/css/animated.min.css')}}">

    <link href="{{asset('admin-assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/switches.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/select2/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/elements/alert.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/bootstrap/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{asset('admin-assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
{{--    <link rel="stylesheet" href="/resources/demos/style.css">--}}

    <link href="{{asset('admin-assets/css/elements/color_library.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
    <!-- toastr -->
    <link href="{{asset('admin-assets/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM TAB  -->
    <link href="{{asset('admin-assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM TAB  -->

    {{-- OwlCarousel--}}
    <link rel="stylesheet" href="{{asset('admin-assets/owl/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/owl/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/custom-clipboard.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">

    <script src="{{asset('admin-assets/js/libs/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('admin-assets/owl/js/owl.carousel.js')}}" ></script>
    <script src="{{asset('admin-assets/owl/js/jquery.mousewheel.min.js')}}" ></script>
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let SideBar = ['role','account','company','branch','department','meeting','job','candidate','organization_news','office','holiday','employee','settings'];

        let csrf_token = $('meta[name="csrf-token"]').attr('content');
        {{--let rtc_auth_check = '{{route('RealTimeCheckAuthStatus')}}';--}}
        let logout_route = '{{route('login')}}';
        let JsUserRole = '{{auth()->user()->role}}';
        {{--RtcAuthCheck('{{route('RealTimeCheckAuthStatus')}}');--}}

        const  SnackAlert = (Sms,TxtColor='',Bgcolor='') =>
        {
            Snackbar.show({
                text: Sms,
                pos: 'bottom-right',
                actionTextColor: TxtColor,
                backgroundColor: Bgcolor,
                duration: 50000,
            });
        }

    </script>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="www.example.com"/>
    <meta property="og:title" content="CITY HR "/>
    <meta property="og:description" content="အခုပဲဆက်သွယ်လိုက်ပါ 01 "/>
    <meta property="og:image" content="{{asset('admin-assets/img/meta/hst-meta.jpg')}}"/>
    <meta name="KEYWORDS" content="gym fitness center in myanmar "/>
    <meta name="csrf-token" content="{{csrf_token()}}">


    <title> 3D || LOGIN  </title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin-assets/img/han-logo.png')}}"/>
    <link href="{{asset('admin-assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/material-font.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
{{--    <link href="{{asset('admin-assets/plugins/highlight/styles/monokai-sublime.css')}}" rel="stylesheet" type="text/css" />--}}

<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin-assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" href="{{asset('admin-assets/css/animated.min.css')}}">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{--    <link rel="stylesheet" href="/resources/demos/style.css">--}}

    <!-- toastr -->
    <link href="{{asset('admin-assets/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM TAB  -->
    <link href="{{asset('admin-assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM TAB  -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/custom-clipboard.css')}}">

    <script src="{{asset('admin-assets/js/libs/jquery-3.5.1.min.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let csrf_token = $('meta[name="csrf-token"]').attr('content');

    </script>


</head>



<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/switches.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('admin-assets/css/authentication/form-2.css')}}"  />
<style>
    .bg-login-blade{
        background-image:  url("{{asset('admin-assets/img/bg/bg1.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="form  bg-login-blade " >
<div class="form-container outer  " style="margin: 0 20px !important;">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="text-dark">အကောင့်၀င်မည်</h1>
                    <form method="POST" action="{{ route('login') }}" class="text-left">
                        @csrf
                        <div class="form">
                            <div id="username-field" class="field-wrapper input">
                                <label for="email" >{{ __('E-Mail Address') }}</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="email" autofocus="autofocus" name="email" type="text" class="form-control @error('email') is-invalid @enderror  "  value="{{ old('email') }}" autofocus required placeholder="e.g John_Doe">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" value="admin123" name="password" type="password" class="form-control" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn theme-bg theme-color" value="">၀င်မည်</button>
                                </div>
                            </div>
{{--                            <a href="{{route('register')}}" class="forgot-pass-link text-black float-right mt-5">အကောင့်အသစ်ဖွင့်မည် .. ! </a>--}}

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('admin-assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('admin-assets/js/authentication/form-2.js')}}"></script>

</body>
</html>

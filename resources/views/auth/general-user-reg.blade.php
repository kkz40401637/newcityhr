
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>3D || Register</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin-assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/switches.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
    <!-- toastr -->
    <link href="{{asset('admin-assets/plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<style>
    .bg-login-blade{
        background-image:  url("{{asset('admin-assets/img/bg/bg1.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="form bg-login-blade">

<div class="form-container outer " style="margin: 0 20px !important;">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">အကောင့်အသစ်ဖွင့်မည် </h1>
                    <form method="POST" action="{{ route('register') }}" class="text-left">
                        @csrf
                        <div class="form">
                            <div id="name-field" class="field-wrapper input">
                                <label for="name">အမည်</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="name" value="{{ old('name') }}" name="name" type="text" class="form-control  @error('name') is-invalid @enderror " placeholder="အမည်">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="name-field" class="field-wrapper input">
                                <label for="phone">ဖုန်း</label>
                                <svg style="margin-top: 40px !important;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <input id="phone" value="{{ old('phone') }}" name="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" placeholder="ဖုန်း">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="email-field" class="field-wrapper input">
                                <label for="email">အီးမေးလ်</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                <input id="email" value="{{ old('email') }}" name="email" type="text"  class="form-control  @error('email') is-invalid @enderror" placeholder="အီးမေးလ်">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password">စကားဝှက်</label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <input  id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="စကားဝှက်">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password-confirm">အတည်ပြု ( စကားဝှက် )</label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="စကားဝှက်">
                            </div>


                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button type="submit" class="btn theme-color theme-bg" >ဖွင့်မည်</button>
                                </div>
                            </div>

                            <a href="{{route('login')}}" class="forgot-pass-link text-black float-right mt-5">အကောင့်၀င်မည် .. ! </a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('admin-assets/js/libs/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin-assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('admin-assets/js/authentication/form-2.js')}}"></script>
<!-- toastr -->
<script src="{{asset('admin-assets/plugins/notification/snackbar/snackbar.min.js')}}"></script>


</body>

</html>

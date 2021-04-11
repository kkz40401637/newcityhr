<?php echo View::make ('admin.function.function'); ?>
<div class="header-container fixed-top">
    {{--    <header class="header navbar navbar-expand-sm ">--}}
    <header class="header navbar navbar-expand-sm theme-bg theme-color">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <i class="material-icons theme-color" >menu</i>
        </a>
        <?php $UserRole = ['Super Admin' ,'ပိုင်ရှင်' ,'ဝန်ထမ်း' ,'အသုံးပြုသူ' ]; ?>

        <h6 class=" ml-3 mt-sm-2 user-header-balance theme-color">လက်ကျန်ငွေ {{auth()->user()->balance }} MMK</h6>

        <ul class="navbar-item flex-row ml-auto">

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons theme-color" >person</i>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            {{--                                <img class="img-fluid mr-2" src="{{asset('admin-assets/img/boy.png')}}" alt="{{Auth::user()->name}}">--}}

                            @if(empty(Auth::user()->profile))
                                <img class="img-fluid mr-2" src="{{asset('admin-assets/img/boy.png')}}" alt="{{Auth::user()->name}}">
                            @else
                                <img class="img-fluid mr-2" src="{{asset('admin-assets/img/user_profile').'/'.Auth::user()->id.'/'.Auth::user()->profile_img}}" alt="{{Auth::user()->name}}">
                            @endif

                            <div class="media-body">
                                <h5>{{Auth::user()->name}}</h5>
                                <p>{{$UserRole [Auth::user()->role-1] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <button type="submit"><span>ထွက်မည်</span></button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>

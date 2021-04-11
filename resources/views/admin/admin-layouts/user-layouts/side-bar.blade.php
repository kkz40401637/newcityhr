<style>
    li.menu {
        padding: 2px;
        border-radius: 5px;
        margin: 5px;
    }
    li.menu:hover{
        background-color: #ebedf2;
        color: white;
    }
    .head-line {
        display: flex;
        justify-content: left;
        margin-left: 28px;
    }
    .logout-icon {
        margin: 0 0 0 -119px;
        padding-top: 6px;
    }
    .btn-logout{

        border: none;
        color: white;
        border-radius: 5px;
        height: 40px;
        /*-moz-box-shadow: 0px 0px 31px 0px rgba(97,91,97,1);*/

    }
    li.menu.active {
        background-color: #bfffbf;
    }
    /*li.menu.active ,a,i {*/
    /*    color: black;*/
    /*}*/
    .btn-cover {
        display: flex;
        justify-content: center;
    }
    .margin-custom-control{
        margin-top: -4px !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">
    @php $UserInfo = Auth::user(); @endphp

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand theme-bg flex-row  text-center">
            <li class="nav-item theme-text theme-color">
                <a href="" class="nav-link theme-color">{{$UserInfo->name}}</a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories pt-0" id="accordionExample">

            <li class="menu {{Request::segment(1)=='user' && empty(Request::segment(2)) ?"active":""}} ">
                <a href="{{route('UsersDashboard')}}" class="dropdown-toggle">
                    <i class="material-icons ">home <small class="text-black margin-custom-control" > ပင်မစာမျက်နှာ </small></i>
                </a>
            </li>

            <div class="head-line mt-2">
                <small class="text-dark"> 2D || 3D</small>
            </div>
            <li class="menu {{Request::segment(2)=='two'?"active":""}}">
                <a href="{{route('UserTwoDigits')}}"  class="dropdown-toggle">
                    <i class="material-icons">looks_two <small class="text-black margin-custom-control" > ၂လုံး </small></i>
                </a>
            </li>
            <li class="menu {{Request::segment(2)=='three'?"active":""}}">
                <a href="{{route('UserThreeDigits')}}"  class="dropdown-toggle">
                    <i class="material-icons">looks_3 <small class="text-black margin-custom-control" > ၃လုံး </small></i>
                </a>
            </li>

{{--            <div class="head-line mt-2">--}}
{{--                <small class="text-dark"> ဘောလုံး</small>--}}
{{--            </div>--}}
{{--            <li class="menu {{Request::segment(3)=='league'?"active":""}}">--}}
{{--                <a href="{{route('LeagueList')}}"  class="dropdown-toggle">--}}
{{--                    <i class="material-icons">sports_soccer <small class="text-black margin-custom-control" > အသင်းများ</small></i>--}}
{{--                </a>--}}
{{--            </li>--}}

            <div class="head-line mt-2">
                <small class="text-dark"> ငွေစာရင်း</small>
            </div>
            <li class="menu {{Request::segment(2)=='deposit'?"active":""}}">
                <a href="{{route('DepositMoney')}}"  class="dropdown-toggle">
                    <i class="material-icons">payment <small class="text-black margin-custom-control" > ငွေးသွင်းမည် </small></i>
                </a>
            </li>
            <li class="menu {{Request::segment(2)=='request'?"active":""}}">
                <a href="{{route('withdrawMoney')}}"  class="dropdown-toggle">
                    <i class="material-icons">attach_money <small class="text-black margin-custom-control" > ငွေးထုတ်မည်	</small></i>
                </a>
            </li>

            <div class="head-line mt-2">
                <small class="text-dark"> အသေးစိတ် </small>
            </div>
            <li class="menu {{Request::segment(2)=='digits'?"active":""}}">
                <a href="{{route('UserTodayDigits')}}"  class="dropdown-toggle">
                    <i class="material-icons">looks_two <small class="text-black margin-custom-control" > ထိုးခဲ့သောဂဏန်းများ </small></i>
                </a>
            </li>
            {{--            <li class="menu">--}}
            {{--                <form method="POST" action="{{route('logout')}}">--}}
            {{--                    @csrf--}}
            {{--                    <div class="btn-cover">--}}
            {{--                        <button class="btn-logout w-100 theme-bg" type="submit">--}}
            {{--                            <i class="material-icons theme-color logout-icon " >power_settings_new LOGOUT</i>--}}
            {{--                        </button>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </li>--}}

        </ul>

    </nav>

</div>

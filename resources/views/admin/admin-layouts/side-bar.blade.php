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
        background-color: lightgrey;
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
        font-family: 'Fjalla One', sans-serif !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">
    @php $UserInfo = Auth::user();  @endphp

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand bg-white  flex-row  text-center">
            <li class="nav-item theme-text text-dark">
                <a href="" class="nav-link text-dark">{{$UserInfo->name}}</a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories pt-0" id="accordionExample">
            <li class="menu {{Request::segment(1)==''?"active":""}}">
                <a href="/" class="dropdown-toggle">
                    <i class="material-icons ">dashboard <small class="text-black margin-custom-control" > DASHBOARD </small></i>
                </a>
            </li>
            <li class="menu hd-role {{Request::segment(1)=='role'?"active":""}}">
                <a href="{{route('RoleList')}}" class="dropdown-toggle">
                    <i class="material-icons ">lock <small class="text-black margin-custom-control" >ROLE & PERMISSION</small></i>
                </a>
            </li>
            <li class="menu hd-account {{Request::segment(1)=='account'?"active":""}}">
                <a href="{{route('UserList')}}" class="dropdown-toggle">
                    <i class="material-icons ">account_circle <small class="text-black margin-custom-control" > ACCOUNT </small></i>
                </a>
            </li>

{{--            <div class="head-line mt-2">--}}
{{--                <small class="text-info ml-3 "> ORGANIZATION  </small>--}}
{{--            </div>--}}
{{--                <li class="menu hd-company {{Request::segment(1)=='company'?"active":""}}">--}}
{{--                    <a href="{{route('Company')}}" class="dropdown-toggle">--}}
{{--                        <i class="material-icons ">home <small class="text-black margin-custom-control" > COMPANY </small></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
            <li class="menu">
                <a href="#Organization" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>--}}
                        <i class="material-icons d-inline" >business</i> <span class="d-inline">ORGNIZATION</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Organization" data-parent="#accordionExample">
                    <li class="hd-company {{Request::segment(1)=='business_unit'?"active":""}}">
                        <a href="{{route('BusinessUnit')}}">
                             BUSINESS UNIT
                        </a>
                    </li>
                    <li class="hd-branch {{Request::segment(1)=='branch'?"active":""}}">
                        <a href="{{route('StationList')}}">
                             BRANCH
                        </a>
                    </li>
                    <li class="hd-department {{Request::segment(1)=='department'?"active":""}} ">
                        <a href="{{route('DepartmentList')}}">
                            DEPARTMENT
                        </a>
                    </li>
                    <li class="hd-meeting {{Request::segment(1)=='meeting'?"active":""}} ">
                        <a href="{{route('MeetingList')}}">
                            MEETING
                        </a>
                    </li>
                    <li class="hd-holiday {{Request::segment(1)=='holiday'?"active":""}} ">
                        <a href="{{route('HolidayList')}}">
                            HOLIDAYS
                        </a>
                    </li>
                    <li class="hd-office {{Request::segment(1)=='office'?"active":""}} ">
                        <a href="{{route('OfficeOrderList')}}">
                            OFFICE ORDER
                        </a>
                    </li>
                    <li class="hd-office {{Request::segment(1)=='organization_news'?"active":""}} ">
                        <a href="{{route('OrganizationNewsList')}}">
                            ORGANIZATION NEWS
                        </a>
                    </li>

                </ul>
            </li>


{{--            <div class="head-line mt-2">--}}
{{--                <small class="text-info ml-3 "> RECRUITMENT </small>--}}
{{--            </div>--}}
            <li class="menu">
                <a href="#Recruitement" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>--}}
                        <i class="material-icons d-inline" >work</i> <b class="d-inline">RECRUITMENT</b>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Recruitement" data-parent="#accordionExample">
                    <li class="hd-job {{ Request::segment(2)=='request' || Request::segment(2)=='add' ?"active":""}} ">
                        <a href="{{route('JobRequestList')}}">
                            JOB REQUEST
                        </a>
                    </li>
                    <li class="hd-job {{Request::segment(1)=='job' &&  Request::segment(2)==''  ?"active":""}} ">
                        <a href="{{route('JobList')}}">
                            JOB POST
                        </a>
                    </li>
                    <li class="hd-job  {{Request::segment(1)=='candidate'?"active":""}} ">
                        <a href="{{route('CandidateList')}}">
                            JOB CANDIDATE
                        </a>
                    </li>
                </ul>
            </li>


{{--            <div class="head-line mt-2">--}}
{{--                <small class="text-info ml-3 "> EMPLYOEE  </small>--}}
{{--            </div>--}}
            <li class="menu employee {{Request::segment(1)=='employee'?"active":""}} ">
                <a href="{{route('EmployeeList')}}" class="dropdown-toggle">
                    <i class="material-icons ">contact_phone <small class="text-black margin-custom-control" >EMPLOYEE</small></i>
                </a>
            </li>


            <li class="menu settings ">
                <a href="" class="dropdown-toggle">
                    <i class="material-icons ">settings <small class="text-black margin-custom-control" >SETTINGS</small></i>
                </a>
            </li>


{{--            <li class="menu">--}}
{{--                <form method="POST" action="{{route('logout')}}">--}}
{{--                    @csrf--}}
{{--                    <div class="btn-cover">--}}
{{--                        <button class="btn-logout w-100 theme-bg" type="submit">--}}
{{--                            <i class="material-icons text-dark logout-icon " >power_settings_new LOGOUT</i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </li>--}}

        </ul>

    </nav>

</div>

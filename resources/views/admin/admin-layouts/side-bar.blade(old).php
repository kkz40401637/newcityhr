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

            <div class="head-line mt-2">
                <small class="text-info ml-3 "> ORGNIZATION  </small>
            </div>

{{--                <li class="menu hd-company {{Request::segment(1)=='company'?"active":""}}">--}}
{{--                    <a href="{{route('Company')}}" class="dropdown-toggle">--}}
{{--                        <i class="material-icons ">home <small class="text-black margin-custom-control" > COMPANY </small></i>--}}
{{--                    </a>--}}
{{--                </li>--}}

            <li class="menu">
                <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <span>Authentication</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                    <li>
                        <a href="auth_login_boxed.html"> Login Boxed </a>
                    </li>
                    <li>
                        <a href="auth_register_boxed.html"> Register Boxed </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                    </li>
                    <li>
                        <a href="auth_login.html"> Login Cover </a>
                    </li>
                    <li>
                        <a href="auth_register.html"> Register Cover </a>
                    </li>
                    <li>
                        <a href="auth_lockscreen.html"> Unlock Cover </a>
                    </li>
                    <li>
                        <a href="auth_pass_recovery.html"> Recover ID Cover </a>
                    </li>
                </ul>
            </li>

                <li class="menu hd-company {{Request::segment(1)=='business_unit'?"active":""}}">
                    <a href="{{route('BusinessUnit')}}" class="dropdown-toggle">
                        <i class="material-icons ">business <small class="text-black margin-custom-control" > BUSINESS UNIT </small></i>
                    </a>
                </li>
                <li class="menu hd-branch {{Request::segment(1)=='branch'?"active":""}}">
                    <a href="{{route('StationList')}}" class="dropdown-toggle">
                        <i class="material-icons ">api <small class="text-black margin-custom-control" > BRANCH </small></i>
                    </a>
                </li>
                <li class="menu hd-department {{Request::segment(1)=='department'?"active":""}} ">
                    <a href="{{route('DepartmentList')}}" class="dropdown-toggle">
                        <i class="material-icons ">view_agenda <small class="text-black margin-custom-control" >DEPARTMENT</small></i>
                    </a>
                </li>
            <li class="menu hd-meeting {{Request::segment(1)=='meeting'?"active":""}} ">
                <a href="{{route('MeetingList')}}" class="dropdown-toggle">
                    <i class="material-icons ">meeting_room <small class="text-black margin-custom-control" >MEETING</small></i>
                </a>
            </li>
            <li class="menu hd-holiday {{Request::segment(1)=='holiday'?"active":""}} ">
                <a href="{{route('HolidayList')}}" class="dropdown-toggle">
                    <i class="material-icons ">thumb_up_alt <small class="text-black margin-custom-control" >HOLIDAYS</small></i>
                </a>
            </li>
            <li class="menu hd-office {{Request::segment(1)=='office'?"active":""}} ">
                <a href="{{route('OfficeOrderList')}}" class="dropdown-toggle">
                    <i class="material-icons ">announcement <small class="text-black margin-custom-control" >OFFICE ORDER</small></i>
                </a>
            </li>
            <li class="menu hd-office {{Request::segment(1)=='organization_news'?"active":""}} ">
                <a href="{{route('OrganizationNewsList')}}" class="dropdown-toggle">
                    <i class="material-icons ">announcement <small class="text-black margin-custom-control" >ORGANIZATION NEWS</small></i>
                </a>
            </li>
            <div class="head-line mt-2">
                <small class="text-info ml-3 "> RECRUITMENT  </small>
            </div>
            <li class="menu hd-job {{ Request::segment(2)=='request' || Request::segment(2)=='add' ?"active":""}} ">
                <a href="{{route('JobRequestList')}}" class="dropdown-toggle">
                    <i class="material-icons ">work <small class="text-black margin-custom-control" >JOB REQUEST </small></i>
                </a>
            </li>
            <li class="menu hd-job {{Request::segment(1)=='job' &&  Request::segment(2)==''  ?"active":""}} ">
                <a href="{{route('JobList')}}" class="dropdown-toggle">
                    <i class="material-icons ">work <small class="text-black margin-custom-control" >JOB POST</small></i>
                </a>
            </li>
            <li class="menu hd-job  {{Request::segment(1)=='candidate'?"active":""}} ">
                <a href="{{route('CandidateList')}}" class="dropdown-toggle">
                    <i class="material-icons ">work <small class="text-black margin-custom-control" >JOB CANDIDATE</small></i>
                </a>
            </li>
            <li class="menu hd-job ">
                <a href="{{route('JobList')}}" class="dropdown-toggle">
                    <i class="material-icons ">work <small class="text-black margin-custom-control" >QUALIFIED CANDIDATE</small></i>
                </a>
            </li>
            <div class="head-line mt-2">
                <small class="text-info ml-3 "> EMPLYOEE  </small>
            </div>
            <li class="menu hd-job ">
                <a href="{{route('EmployeeList')}}" class="dropdown-toggle">
                    <i class="material-icons ">contact_phone <small class="text-black margin-custom-control" >EMPLOYEE</small></i>
                </a>
            </li>


            <li class="menu hd-job ">
                <a href="{{route('EmployeeQualificationsList')}}" class="dropdown-toggle">
                    <i class="material-icons ">school <small class="text-black margin-custom-control" >EMPLOYEEQUALIFICATION</small></i>
                </a>
            </li>
            <li class="menu hd-job ">
                <a href="{{route('EmployeeWorkExperiencesList')}}" class="dropdown-toggle">
                    <i class="material-icons ">work <small class="text-black margin-custom-control" >EMPLOYEEWORKEXPERIENCES</small></i>
                </a>
            </li>
            <li class="menu hd-job ">
                <a href="{{route('EmployeeContractList')}}" class="dropdown-toggle">
                    <i class="material-icons ">gavel <small class="text-black margin-custom-control" >EMPLOYEECONTRACT</small></i>
                </a>
            </li>
            <li class="menu hd-job ">
                <a href="{{route('TrainingList')}}" class="dropdown-toggle">
                    <i class="material-icons ">directions_run <small class="text-black margin-custom-control" >TRAINING</small></i>
                </a>
            </li>
            <li class="menu hd-job ">
                <a href="{{route('LanguageList')}}" class="dropdown-toggle">
                    <i class="material-icons ">language <small class="text-black margin-custom-control" >LANGUAGE</small></i>
                </a>
            </li>


            <li class="menu hd-job ">
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

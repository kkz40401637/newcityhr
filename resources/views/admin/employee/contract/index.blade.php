
<?php echo View::make ('admin.admin-layouts.head'); ?>

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
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

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing data-out-put-div">

            <div class="page-header">
                <div class="page-title">
                    <a href="" class="d-inline btn btn-sm shadow-lg theme-bg theme-color "> ADD NEW CONTRACT + </a>&nbsp;&nbsp;&nbsp;
                    <h3 class="d-inline float-right" >CONTRACT lIST</h3>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>  {{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">NO</div></th>
                                        <th><div class="th-content">ID</div></th>
                                        <th><div class="th-content">EMPLOYEE NAME</div></th>
{{--                                        <th><div class="th-content">EMPLOYEE NAME</div></th>--}}
                                        <th><div class="th-content">TYPE</div></th>
                                        <th><div class="th-content">CATEGORY</div></th>
                                        <th><div class="th-content">APPROVEDPERSON</div></th>
                                        <th><div class="th-content">DEPARTMENT</div></th>
                                        <th><div class="th-content">Edit</div></th>
                                        <th><div class="th-content">Delete</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($EmployeeContractDb as $key => $EmployeeContract)
                                        <tr class="tr-{{$EmployeeContract->id}}">
                                            <td><div class="td-content ">{{++$key}}</div></td>

                                            <td><div class="td-content text-dark">
                                                    <span class="badge text-white badge-pills  bg-danger">
                                                        {{$EmployeeContract->ContractID}}</span></div></td>
                                            <td><div class="td-content text-dark">
                                                    <span class="badge text-white badge-pills  bg-success">
                                                        {{$EmployeeContract->Employee->Name}}</span></div></td>
{{--                                            <td><div class="td-content text-dark">{{$EmployeeContract->EmployeeName}}</div></td>--}}
                                            <td><div class="td-content text-dark">{{$EmployeeContract->ContractType}}</div></td>
                                            <td><div class="td-content text-dark">{{$EmployeeContract->EmployeeCategory}}</div>
                                            </td>
                                            <td><div class="td-content text-dark">
{{--                                                    <span class="badge text-white badge-pills  bg-primary">--}}
{{--                                                        {{$EmployeeContract->UserInfo->name}}</span></div>--}}
                                                    <span class="badge text-white badge-pills  bg-primary">
                                                        {{$EmployeeContract->ApprovedPerson}}</span></div>
                                            </td>
                                            <td><span class="badge bg-dark m-1">{{$EmployeeContract->DepartmentInfo->Name}}</span></td>
                                            <td>
                                                <a href="" class="td-content ">
                                                    <a class="btn btn-primary position-relative " href="{{route('EditEmployeeContractInfo',$EmployeeContract->Token)}}" >
                                                        <i class="material-icons ">edit</i>
                                                    </a>
                                                </a>
                                            </td>
                                            <td>
                                                <button onclick="StationBanded({{$EmployeeContract->id}})" class="station-ban-btn{{$EmployeeContract->id}}  text-white btn bg-solid-red position-relative  ">
                                                    <i class="material-icons ">delete</i>
                                                </button>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
<script src="{{asset('admin-assets/plugins/table/datatable/datatables.js')}}"></script>

<script>

    $( document ).ready(function() {

        c3 = $('#style-3').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 25, 50],
            "pageLength": 10
        });

        multiCheck(c3);

    });

</script>

</body>
</html>

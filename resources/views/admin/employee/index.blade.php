
<?php echo View::make ('admin.admin-layouts.head'); ?>

<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">
<style>
    .aditional-text-control
    {
        display: flex;
        justify-content: center;
        margin-top: 12px;
    }
</style>
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
                    <a href="{{route('EmployeeCreateForm')}}" class="d-inline btn btn-sm shadow-lg theme-bg theme-color "> ADD NEW EMPLOYEE + </a>&nbsp;&nbsp;&nbsp;
                    <h3 class="d-inline float-right" >EMPLOYEE lIST</h3>
                </div>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">No</div></th>
                                        <th><div class="th-content">EMPLOYEE ID</div></th>
                                        <th><div class="th-content">PROFILE</div></th>
                                        <th><div class="th-content">NAME</div></th>
{{--                                        <th><div class="th-content">CARDID</div></th>--}}
                                        <th><div class="th-content">PH</div></th>
                                        <th><div class="th-content">ADITIONAL</div></th>
                                        <th><div class="th-content">Edit</div></th>
                                        <th><div class="th-content">Delete</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($EmployeeDB as $key => $Employee)
                                        <tr class="tr-{{$Employee->id}}">
                                            <td><div class="td-content ">{{++$key}}</div></td>
                                            <td><div class="td-content text-dark">
                                                    <span class="badge text-white badge-pills  bg-danger">
                                                        {{$Employee->No}}</span></div></td>
                                            <td><div class="tc-content"></div><img style="border-radius: 50%;" width="70px" height="70px;" src="{{empty($Employee->Profile)?asset('admin-assets/img/employee/original').'/employee.png':asset('admin-assets/img/employee/').'/'.$Employee->Profile}}"></td>
                                            <td><div class="td-content">{{$Employee->Name}}</div></td>
{{--                                            <td>--}}
{{--                                                <div class="td-content text-dark">--}}
{{--                                                    <span class="badge text-white badge-pills  bg-secondary">{{$Employee->CardId}}</span>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
                                            <td><b>{{$Employee->PhoneNumber}}</b></td>
                                            <td>
                                                <a class="btn bg-secondary position-relative "
                                                       onclick="AddBalance('{{$Employee->id.','.$Employee->Name.','.$Employee->Token}}')" data-toggle="modal"
                                                   data-target="#AddAditionalInfo">
                                                    <i class="material-icons text-white">add</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" class="td-content ">
                                                    <a class="btn btn-primary position-relative " href="{{route('EditEmployeeInfo',$Employee->Token)}}" >
                                                        <i class="material-icons ">edit</i>
                                                    </a>
                                                </a>
                                            </td>
                                            <td>
                                                <button onclick="StationBanded({{$Employee->id}})" class="station-ban-btn{{$Employee->id}}  text-white btn bg-solid-red position-relative  ">
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

            <!-- AddAditionalInfo -->
            <div class="modal fade" id="AddAditionalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header theme-bg">
                            <h5 class="modal-title d-inline theme-color "> &nbsp; Add Employee Info Of &nbsp;</h5>
                            <h5 class="modal-title d-inline employee-name text-white " data-user-id="0" > NAME </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons text-white" >clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table put-model-table table-bordered mb-4">
{{--                                <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="aditional-text-control" ><a href="" style="margin-bottom: 5px !important;">Qualification</a></th>--}}
{{--                                        <th>--}}
{{--                                            <a href="" class="btn target-details-color position-relative ">--}}
{{--                                                <i class="material-icons ">open_in_new</i>--}}
{{--                                            </a>--}}
{{--                                        </th>--}}
{{--                                    </tr>--}}
{{--                                </thead>--}}
                                {{-- JS CODE OUTPUT HERE--}}

                            </table>
                        </div>
                        <div class="linear-activity d-none ">
                            <div class="indeterminate"></div>
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

    $('.EmployeeAditional').select2();

    // let AditionalInfoArr = [
    //     'socials','contract','qualification','work','ssb',
    //     'training','languages','bank_account','tax','skill','memberships','dependants'
    // ];
    // let AditionalRoute =
    //     [
    //         '{{route('SocialForm',500)}}','{{route('EmployeeContractCreateForm',500)}}',
    //         '{{route('EmployeeQualificationsCreateForm',500)}}','{{route('EmployeeWorkExperiencesCreateForm',500)}}',
    //     '{{route('SsbForm',500)}}','{{route('TrainingCreateForm',500)}}',
    //         '{{route('LanguageCreateForm',500)}}','{{route('BankAccountCreateForm',500)}}','http://192.168.99.98:8000/tax',
    //         'http://192.168.99.98:8000/skill','http://192.168.99.98:8000/memberships','http://192.168.99.98:8000/dependants'
    //     ];

    let AditionalInfoArr = [
        'socials','contract','qualification','work','ssb',
        'training','languages','bank_account'
    ];
    let AditionalRoute =
        [
            '{{route('SocialForm',500)}}','{{route('EmployeeContractCreateForm',500)}}',
            '{{route('EmployeeQualificationsCreateForm',500)}}','{{route('EmployeeWorkExperiencesCreateForm',500)}}',
        '{{route('SsbForm',500)}}','{{route('TrainingCreateForm',500)}}',
            '{{route('LanguageCreateForm',500)}}','{{route('BankAccountCreateForm',500)}}'
        ];



    const AddBalance = (In) =>
    {
        const InFilter = In.split(',');
        console.log(InFilter);
        $('.employee-name').html( ' ( ' + InFilter[1] +' ) ');

        for(var a =0; a<AditionalInfoArr.length; a++)
        {
            let SingleRoute = AditionalRoute[a];
            let RouteArr = SingleRoute.split('/');
            RouteArr.splice(6, 1);   //first parameter is array index and second parameter is no of array u want to remove
            let FinalRoute = RouteArr[0]+'/'+RouteArr[1]+'/'+RouteArr[2]+'/'+RouteArr[3]+'/'+RouteArr[4]+'/'+RouteArr[5];
            // console.log(AditionalInfoArr[a]);

            $('.put-model-table').append(`<thead>
                                        <tr>
                                            <th class="aditional-text-control" ><a href="" style="margin-bottom: 5px !important;">${AditionalInfoArr[a]}</a></th>
                                            <th>
                                                <a href="${FinalRoute+'/'+InFilter[2]}" class="btn target-details-color position-relative ">
                                                    <i class="material-icons ">open_in_new</i>
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>`);
        }

    }




</script>

</body>
</html>


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
                    <a href="{{route('RequestJob')}}" class="d-inline btn btn-sm shadow-lg theme-bg theme-color "> ADD NEWS JOB POST + </a>&nbsp;&nbsp;&nbsp;
                    <h3 class="d-inline float-right" >JOB POST LIST</h3>
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>  {{session('error')}}</strong>
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
                                            <th>NO</th>
                                            <th>STATUS</th>
{{--                                            <th>TOKEN</th>--}}
                                            <th>TITLE</th>
                                            <th>POSITION</th>
                                            <th>DEPARTMENT</th>
                                            <th>NO EMP</th>
                                            <th>QUALIFICATION</th>
                                            <th>GENDER</th>
                                            <th>REQUESTER</th>
                                            <th>ADD</th>
                                            <th>DETAILS</th>
                                            <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($JobDb as $key => $Job)
                                        <tr class="tr-{{$Job->id}}">
                                            <td>{{$key+1}}</td>

                                            @if($Job->ApprovalId == auth()->user()->id)
                                                <td>
                                                    <label class="switch s-icons s-outline s-outline-success mr-2">
                                                        <input type="checkbox" onchange="DualFun('{{$Job->id.','.$Job->ApprovalId.','.$Job->Status}}')"
                                                               class="job-toggle-class{{$Job->id}}"  {{ $Job->Status!='Pending' ? 'checked' : '' }} >
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="badge badge-primary">{{$Job->Status}}</span>
                                                </td>
                                            @endif
                                            <td><b>{{$Job->Title}}</b></td>
                                            <td><b>{{$Job->Position}}</b></td>
                                            <td>
                                                <span class="badge badge-dark"> {{$Job->DepartmentInfo->Name}} </span>
                                            </td>
                                            <td><span class="badge bg-danger">{{$Job->NumberOfEmplyoee}}</span></td>
                                            <td>
                                                @foreach(json_decode($Job->qualification) as $Name)
                                                    <span class="badge badge-success bg-success m-1">{{$Name}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach(json_decode($Job->Gender) as $Index)
                                                    <span class="badge bg-warning m-1">{{$Index}}</span>
                                                @endforeach
                                            </td>
                                            <td><b>{{$Job->UserInfo->name}}</b></td>
{{--                                            <td>{!!$Job->Description!!}</td>--}}
                                            <td>
                                                <a target="_blank" href="{{route('AddCandidatePost',$Job->Token)}}" class="btn bg-secondary position-relative ">
                                                    <i class="material-icons ">add</i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('CandidateDetails',$Job->Token)}}" class="btn target-details-color position-relative ">
                                                    <i class="material-icons ">open_in_new</i>
                                                </a>
                                            </td>
                                            <td>{{$Job->created_at->toDateString()}}</td>
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


    function DualFun(DualData)
    {
        let AuthId = '{{auth()->user()->id}}';
        const SplitDual = DualData.split(',');
        let JobId = SplitDual[0];
        let ApprovalId = SplitDual[1];
        let JobStatus = SplitDual[2];

        let ChangeStatus = JobStatus == 'Pending' ? 'Done' : 'Pending';

        if(navigator.onLine == true )
        {
            if(AuthId == ApprovalId )
            {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '{{route('JobRequestChangeStatus')}}',
                    data: {'ChangeStatus': ChangeStatus, 'JobId': JobId,'ApprovalId':ApprovalId},
                    success: function(data){
                        if(data.code == 200 )
                        {
                            SnackAlert(data.message,'#fff','#8dbf42');
                        }else {
                            SnackAlert(data.message,'#fff','#e7515a');
                        }
                    }
                });
            }else {
                SnackAlert(`You can't do that action ......`,'#fff','#e7515a');
            }
        }else {
            SnackAlert('Check you are internet connection','','');
        }

    }



</script>

</body>
</html>

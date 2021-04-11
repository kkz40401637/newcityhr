
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
                    <h3 class="d-inline float-right" >အသုံးပြုခွင့်ပိတ်ပင်ထားသောအကောင့်များ</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        {{--                        <div class="widget-header">--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
                        {{--                                    <h4>အသုံးပြုသူ တစ်ဦးချင်း၏ အချက်အလက်များ</h4>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive mb-4">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>အမည်</th>
                                        <th>ဖုန်းနံပတ်</th>
                                        <th>အီးမေးလ်</th>
                                        <th>အမျိုးအစား</th>
                                        <th>အတည်ပြုချိန်</th>
                                        <th>ပြောင်းလဲချိန်</th>
                                        <th>ပြင်မည်</th>
                                        <th>ပယ်မည်</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Users as $Index => $User)
                                        <tr class="tr-{{$User->id}} ">
                                            <td><b>{{$Index+1}}</b></td>
                                            <td><b>{{$User->name}}</b></td>
                                            <td><b>{{$User->phone}}</b></td>
                                            <td><b>{{$User->email}}</b></td>
                                            <td>
                                                    <span class="badge text-white badge-pills p-2 {{$RoleColor[$User->role-1]}}">
                                                    {{ $UserRoles[$User->role-1]}}</span>
                                            </td>
                                            <td><b>{{$User->created_at->toDateString()}}</b></td>
                                            <td><b>{{$User->updated_at->diffForHumans()}}</b></td>
                                            <td>
                                                <a class="btn btn-primary position-relative " target="_blank" href="">
                                                    <i class="material-icons ">edit</i>
                                                </a>
                                            </td>
                                            <td>
                                                <button onclick="UserBanded({{$User->id}})" class="user-ban-btn{{$User->id}}  text-white btn bg-solid-red position-relative  ">
                                                    <i class="material-icons ">lock_open</i>
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


    function UserBanded(id)
    {
        $('.user-ban-btn'+id).prop('disabled', true);
        console.log(id);
        $.post("{{route('UserRecover')}}",
            {
                _token: csrf_token,
                UserId: id
            },
            function(data){

                console.log(data);
                if (data.code == 200 )
                {
                    $('.tr-'+id).fadeOut("slow");
                }else if (data.code == 500){
                    $('.user-ban-btn'+id).prop('disabled', true);
                }else {
                    $('.user-ban-btn'+id).prop('disabled', true);
                    alert('Try again');
                }

            });

    }


</script>


</body>
</html>

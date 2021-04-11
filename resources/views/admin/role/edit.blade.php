<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
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

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">
                <div class="col-sm-12 col-md-4 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            UPDATE ROLE PERMISSION
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <form action="{{route('UpdateRoleInfo',$RoleDb->Token)}}" class="form-sample" method="POST"  >
                                @csrf
                                <input type="text" name="Token"  value="{{$RoleDb->Token}}" hidden>
                                <p class="my-2">ROLE NAME<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">account_circle</i>
                                        </span>
                                    </div>
                                    <input type="text" value="{{$RoleDb->Name}}" class="form-control Title" name="Title" id="Title" placeholder="NAME" aria-label="notification" aria-describedby="basic-addon1">
                                </div>
                                <hr class="text-muted">
                                <p class="my-1">PERMISSION<p>
                                <table class="table side-bar-permission table-bordered mb-4">
                                    {{-- JS OUT PERMISSION HERE--}}
                                </table>
                                <button type="submit" class="btn save-department-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>
                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 layout-spacing">
                    <div class="card shadow-lg animated slideInRight" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            RECENT USER PERMISSION
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">NO</div></th>
                                        <th><div class="th-content">NAME</div></th>
                                        <th><div class="th-content">PERMISSION</div></th>
                                        <th><div class="th-content">EDIT</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($RecentRole as $Index =>  $Role)

                                        <tr>
                                            <td><div class="td-content ">{{$Index+1}}</div></td>
                                            <td><div class="td-content ">{{$Role->Name}}</div></td>
                                            <td>
                                                <div class="w-100 h-auto " >
                                                    @php
                                                        $DecodePermission = json_decode($Role->Permission);
                                                        count($DecodePermission);
                                                        foreach ($DecodePermission as $index => $Permission)

                                                            {
                                                               echo "<span class=' badge my-2 badge22754 badge-pills bg-warning'>$Permission</span>";
                                                            }
                                                    @endphp
                                                </div>
                                            <td>
                                                <a class="btn btn-primary position-relative " href="{{route('EditRoleInfo',$Role->Token)}}">
                                                    <i class="material-icons ">edit</i>
                                                </a>
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
<script>

    let RoleDb = <?php echo $RoleDb->Permission;?>;
    console.log(RoleDb);

    for (var s=0; s<SideBar.length; s++)
    {

        $('.side-bar-permission').append(`
                        <thead class="p-0 m-0" >
                            <tr class="p-0 m-0">
                                <th>
                                   <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                            <input  ${RoleDb.includes(SideBar[s])?'checked':''} name="permissions[]" value="${SideBar[s]}" type="checkbox" class="new-control-input"  >
                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;<b class="text-black">${SideBar[s]}</b>
                                        </label>
                                    </div>
                                </th>
                            </tr>
                        </thead>`);
    }


</script>

</body>
</html>

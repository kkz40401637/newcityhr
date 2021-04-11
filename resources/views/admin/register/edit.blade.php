
<link href="{{asset('admin-assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
<?php echo View::make ('admin.admin-layouts.head'); ?>
<style>
    .disabled-cursor{
        cursor: not-allowed !important;
        pointer-events: none;
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
<div class="main-container sidebar-closed" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
    <?php echo View::make ('admin.admin-layouts.side-bar'); ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">

                <div class="col-sm-12 col-md-6  col-lg-4 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            အကောင့် ပြင်ပေးမည်
                        </h5>
                        <div class="card-body form-permission " data-form-permission="0" >
                            @if (session('ErrorReturn'))
                                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                    <strong>  {{session('ErrorReturn')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif

                            <form class="form-sample" method="POST" action="{{route('UserUpdate')}}">
                                @csrf
                                <input type="hidden" name="user_token" value="{{$User->token}}" >
                                <p class="">အမည်</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >account_circle</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$User->name}}" autofocus="autofocus"  name="Name" placeholder="အမည်" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="">ဖုန်း</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                         <span class="input-group-text" id="basic-addon1">
                                             <i class="material-icons" >perm_phone_msg</i>
                                         </span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$User->phone}}" name="Phone" placeholder="ဖုန်း" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="">အီးမေးလ်</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >email</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$User->email}}" name="Email" placeholder="အီးမေးလ်" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class=""> အကောင့် အမျိုးအစား</p>
                                <input readonly class="form-control  mb-3" value="{{$UserRole[$User->role-1]}}">
                                <button type="submit"  class="btn  theme-bg theme-color mt-2 col-12">သိမ်းမည်</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



</div>
</div>

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>

<script src="{{asset('admin-assets/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/blockui/custom-blockui.js')}}"></script>

<script>

    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    var user_role = $(".user-role").select2({
        allowClear: true
    });

</script>

</body>
</html>

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

                <div class="col-sm-12 col-md-6  col-lg-6 layout-spacing ">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD BUSINESS UNIT
                        </h6>
                        <div class="card-body form-permission p-5" data-form-permission="0" >
{{--                            <div class="form-group animated zoomIn" id="global-error-div" >--}}
{{--                                <div class="alert alert-light-danger my-1" role="alert">--}}
{{--                                    <button type="button" class="close" data-dismiss="" aria-label="Close">--}}
{{--                                        <i onclick="CloseAlert()" class="material-icons text-danger">clear</i>--}}
{{--                                    </button>--}}
{{--                                    <strong>Danger !</strong>Nay kaung larrr ?<b id="global-error-txt"></b>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <form id="company-info-saving" class="form-sample" method="POST"  >
                                @csrf
                                <p>Click To Chose Business Unit Photo</p>
                                <center><img src="{{asset('admin-assets/img/bu/original/bu-icon.png')}}"
                                             style="height: 150px; width: 250px; " id="DisplayImageTag"   alt="" ></center>

                                <input class="btn btn-dark p-0 m-0"  type="file" name="image" id="FileInputVal" style="visibility: hidden;" />
                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">


                                <p class="my-2">NAME</p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >business</i>
                                        </span>
                                    </div>
                                    <input type="text" value="AYA ( Banking Group )" class="form-control" autofocus="autofocus" required name="Name" id="Name" placeholder="NAME" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group my-3">
                                    <textarea name="Description" id="Description" class="form-control" placeholder="COMPANY ADDRESS" >U Yae Khae Str 343 Mayangone Yangon,Myanmar</textarea>
                                </div>

                                <button type="submit" class="btn save-bu-info-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

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
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script>


    let upload =$('#FileInputVal');
    $("#DisplayImageTag").on('click',function () {
        upload.click();
    });
    upload.on("change",function (e) {
        for (let i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            let file = e.originalEvent.srcElement.files[i];
            let reader = new FileReader();
            reader.onloadend = function() {
                $("#DisplayImageTag").attr("src","");
                $("#DisplayImageTag").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
        $('#FileChange').attr('value',1);
    });

    const OriginalPicSrc = '{{asset('admin-assets/img/bu/original/bu-icon.png')}}';

    const UiFun = (condition) =>
    {
        if(condition == true)
        {
            $('.save-bu-info-btn').prop('disabled', true);
            $('.linear-activity').removeClass('d-none');
        }else {
            $('.save-bu-info-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    }


    $('#company-info-saving').submit(function(e)
    {
        // $('.save-bu-info-btn').prop('disabled', true);
        e.preventDefault();
        if (navigator.onLine)
        {
            UiFun(true);
            let AllFormData = new FormData(this);
            $.ajax({
                type:'POST',
                _token: csrf_token,
                url: "{{route('SaveBusinessUnitInfo')}}",
                data: new FormData(this),
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    if(data.code == 200)
                    {

                        SnackAlert(data.message,'white','#8dbf42');
                        $('input').val('');
                        $('textarea').val('');
                        $('#DisplayImageTag').attr('src',OriginalPicSrc);
                        // $('.save-bu-info-btn').prop('disabled', false);
                        UiFun(false);

                    }else{
                        UiFun(false);
                        SnackAlert(data.message,'white','#e2a03f');
                    }
                }
            });

        }else {
            SnackAlert('Check you are internet connection ... ','white','#e7515a');
            UiFun(false);
        }


    });

</script>

</body>
</html>

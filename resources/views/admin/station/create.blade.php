<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- END THEME GLOBAL STYLES -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->

<link rel="stylesheet" href="{{asset('admin-assets/plugins/editors/markdown/simplemde.min.css')}}">


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

            @if(count($BusinessUnitDb) >= 1 )
            <div class="row layout-top-spacing ">

                <div class="col-sm-12 col-md-7   layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW BRANCH
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <form id="station-info-saving" class="form-sample" method="POST"  >
                                @csrf
                                <p>Click To Chose Branch Photo</p>
                                <center>
                                    <img src="{{asset('admin-assets/img/station/station.jpg')}}"
                                                style="height: 150px; width: 150px; " id="DisplayImageTag"   alt="" >
                                </center>

                                <input class="btn btn-dark p-0 m-0"  type="file" name="images" id="FileInputVal" style="visibility: hidden;" />
                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">

                                <div class="input-group form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;BRANCH NAME</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >business</i>
                                        </span>
                                            </div>
                                            <input id="StationName" type="text"  class="form-control" name="StationName" value="{{ old('StationName') }}" required autocomplete="StationName" placeholder="StationName" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;PHONE NUMBER</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >stay_current_portrait</i>
                                            </span>
                                            </div>
                                            <input type="number" class="form-control" autofocus="autofocus" id="PhoneNumber" name="PhoneNumber" value="{{ old('StationName') }}" placeholder="Phone Number" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp BUSINESS UNIT</p>
                                        <div class="input-group mb-2 col">
                                            <select id="BuID" name="BuID"  class="form-control" >
                                                @foreach($BusinessUnitDb as $BusinessUnit)
                                                    <option value="{{$BusinessUnit->id}}" >{{$BusinessUnit->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;FAX NUMBER</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >fact_check</i>
                                                </span>
                                            </div>
                                            <input type="number "  class="form-control" autofocus="autofocus" id="FaxNumber" name="FaxNumber" value="{{ old('FaxNumber') }}" placeholder="Fax Number" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;CURRENCY </p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >monetization_on </i>
                                            </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="CurrencyUse" name="CurrencyUse" value="{{ old('CurrencyUse') }}" placeholder="US dollar" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;CURRENCY SYMBOL</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >repeat_one</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="CurrencySymbol" name="CurrencySymbol" value="{{ old('CurrencySymbol') }}" placeholder="Currency Symbol" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;WEBSITE </p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >http</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="WebSite" name="WebSite" value="{{ old('WebSite') }}" placeholder="http://" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ADDRESS</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >attach_email</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="EmailAddress" name="EmailAddress" value="{{ old('EmailAddress') }}" placeholder="Email Address" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-2">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4> ADITIONAL INFORMATION </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                    <textarea class="form-control" name="AdditionalNote" id="demo1" value="{{ old('AdditionalNote') }}">
                                    </textarea>

                                    </div>
                                </div>

                                <button type="submit" class="btn save-station-info-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">

                </div>

            </div>
            @endif

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<?php echo View::make ('admin.admin-layouts.footer-script'); ?>
<script src="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/editors/markdown/simplemde.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/editors/markdown/custom-markdown.js')}}"></script>

<script>

    $('#BuID').select2();
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


    let companyDb = <?php echo $BusinessUnitDb; ?>;
    console.log(companyDb);
    const AddBusinessUnit = '{{route('AddBusinessUnit')}}';

    if(companyDb.length == 0  )
    {
        SnackAlert( 'Please create company first ...','white','#e7515a' );
        setTimeout(function(){ window.location.href = AddBusinessUnit; }, 3000);
    }


    const GetInputVal = () =>
    {
        let StationType = $('#StationType').val();
        let StationName = $('#StationName').val();
        let ParentStation = $('#ParentStation').val();
        let CurrencyUse = $('#CurrencyUse').val();
        let CurrencySymbol = $('#CurrencySymbol').val();
        let Address = $('#Address').val();
        let PhoneNumber = $('#PhoneNumber').val();
        let FaxNumber = $('#FaxNumber').val();
        let EmailAddress = $('#EmailAddress').val();
        let WebSite = $('#WebSite').val();
        let AdditionalNote = $('#AdditionalNote').val();


    // console.log(
    //     GetInputVal.StationType+
    //     );

        return  InputVal = {
            'StationType':StationType,'StationName':StationName,'ParentStation':ParentStation,'CurrencyUse':CurrencyUse,
            'CurrencySymbol':CurrencySymbol,'Address':Address,'PhoneNumber':PhoneNumber,'FaxNumber':FaxNumber,'EmailAddress':EmailAddress,
            'WebSite':WebSite,'AdditionalNote':AdditionalNote};
    }

    const OriginalPicSrc = '{{asset('admin-assets/img/station/station.jpg')}}';

    const UiFun = (condition) =>
    {
        if(condition == true)
        {
            $('.save-station-info-btn').prop('disabled', true);
            $('.linear-activity').removeClass('d-none');
        }else {
            $('.save-station-info-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    }


    $('#station-info-saving').submit(function(e)
    {
        e.preventDefault();
        const InputVal = GetInputVal();
        if (navigator.onLine)
        {
            // UiFun(true);
            let AllFormData = new FormData(this);
            $.ajax({
                type:'POST',
                _token: csrf_token,
                url: "{{route('SaveStationInfo')}}",
                data:new FormData(this),
                InputVal: InputVal,
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
                        UiFun(false);

                    }else{
                        UiFun(false);
                        SnackAlert(data.message,'white','#e2a03f');
                    }
                }
            });

        }else {
            SnackAlert('အင်တာနက်ချိတ်ဆက်မူ့ပြဿနာဖြစ်နေပါသည်','','');
            UiFun(false);

        }

    });

</script>
</body>
</html>

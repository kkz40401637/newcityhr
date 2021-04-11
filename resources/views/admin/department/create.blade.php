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

                @if( count($Stations) >= 1)
                <div class="col-sm-12 col-md-5  col-lg-7 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW DEPARTMENT
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <form class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('status')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">BUSINESS UNIT</p>
                                        @error('BuID')
                                        <span class="alert alert-warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group my-2">
                                            <select  class="form-control CompanyOnChange  basic BuID" name="BuID" >
                                                @foreach ($BusinessUnit as $key => $BU)
                                                    <option value="{{$BU->id}}">{{$BU->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">STATION</p>
                                        @error('StationID')
                                        <span class="alert alert-warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group my-2">
                                            <select class="form-control StationID  basic" name="StationID" >
                                                @foreach ($Stations as $key => $Station)
                                                    <option value="{{$Station->id}}">{{$Station->StationName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <p class="my-2">DEPARTMENT<p>
                                @error('Name')
                                <span class="alert alert-warning" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">account_circle</i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control DepartmentName" name="Name" id="Name" placeholder="DEPARTMENT NAME" value="{{ old('DEPARTMENT NAME') }}" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p class="my-2">INITIAL<p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">add_business</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control Initial" name="Initial" id="Initial" placeholder="INITIAL" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <p>Additional Information</p>
                                <div class="input-group my-3">
                                    <textarea name="Note" id="Note" class="form-control AddtionalNote" placeholder="NOTE" value="{{ old('NOTE') }}">A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.
                                        Though not required by the syntax of any language,</textarea>
                                </div>

                                <button type="button" class="btn save-department-btn theme-bg theme-color mt-2 col-12">SAVE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">
                </div>
                @endif

            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>

<script>
    var ss = $(".basic").select2({
        tags: true,
    });

    let StationDb = <?php echo $Stations; ?>;
    console.log(StationDb);
    const StationAddRoute = '{{route('AddStation')}}';

    if(StationDb.length == 0  )
    {
        SnackAlert( 'Please create station first ...','white','#e7515a' );
        setTimeout(function(){ window.location.href = StationAddRoute; }, 3000);
    }

    $('.CompanyOnChange').change(function (){

        $('.linear-activity').removeClass('d-none');
        $('.save-department-btn').prop('disabled', true);
        console.log($(this).val());

        if(navigator.onLine == true)
        {
            $.post("{{route('SearchStationInOnchange')}}",
                {
                    _token: csrf_token,
                    CompanyId: $(this).val()
                },
                function(data){
                    console.log(data);
                    if (data.code == 200 )
                    {
                        $('.save-department-btn').prop('disabled', false);
                        $('.linear-activity').addClass('d-none');
                        $('.StationID').empty();
                        let Station = data.station;
                        if (Station.length >= 1 )
                        {
                            for (var i=0; i<Station.length; i++ )
                            {
                                console.log(Station[i].StationName);
                                $('.StationID').append(`<option value="${Station[i].id}">${Station[i].StationName}</option>`);
                            }
                        }

                    }
                });

        }else {
            SnackAlert('အင်တာနက်ချိတ်ဆက်မူ့ပြဿနာဖြစ်နေပါသည်','','');
        }



    });


    $('.save-department-btn').click(function (){

        $('.linear-activity').removeClass('d-none');
        $('.save-department-btn').prop('disabled', true);

        let BuID = $('.BuID').val();
        let StationID = $('.StationID').val();
        let DepartmentName = $('.DepartmentName').val();
        let Initial = $('.Initial').val();
        let AddtionalNote = $('.AddtionalNote').val();

        console.log( BuID+' -- '+StationID+' -- '+DepartmentName+' -- '+Initial +' -- '+AddtionalNote );

        if( StationID >= 1  )
        {
            if (navigator.onLine == true)
            {
                $.post("{{route('AddDepartmentStore')}}",
                    {
                        _token: csrf_token,
                        BuID : BuID,
                        StationID : StationID,
                        DepartmentName : DepartmentName,
                        Initial : Initial,
                        AddtionalNote : AddtionalNote,
                    },
                    function(data){
                        if (data.code == 200 )
                        {
                            $('input').val('');
                            $('.save-department-btn').prop('disabled', false);
                            $('.linear-activity').addClass('d-none');
                            SnackAlert(data.message,'white','#8dbf42');
                        }else {
                            console.log(data);
                            $('.save-department-btn').prop('disabled', false);
                            $('.linear-activity').addClass('d-none');
                        }
                    });

            }else{
                SnackAlert('Check you are internet connection ... ','white','#e7515a');
                $('.save-department-btn').prop('disabled', false);
                $('.linear-activity').addClass('d-none');
            }
        }else {
            SnackAlert('You must to choise one station .. ','white','#e7515a');
            $('.save-department-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    });



</script>
</body>
</html>

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
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/editors/quill/quill.snow.css')}}">
<!--  END CUSTOM STYLE FILE  -->
<style>
    #cke_26,#cke_32{
        display: none !important;
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

                <div class="col-sm-12 col-md-5  col-lg-5 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            UPLOAD ORDER
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <form id="station-news-form" class="form-sample"  enctype="multipart/form-data" >
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('status')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">live_help</i>
                                        </span>
                                    </div>
                                    <input type="text" value="Focus on your work" class="form-control Title" value="50" placeholder="NEWS TITLE"  aria-label="notification" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mt-3 " >
                                    <b class="StationError d-none text-danger">CHOICE USER ....</b>
                                    <select class="form-control StationID" style="border: 1px solid red !important;"  multiple="multiple" >
                                        @foreach($UserDb as $Index => $User)
                                            <option value="{{$User->id}}" >{{$User->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-2 " >
                                    <textarea name="NewsDescription" class="form-control NewsDescription"  rows="10" cols="80">When you are coding don't use social media ..........</textarea>
                                </div>

                                <button type="submit" class="btn save-news-btn theme-bg theme-color mt-2 col-12">POST</button><br>
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
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--<script src="{{asset('admin-assets/plugins/editors/quill/quill.js')}}"></script>--}}
{{--<script src="{{asset('admin-assets/plugins/editors/quill/custom-quill.js')}}"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
     var ss = $(".StationID").select2({
         tags: true,
     });


     CKEDITOR.replace( 'NewsDescription');

     let OfficeOrders = '{{route('OfficeOrderList')}}';


     let Error = [];

     $('#station-news-form').on('submit',function (e){

         e.preventDefault();

         let Title = $('.Title').val();
         let StationID = $('.StationID').val();
         let NewsDescription = $('.NewsDescription').val();

         if(StationID == '')
         {
             $('.StationError').removeClass(' d-none');
         }else {
             $('.StationError').addClass('d-none');
             console.log(Title +' -- '+StationID +' -- '+NewsDescription );
             console.log(StationID);
             for (var i =0; i<StationID.length; i++ )
             {
                 console.log(parseInt(StationID[i]));
                 if(Number.isInteger(parseInt(StationID[i])) == false )
                 {
                     Error.push('something_wrong');
                 }else {
                     Error = [];
                 }
             }
             console.log(Error);
             if(Error.length >=1 )
             {
                 $('.StationError').removeClass(' d-none');
             }else {

                 $('.StationError').addClass(' d-none');
                 if (navigator.onLine)
                 {
                     $.post("{{route('OfficeOrder')}}",
                         {
                             _token: csrf_token,
                             Title: Title,
                             StationID: StationID,
                             NewsDescription: NewsDescription,

                         },
                         function(data){
                             console.log(data);
                             //
                             if (data.code == 200)
                             {
                                 $('input').val('');
                                 $('.cke_editable').html('');
                                 SnackAlert(data.message,'white','#8dbf42');
                                 setTimeout(function(){ window.location.href = OfficeOrders; }, 2000);
                             }


                         });

                 }else {
                     SnackAlert('Check you are internet connection ... ','white','#e7515a');
                 }

             }
         }

     });

</script>
</body>
</html>

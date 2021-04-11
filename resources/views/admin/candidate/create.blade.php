<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

{{--<!-- BEGIN THEME GLOBAL STYLES -->--}}
<link href="{{asset('admin-assets/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
{{--<link href="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">--}}
{{--<!-- END THEME GLOBAL STYLES -->--}}
{{--<!--  BEGIN CUSTOM STYLE FILE  -->--}}
<link href="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
{{--<!--  END CUSTOM STYLE FILE  -->--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
<link href="{{asset('admin-assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('admin-assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />

<style>
    #cke_26{
        display: none !important;
    }
    .original-frame
    {
        border-style: dotted !important;
        border: 1px dashed black !important;
        border-radius: 7px !important;
        padding: 10px 4px !important;
    }
    .JobRequestIconControl{
        font-size: 100px !important;
        color: #0f0c29;
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

                <div class="col-sm-12 col-md-7 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW JOBCANDIDATE
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">
                            <form action="{{route('SaveCandidatePost')}}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('success')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>  {{session('error')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

{{--                                <p>Click To Chose Emplyoee Photo</p>--}}
{{--                                <center><img src="{{asset('admin-assets/img/candidate/human.png')}}"--}}
{{--                                             style="height: 150px; width: 150px; " id="DisplayImageTag"   alt="" ></center>--}}

{{--                                <input class="btn btn-dark p-0 m-0"  type="file" name="image" id="FileInputVal" style="visibility: hidden;" />--}}
{{--                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">--}}

                                <div class="row">
                                    @error('Name')
                                    <p class="text-danger d-inline">Place Check Your Name</p>
                                    @enderror
                                    <input type="hidden" name="JobReqId" value="{{$JobReqId}}">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">NAME </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >account_circle</i>
                                        </span>
                                            </div>
                                            <input  type="text" value="Aung Myo Htike"  class="form-control" name="Name" value="{{ old('Name') }}" required autocomplete="StationName" placeholder="NAME" autofocus>
                                        </div>
                                    </div>
                                    @error('Position')
                                    <p class="text-danger d-inline">Place Check Your Position</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOB POSITION </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >upgrade</i>
                                        </span>
                                            </div>
                                            <input type="text" value="Senior Account LCCI ( LV 3 )"  class="form-control" name="Position" value="{{ old('Position') }}" placeholder="APPLY JOB POST" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    @error('NrcNumber')
                                    <p class="text-danger d-inline">Place Check Your NrcNumber</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">NRC NUMBER </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >format_list_numbered_rtl</i>
                                        </span>
                                            </div>
                                            <input type="text" value="8/PaKhaKa(N)48373"  class="form-control" name="NrcNumber" value="{{old('NrcNumber') }}"  placeholder="NRC NUMBER" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        @error('DepartmentID')
                                        <p class="text-danger d-inline">Place Check Your Jobfield</p>
                                        @enderror
                                        <p class="">DEPARTMENT<p>
                                        <div class="input-group " >
                                            <select name="DepartmentID" class="form-control Department" >
                                                @foreach($DepartmentDb as $Index => $Department)
                                                    <option {{$JobRequestDb->DepartmentID==$Department->id?"selected":''}} value="{{$Department->id}}" >{{$Department->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    @error('JobType')
                                    <p class="text-danger d-inline">Place Check Your EmployeeType</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">JOB TYPE </p>
                                        <div class="input-group mb-2" >
                                            <select name="JobType" class="form-control JobType" >
                                                <option value="Full Time" >Full Time</option>
                                                <option value="Work From Home" >Work From Home</option>
                                                <option value="Part Time" >Part Time</option>
                                                <option value="Fullstack" >Fullstack</option>
                                                <option value="Contract" >Contract</option>
                                            </select>
                                        </div>
                                    </div>
                                    @error('ExpectedSalary')
                                    <p class="text-danger d-inline">Place Check Your ExpectedSalary</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">EXPECTED SALARY</p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >attach_money</i>
                                                </span>
                                            </div>
                                            <input type="text" value="$500"  class="form-control" name="ExpectedSalary" value="{{ old('ExpectedSalary') }}" placeholder="EXPECTED SALARY" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    @error('DateOfplace')
                                    <p class="text-danger d-inline">Place Check Your DateOfplace</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">DATE OF PLACE </p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >date_range</i>
                                        </span>
                                            </div>
                                            <input id="number" type="text" value="YANGON"  class="form-control" name="DateOfplace" value="{{ old('DateOfplace') }}"  placeholder="DATE OF PLACE" >
                                        </div>
                                    </div>
                                    @error('MaritalStatus')
                                    <p class="text-danger d-inline">Place Check Your DateOfplace</p>
                                    @enderror
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">MARITAL STATUS  </p>
                                        <div class="input-group my-3 " >
                                            <select name="MaritalStatus" class="form-control MaritalStatus" >
                                                <option value="Single" >Single</option>
                                                <option value="Engaged" >Engaged</option>
                                                <option value="Married" >Married</option>
                                                <option value="In a civil union" >In a civil union</option>
                                                <option value="In a domestic partnership" >In a domestic partnership</option>
                                                <option value="In an open relationship" >In an open relationship</option>
                                                <option value="It's complicated" >It's complicated</option>
                                                <option value="Separated" >Separated</option>
                                                <option value="Divorced" >Divorced</option>
                                                <option value="Widowed" >Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">NATIONALITY </p>
                                        <div class="input-group my-2 ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >flag</i>
                                                </span>
                                            </div>
                                            <input  type="text" value="Myanmar"  class="form-control" name="Region" value="{{ old('Region') }}" placeholder="NATIONALITY" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">WORKING EXPERIENCE YEARS </p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >upgrade</i>
                                                </span>
                                            </div>
                                            <input type="text" value="3+Year"  class="form-control" name="Experience" placeholder="WORKING EXPERIENCE YEARS" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">REASON TO JOIN  </p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >sports_hockey</i>
                                            </span>
                                            </div>
                                            <input  type="text" value="REASON TO JOIN"  class="form-control" name="Reason" value="{{ old('Reason') }}" placeholder="REASON TO JOIN" >
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">RELIGION  </p>
                                        <div class="input-group my-2">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >how_to_reg</i>
                                            </span>
                                            </div>
                                                <input type="text" value="Buddhism"  class="form-control" name="Religion" value="{{ old('Religion ') }}" placeholder="RELIGION" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="">HAVE DRIVING LICENSE? </p>
                                        <div class="input-group mb-3 " >
                                            <select name="License" class="form-control License" >
                                                <option value="Yes" >Yes</option>
                                                <option value="NO" >NO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <p class="">GENDER </p>
                                        <div class="input-group mb-3 " >
                                            <select name="Gender" class="form-control Gender" >
                                                <option value="Male" >Male</option>
                                                <option value="Female" >Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <p>CV FORM UPLOAD</p>
                                <div class="custom-file mb-4">
                                    <input type="file" name="CvFormUpload" class=" bg-primary custom-file-input" >
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>

                                <p>Detail Description</p>
                                <textarea id="Description" name="Description" class="form-control Description"  rows="10" cols="80">This is my textarea to be replaced with CKEditor 4.</textarea>

                                <button type="submit" class="btn save-meeting-btn theme-bg theme-color mt-3 col-12">SAVE</button><br>
                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-5 layout-spacing">
                    <div class="card shadow-lg animated slideInRight" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            JOB REQUEST CARD
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0">

                            <div class="IconControlDiv d-flex justify-content-center p-0 m-0">
                                <i class="JobRequestIconControl animated slideInDown material-icons">work</i>
                            </div>
{{--                            <div class="JobReqRow"></div>--}}

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>TITLE :</b>
                                </div>
                                <div class="col-6">
                                    <b>{{$JobRequestDb->Title}}</b>
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>POSITION :</b>
                                </div>
                                <div class="col-6">
                                    <b>{{$JobRequestDb->Position}}</b>
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>SALARY RANGE : </b>
                                </div>
                                <div class="col-6">
                                    <b class="text-danger">{{$JobRequestDb->RangeFrom .' -- '.$JobRequestDb->RangeTo }}</b>
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>REQUEST DEPARTMENT : </b>
                                </div>
                                <div class="col-6">
                                    <span class="badge bg-dark m-1">{{$JobRequestDb->DepartmentInfo->Name}}</span>
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>GENDER : </b>
                                </div>
                                <div class="col-6">
                                    @foreach(json_decode($JobRequestDb->Gender) as $Index)
                                        <span class="badge bg-warning ">{{$Index}}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>DRIVING LICENSE : </b>
                                </div>
                                <div class="col-6">
                                    <span class="badge bg-secondary ">{{$JobRequestDb->DrivingLicense}}</span>

                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>QUALIFICATION : </b>
                                </div>
                                <div class="col-6">
                                    @foreach(json_decode($JobRequestDb->qualification) as $Name)
                                        <span class="badge badge-success bg-success m-1">{{$Name}}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row layout-top-spacing">
                                <div class="col-6">
                                    <b>EMPLYOEE TYPE : </b>
                                </div>
                                <div class="col-6">
                                    <span class="badge badge-success bg-primary">{{$JobRequestDb->EmployeeType}}</span>
                                </div>
                            </div>

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
<script src="{{asset('admin-assets/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin-assets/plugins/noUiSlider/nouislider.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>

    $('.Department').select2();
    $('.Gender').select2();
    $(".Department").select2();
    $('.MaritalStatus').select2();
    $('.License').select2();
    $('.JobType').select2();
    // let upload =$('#FileInputVal');
    // $("#DisplayImageTag").on('click',function () {
    //     upload.click();
    // });
    // upload.on("change",function (e) {
    //     for (let i = 0; i < e.originalEvent.srcElement.files.length; i++) {
    //         let file = e.originalEvent.srcElement.files[i];
    //         let reader = new FileReader();
    //         reader.onloadend = function() {
    //             $("#DisplayImageTag").attr("src","");
    //             $("#DisplayImageTag").attr("src",reader.result);
    //         }
    //         reader.readAsDataURL(file);
    //     }
    //     $('#FileChange').attr('value',1);
    // });


    CKEDITOR.replace( 'Description');

    // var f1 = flatpickr(document.getElementById('dateofbirth'));
    // var f2 = flatpickr(document.getElementById('DateOfMarriage'));

    Object.size = function(obj) {
        var size = 0,
            key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    };

    let JobRequestDb = <?php echo $JobRequestDb; ?>;
    console.log(JobRequestDb);

    // var size = Object.size(JobRequestDb);
    // console.log(size);

    // for (var J =0; J<5; J++)
    // {
    //     $('.JobReqRow').append(`<div class="row layout-top-spacing">
    //                             <div class="col-6">
    //                                 <b>TITLE :</b>
    //                             </div>
    //                             <div class="col-6">
    //                                 <b>${JobRequestDb.Title}</b>
    //                             </div>
    //                         </div>`);
    // }

</script>
</body>
</html>

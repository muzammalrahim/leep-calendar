@extends('layout.default')

@section('content')

                  @if(session()->has('errorMsg'))
                      <div class="alert alert-danger">
                          <ul style="text-align: center;">
                              {{session('errorMsg')}}
                          </ul>
                      </div>
                  @endif
                  @if(session()->has('successMsg'))
                      <div class="alert alert-success">
                          <ul style="text-align: center;">
                              {{session('successMsg')}}
                          </ul>
                      </div>
                  @endif

    <div class="row">
        <div  class='card-header col-lg-12 col-xxl-12'>
            <h6 style='text-align:center;'>Upload Events</h6>
        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class='card-body'>
                <div class="col-lg-12 col-xxl-12">
                    <form  method="post" action="{{url('addBtcAddress')}}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-4" style="padding-top: 5px;">
                                <div class="form-group">
                                    <label>Upload Event (csv file)
                                    <span class="text-danger">*</span></label>
                                    <input type="file"  name="file" class="form-controlss">
                                    <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                                </div>
                            </div>
                            <div class="form-group " style=" text-align: center;">
                                <input type="submit" class="btn btn-primary mr-2  form-control uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4" value="Upload" class="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Scripts Section --}}
@section('scripts')








{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script>

    <!--end::Global Theme Bundle-->
        <!--begin::Page Vendors(used by this page)-->
{{--         <script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js')}}"></script>

        begin::Page Scripts(used by this page)
        <script src="{{ asset('/js/pages/crud/datatables/basic/paginations.js')}}"></script>
 --}}        <!--end::Page Scripts-->
   <script type="text/javascript"> 

// $.ajaxSetup({
// });
        // $("#searchEvents").on ('submit', function (e) {
     //         alert('za');
     //         var e_name=document.getElementById('e_name').value;
     //         // e.preventDefault();  
     //         $.ajax({
     //         type:'POST',
     //            // url: "searchEvents",
     //            headers: {
     //                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     //            },
     //            data:{'name':e_name},

     //           {{-- data:'_token = <?php echo csrf_token() ?>', --}}
     //           success:function(data) {
     //                table=document.getElementById('kt_datatable');
     //                // table.innerHTML = "";
     //                var classs=document.getElementsByClassName('datatable-body');
     //                classs.childnode();
     //                // var row = document.getElementsByTagName('tbody').innerHTML='';
     //                // table.innerHTML = "";
     //                data=data.msg;
     //                for(var d=0; d<data.length; d++){

     //                    var row = table.insertRow(d);
     //                    var n=//document.getElementById('name').innerHtml=
     //                        data[d].name;
     //                    var c=//document.getElementById('country1').innerHtml=
     //                        data[d].country1;
     //                    var sd=//document.getElementById('s_date').innerHtml=
     //                        data[d].s_date;
     //                    var ed=//document.getElementById('url').innerHtml=
     //                        data[d].url;
     //                      // var row = table.insertRow(r+1);
     //                      var cell1 = row.insertCell(0);
     //                      var cell2 = row.insertCell(1);
     //                      var cell3 = row.insertCell(2);
     //                      var cell4 = row.insertCell(3);
     //                      var cell5 = row.insertCell(4);
     //                      var cell6 = row.insertCell(5);
     //                      var cell7 = row.insertCell(6);
     //                      var cell8 = row.insertCell(7);
     //                      cell1.innerHtml=n;
     //                      alert(cell1);
     //                      cell2.innerHtml=c;
     //                      cell3.innerHtml=sd;
     //                      cell4.innerHtml=ed;
     //                      cell5.innerHtml=ed;
     //                      cell6.innerHtml=ed;
     //                      cell7.innerHtml=ed;
     //                      cell8.innerHtml=ed;
     //                    // tr.addChild(n);
     //                    // tr.addChild(c);
     //                    // tr.addChild(sd);
     //                    // tr.addChild(ed);
     //                    // table.innerHtml=tr;
     //            }
     //            // document
     //            // console.log(data);
     //            // var data=data.msg;
     //            // foreach (data as d)
     //            // alert(d->name);
     //              // $("#msg").html(data.msg);
     //           }
     //         });
     //    });
     // </script> 
@endsection

 
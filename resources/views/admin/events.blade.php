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
        <div class="col-lg-12 col-xxl-12">
            <form  method="post" action="{{url('admin/searchEvents')}}"  enctype="multipart/form-data" id='searchEvents' >
                @csrf
                <div class="card card-custom gutter-b example example-compact col-md-12"  style="padding-top: 5px;">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="e_name" placeholder="Ener Name" class="form-control">
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="form-group col-md-4">
                            <label>Start Date  
                            <span class="text-danger">*</span></label>
                            <div class="input-group date">
                                <input type="text" name='startDate' placeholder="Start Date" class="form-control" id='kt_datepicker_2' readonly="">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>                            
                            </div>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="form-group col-md-4">
                            <label>End Date  
                            <span class="text-danger">*</span></label>
                            <!-- <input type="date" name='endDate' class="form-control"> -->
                            <div class="input-group date">
                                <input type="text" name='endDate' placeholder="End Date" class="form-control" id='kt_datepicker_2' readonly="">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>                            
                            </div>
                        </div> 
                        <div class="form-group col-md-4">
                            <label>Country
                            <span class="text-danger">*</span></label>
                            <select class="form-control" aria-label="Default select example" name="country">
                                <option class="active" value="">All</option>
                                    @foreach(App\Models\events::distinct()->get(['name']) as $us)
                                        <option value="{{$us->name}}">
                                            {{$us->name}}
                                        </option>
                                    @endforeach
                                
                            </select>
                        </div>                
                        <div class="form-group col-md-4">
                            <label>Event Type
                            <span class="text-danger">*</span></label>
                            <select class="form-control" aria-label="Default select example" name="type">
                                <option value="">Select</option>
                                <option value="Same">Same</option>
                                <option value="Changes">Changes</option>
                            </select>                            
                        </div>
                        <div class="form-group col-md-4">
                            <label>User Name 
                            <span class="text-danger">*</span></label>
                            <select class="form-control" aria-label="Default select example" name="user">
                                <option value="">Select</option>
                                @foreach(App\Models\User::all() as $u)
                                    <option value="{{$u->id}}">
                                        {{$u->fname}}@isset($u->lname)-{{$u->lname}}@endif
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <div style="text-align: center;">
                                <label > Featured Events <span class="text-danger">*</span></label>
                            </div>
                            <select class="form-control" aria-label="Default select example" name="fetured">
                                <option value="">Select</option>
                                <option value="featured">Featured</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <div style="text-align: center;">
                                <label > Events Status<span class="text-danger">*</span></label>
                            </div>
                            <select class="form-control" aria-label="Default select example" name="status">
                                <option value="">Select</option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>

                        <div class="card-footer col-md-12" style="text-align: center;">
                            <input type="submit" class="btn btn-primary mr-2 " value="Search" class="form-control">
                        </div>
                    </div>

                </div>
            </form>
<!--         </div>

        <div class="col-lg-12"> -->
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                </div>
            </div>
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">Event Name</th>
                        <th title="Field #2">Country</th>
                        <th title="Field #3">Start Date</th>
                        <th title="Field #">End Date</th>
                        <th title="Field ">Static Change</th>
                        <th title="Field ">Event Type</th>
                        <th title="Field ">Feature Type</th>
                        <th title="Field ">Publish Type</th>
                        <th title="Field ">Event URL</th>
                        <th title="Field ">User</th>
                        <th title="Field ">Actions</th>
                    </tr>
                    </thead>
                    <tbody id='event_body zah'>
                        @foreach($events as $e)
                    <tr>
                        <td id="name" > {{$e->name}}    </td>
                        <td id='country1'>{{$e->states}}</td>
                        <td id='m_start'>{{$e->start_month}}-{{$e->start_day}}-{{$e->start_year}}</td>
                        <td id='d_end'>{{$e->end_month}}-{{$e->end_day}}-{{$e->end_year}}</td>
                        <td id='static_change'>{{$e->static_change}}</td>
                        <td id='feature'>@isset($e->feature->id)<a href="{{URL::asset('admin/unFeature/'.$e->id) }}" class="btn-danger">UnFeature</a>@else <a href="{{URL::asset('admin/feature/'.$e->id) }}">Feature</a>@endif</td>
                        <td id='publish'>@if($e->status=="Pending")<a href="{{URL::asset('admin/publishEvent/'.$e->id) }}" >Publish</a>@else <a href="{{URL::asset('admin/unPublishEvent/'.$e->id) }}" class="btn-danger">UnPublish</a>@endif</td>
                        <td id='type'>{{$e->type}}</td>
                        <td id="url">{{$e->url}}</td>
                        <td id="url">@isset($e->user->email){{$e->user->fname}} {{$e->user->lname}}@endif</td>
                        <td> 
                            <a href="{{ route('admin.event.edit',["id"=>Crypt::encrypt($e->id)]) }}">
                              <i class="fas fa-edit fa-2x text-primary"></i>
                            </a> 
                            {{-- / 
                            <a onclick="return confirm('Do you want to delete the page?')" href="#">
                                <i class="fas fa-trash fa-2x text-danger"></i>
                            </a>  --}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

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
    {{-- <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script> --}}

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

 
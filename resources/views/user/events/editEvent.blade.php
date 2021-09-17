{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')


<!-- update-steps -->
{{-- @dd($event); --}}
<div class="add-event-wrapper">
  <div class="event-heading">
    <h4>Add an Event</h4>
  </div>
<div class="container-fluid">
  <div class="row">

      <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pb-0  mb-3">
              
              <form id="msform" method='POST' class="" action="{{URL::asset('editEventFrom')}}"  onsubmit = "eventFormValidation();">
              	@csrf
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
                  @if ($errors->any())
                      <div class="alert alert-danger  col-12">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <!-- progressbar -->
                  <ul id="progressbar">
                      <li class="active" id="account"><strong>Event Details</strong></li>
                      <li id="personal"><strong>Champion Details</strong></li>
                      <li id="payment"><strong>Supporting Media</strong></li>
                      <li id="confirm"><strong>Finish</strong></li>
                  </ul>
                  <!-- fieldsets -->
                  <fieldset>
                    <div class="form-card">

                      <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="exampleFormControlInput1"> Event Details</label>
                            <input type="text" class="form-control" name="name" id="eventDetail" value="{{$event->name}}" 
                              placeholder="Event Title/Name">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="location" id="elocation" value="{{$event->physical_address}}"
                              placeholder="Event Location">
                          </div>

                          <div class="form-group">
                            <select class="form-select form-control" aria-label="Default select example" name="country">
                              {{-- <option class="active" selected="">Country</option> --}}
            									@foreach(App\Models\country::get(['name','code']) as $us)
                                @if($us->name==="{{$event->name}}")
                									<option value="{{$us->name}},{{$us->code}}" selected="">{{$us->name}}</option>
                                @else
                                  <option value="{{$us->name}},{{$us->code}}">{{$us->name}}</option>
                                @endif
            									@endforeach
                            </select>
                          </div>
                          <input type="text" name="event_id" hidden="" value="{{$event->id}}">
                          <div class="form-group">

                            <textarea class="form-control"  placeholder="Description"
                              rows="3"  id="description1" name="description" >{{$event->description}}</textarea>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Event Reference URL" name="url">
                          </div>
                          <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name='type'>
                              @if($event->type=='Daily')
                                <option selected>Daily</option>
                                @else
                                <option selected>Daily</option>
                              @endif
                              @if($event->type=='Weekly')
                                <option>Weekly</option>
                                @else
                                  <option>Weekly</option>
                              @endif
                              @if($event->type=='Monthly')                                
                                <option>Monthly</option>
                                @else
                                <option>Monthly</option>
                              @endif
                              @if($event->type=='Annual')                                
                                <option>Annual</option>
                                @else
                                <option>Annual</option>
                              @endif

                            </select>
                          </div>
                          <div class="move-container" ></div>

                          {{-- @dd($event->eventCategory) --}}
                          <div class="form-group">
                            <select class="form-control js-example-basic-multiple"  name='category[]' id="js-example-basic-multiple" style="border: none !important;"   multiple="multiple">
                              <option>Cat</option>
                              @foreach(App\Models\category::all() as $cat1)
                                 @if($event->eventCategory->category_1==$cat1->cat_id)
  	                               <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @elseif($event->eventCategory->category_2==$cat1->cat_id)
                                   <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @elseif($event->eventCategory->category_3==$cat1->cat_id)
                                   <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @elseif($event->eventCategory->category_4==$cat1->cat_id)
                                   <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @elseif($event->eventCategory->category_5==$cat1->cat_id)
                                   <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @elseif($event->eventCategory->category_6==$cat1->cat_id)
                                   <option id="{{$cat1->id}}" selected="" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @else
                                   <option id="{{$cat1->id}}" value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                 @endif
                              @endforeach

                            </select>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="startDate">Event Schedule</label>
                            <input type="date" class="form-control datepicker" id="startDate" placeholder="Start Date" value="{{$event->start_date}}" name="startDate">
                            {{-- <i class="fa fa-calendar field-icon-one" aria-hidden="true"></i> --}}
                          </div>

                           <div class="form-group">
                            <input type="date" class="form-control datepicker" id="endDate"
                              placeholder="End Date" value="{{$event->end_date}}" name="endDate">
                            {{-- <i class="fa fa-calendar field-icon-one" aria-hidden="true"></i> --}}
                          </div>
                          <div class="form-group">
                            <input type="datetime" class="form-control" id="exampleFormControlInput1" name="startTime" value="{{$event->time_start}}" placeholder="Start Time">
                          </div>
                          <div class="form-group">
                            <input type="datetime" class="form-control" id="exampleFormControlInput1" name="endTime"  value="{{$event->time_end}}" placeholder="End Time">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Event Length</label>
                            <select class="form-control" name="eventDuration">
                              <option value=''>Select Event Duration</option>
                                @if($event->duration=='1d')
                                    <option value='1d' selected="">1 Day</option>
                                  @else
                                    <option value='1d'>1 Day</option>
                                  @endif
                                @if($event->duration=='2d')
                                    <option value='2d' selected="">2 Day</option>
                                  @else
                                    <option value='2d'>2 Day</option>
                                  @endif
                                @if($event->duration=='3d')
                                    <option value='3d' selected="">3 Day</option>
                                  @else
                                    <option value='3d'>3 Day</option>
                                  @endif
                                @if($event->duration=='4d')
                                    <option value='4d' selected="">4 Day</option>
                                  @else
                                    <option value='4d'>4 Day</option>
                                  @endif
                                @if($event->duration=='5d')
                                    <option value='5d' selected="">5 Day</option>
                                  @else
                                    <option value='5d'>5 Day</option>
                                  @endif
                                @if($event->duration=='6d')
                                    <option value='6d' selected="">6 Day</option>
                                  @else
                                    <option value='6d'>6 Day</option>
                                  @endif
                            </select>
                          </div>
                          {{-- <div class="form-group">
                            <select class="form-control" name="eventYDate">
                              <option>Select Event Date Each Year</option>
                            </select>
                          </div> --}}
                        </div>
                      </div>

                    </div>
                    
                    <input type="button" name="next" class="next action-button" value="continue" />
                  </fieldset>
                  <fieldset id='name'>
                      <div class="form-card">
                        <div class="row">
                          <div class="col-md-5">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Event Champions</label>
                              <input type="text" class="form-control" id="champName" name="champ_name" value="{{$event->physical_address}}" 
                                placeholder="Address 1 / Referral Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="province" name="province" value="{{$event->physical_address}}" 
                                placeholder="Address 2: State / Province">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <select class="form-select form-control" aria-label="Default select example" name="champ_country">
                                    @foreach(App\Models\country::get(['name','code']) as $us)
                                      @if($us->name==="{{$event->name}}")
                                        <option value="{{$us->name}},{{$us->code}}" selected="">{{$us->name}}</option>
                                      @else
                                        <option value="{{$us->name}},{{$us->code}}">{{$us->name}}</option>
                                      @endif
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="zip"
                                    placeholder="Zip Code" name="zip" value="{{$event->champ_zip}}">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="contactName" name="contactName" value="{{$event->contact_person}}" 
                                    placeholder="Contact Person">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="tel" class="form-control" id="phNo" name="ph_number" value="{{$event->ph_num}}" 
                                    placeholder="Phone Number">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <input type="email" class="form-control" id="email" name="email" value="{{$event->email_form}}" 
                                placeholder="E-mail or Social Media Handle">
                            </div>

                            <div class="form-group">
                              <input type="text" class="form-control" id="url" name="contactUrl" value="{{$event->contact_link}}" 
                                placeholder="ContacTURL">
                            </div>
                          </div>


                          <div class="col-md-7">
                            <label for="exampleFormControlInput1">Event Social Media Accounts</label>
                            <div class="media-url">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Facebook</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook" value="{{$event->socail_link1}}" 
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Instagram</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram"  value="{{$event->socail_link3}}"
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Twitter</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter"  value="{{$event->socail_link2}}"
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>  <input type="button" name="previous" class="previous action-button-previous" value="Back" /> <input type="button" name="next" class="next action-button" value="Continue" />
                  </fieldset>
                  <fieldset id='champ'>
                      <div class="form-card four">
                        <div class="row">

                          <div class="col-md-6" id='media1'>
                            <label for="exampleFormControlInput1">Event Images</label><br>
                            @if(isset($event->extra_image1))
                              <div  id='oImg1' style="float: left;padding-right: 2px;">

                                <div class="col-md-2" onclick="deleteDoc('oImg1')" style="cursor: pointer;"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="50px;"  height= '55px' id='oImg1' src="{{URL::asset('/leep_calender/event/img/'.$event->extra_image1)}}">
                              </div>
                               <input type="text" id='oImgN1' name="oImg1" value="{{$event->extra_image1}}" hidden>
                            @endif
                            @if(isset($event->extra_image2))
                              <div  id='oImg2' style="padding-right: 2px; float: left;" >                            
                                <div class="col-md-2" onclick="deleteDoc('oImg2')" style="cursor: pointer;"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="50px;"height= '55px' id='oImg2' src="{{URL::asset('/leep_calender/event/img/'.$event->extra_image2)}}">
                              </div>
                              <input type="text"  id='oImgN2' name="oImg2" value="{{$event->extra_image2}}" hidden>
                            @endif
                            @if(isset($event->extra_image3))
                              <div  id='oImg3' style=" float: left;"  >
                                <div class="col-md-2" onclick="deleteDoc('oImg3')" style="cursor: pointer;"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="50px;"height= '55px' id='oImg3'  src="{{URL::asset('/leep_calender/event/img/'.$event->extra_image3)}}">
                              </div>
                              <input type="text"  id='oImgN3' name="oImg3" value="{{$event->extra_image3}}" hidden>
                            @endif
                            @if(!isset($event->extra_image1) && !isset($event->extra_image2) && !isset($event->extra_image3) )
                              <div width='40px;'> <label style="height: 71px;font-weight: 400;font-size: medium;">No Uploaded File </label></div>
                            @endif
                            <div class="img-box text-center" style="clear: both;">
                              <img src="{{URL::asset('leep_calender/images/Developer Assets/Add an eVent (Not Confirmed)/Icon ionic-ios-images.svg')}}"
                                alt="">
                              <p>Drag an image or <u>
                              	<input type="file" id='imageUploadd' style="   " class="form-control-file text-danger font-weight-bold"  onchange="readUrl(this,'mediaImage')" data-title="Drag and drop a file">					

                               </u></p>
                            </div>

                          </div>
                          <div class="col-md-6 link-media" id='media2'>
                            <label for="exampleFormControlInput1">Event Documents</label><br>
                            @if(isset($event->download1))
                              <div  id='oDoc1'  style="float: left;padding-right: 2px;">
                                <div class="col-md-2" onclick="deleteDoc('oDoc1')"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="40px;" style="padding-right: 2px;" src="{{URL::asset("leep_calender/images/Developer Assets/Event View Page/media-link.svg")}}">
                              </div>
                              <input type="text" id='oDocN1' name="oDoc1" value="{{$event->download1}}" hidden="">

                            @endif
                            @if(isset($event->download2))
                              <div  id='oDoc2'  style="float: left;padding-right: 2px;">
                                <div class="col-md-2" onclick="deleteDoc('oDoc2')"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="40px;" style="padding-right: 2px;    float: left;" id='oDoc2' src="{{URL::asset("leep_calender/images/Developer Assets/Event View Page/media-link.svg")}}">
                              </div>
                              <input type="text" id="oDocN2" name="oDoc2" value="{{$event->download2}}" hidden>
                            @endif
                            @if(isset($event->download3))
                              <div  id='oDoc3'  style="float: left;padding-right: 2px;">
                                <div class="col-md-2" onclick="deleteDoc('oDoc3')"><i class="fa fa-times" aria-hidden="true"></i>
                                </div>
                                <img width="40px;" style="padding-right: 2px; float: left;"  id='oDoc3' src="{{URL::asset("leep_calender/images/Developer Assets/Event View Page/media-link.svg")}}">
                              </div>
                              <input type="text" id="oDocN3" name="oDoc3" value="{{$event->download3}}" hidden>
                            @endif
                            @if(!isset($event->download1) && !isset($event->download2) && !isset($event->download3) )
                            <div width='40px;'> <label style="height: 71px;font-weight: 400;font-size: medium;">No Uploaded File </label></div>
                            @endif

                            <div class="img-box text-center"  style="clear: both;">
                              <img src="{{URL::asset('leep_calender/images/Developer Assets/Add an eVent (Not Confirmed)/Group 1578.svg')}}" alt="">
                              <p>								        
                              	Drag a document or <u>
                              	<input type="file" id='imageUploaddF' style="   " class="form-control-file text-danger font-weight-bold"  onchange="readUrl(this,'mediaFile')" data-title="Drag and drop a file">		</u></p>
                            </div>
                          </div>
                        </div>
                      </div>  <input type="button" name="previous" class="previous action-button-previous mt-3" value="Back" /><input style="width: 160px;background: #60012C; border-radius: 6px;   color: white;" type="submit" name="next" class="" value="Save" />
                  </fieldset>

                  <fieldset id='eveimages' >
                      <div class="form-card">
                          
                          <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                          <div class="row justify-content-center">
                              <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                          </div> <br><br>
                          <div class="row justify-content-center">
                              <div class="col-7 text-center">
                                  <h5 class="purple-text text-center">You Have Successfully Add Event</h5>
                              </div>
                          </div>
                      </div>
                  </fieldset>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
<style type="text/css">
	.uploadimg{
		    height: auto;
		    height: 85px;
		    max-width: 86px;		    
	}
</style>
<script type="text/javascript">
	var i=0;
	var mi=0;
	var mf=0;
	function readUrl(input, arg) {
 	  	if (input.files && input.files[0] ) 
	  	{
		    let reader = new FileReader();
	  		if(arg=='mediaImage')
	  		{
	  			var fileType='mediaImage';
	  			var id='#media1';
	  		}
	  		else{
	  			var fileType='mediaFile';
	  			var id='#media2';
	  		}
	  		// alert(document.getElementById('imageUploadd').value);
	  		if((mi<3 && fileType=='mediaImage')||(mf<3 && fileType=='mediaFile')){
			    reader.onload = (e) => 
			    {
					let imgData = e.target.result;
					let imgName = input.files[0].name;
					input.setAttribute("data-title", 'imgName');
					var imgSrc1=e.target.result;
			  		if(arg=='mediaImage')
			  		{	
  						var imgSrc=e.target.result;
  						i=mi;						
			  		}
			  		else{
			  			var imgSrc="{{URL::asset('/leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}";
			  			i=mf;
			  		}
			  		var fieldVal='';
			  		if(arg=='mediaImage')
			  		{					
					    // fieldVal='imageUploadd';
					    // fieldVal=document.getElementById('imageUploadd').attr('src');
					}else{
					    // fieldVal=document.getElementById('imageUploaddF').attr('src');
					}

					var x="<div id='"+fileType+i+"'"+" class='media' >"+"<input type='text' hidden  name='"+fileType+'N'+i+"' value='"+input.files[0].name+"'>"+
					  "<img class='mr-3 uploadimg'  src='"+ imgSrc  +"'alt='Generic placeholder image'>"+
					  "<input type='text' hidden  name='"+fileType+i+"' value='"+imgSrc1+"'>"
					  +"<div class='media-body'>"+
					    "<div class='row'>"+
					      "<div class='col-md-10'>"+
					        "<h5 class='mt-0' id='alt'>"+input.files[0].name.substring(0, 21)+"</h5>"+
					      "</div>"+
					      "<div class='col-md-2' onclick=deleteDiv"+fileType+"('"+fileType+i+"') ><i class='fa fa-times' aria-hidden='true'></i></div>"+
					    "</div>"+
					    "<b>"+input.files[0].size+' Bytes'+"</b>"+
					    "<div class='progress'>"+
					      "<div class='progress-bar' style='background-color: white;' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'>"+
					        "<span class='sr-only'>100% Complete</span>"+
					      "</div>"+
					    "</div>"+
					  "</div>"+
					"</div>";
					// i+=1;
			  		if(arg=='mediaImage')
			  		{
						mi+=1;
					}else
						mf+=1;
					$(id).append(x); //append image to output element
			  		if(arg=='mediaImage')
			  		{					
					    document.getElementById('imageUploadd').value=null;
					}else{
					    document.getElementById('imageUploaddF').value=null;						
					}
			    }
			}else{
		  		if(arg=='mediaImage')
		  		{
		  		 alert('Maximum 3 Images are Allowed');
		  		}
		  		else{
		  		 alert('Maximum 3 Pdf files are Allowed');
		  		}

			}
	    	reader.readAsDataURL(input.files[0]);
		}else{
				document.getElementById('imageUploadd').value='';	  	
		}

	}
	// deleteDivmediaFile 
	function deleteDivmediaFile(id) {

		document.getElementById(id).remove();
		// i-=1;
		mf=mf-1;
	}
	function deleteDivmediaImage(id) {
		document.getElementById(id).remove();
		// i-=1;
		mi=mi-1;
	}

  function deleteDoc(id) {

    document.getElementById(id).remove();
    if(id=="oDoc1")
      document.getElementById('oDocN1').value='';
    if(id=="oDoc2")
      document.getElementById('oDocN2').value='';
    if(id=="oDoc3")
      document.getElementById('oDocN3').value='';
    if(id=="oImg1")
      document.getElementById('oImgN1').value='';
    if(id=="oImg2")
      document.getElementById('oImgN2').value='';
    if(id=="oImg3")
      document.getElementById('oImgN3').value='';
  }

</script>
@endsection












{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')


<!-- update-steps -->
<div class="add-event-wrapper">
  <div class="event-heading">
    <h4>Add an Event</h4>
  </div>
<div class="container-fluid">
  <div class="row">

      <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pb-0  mb-3">
              
              <form id="msform" method='POST' class="" action="{{URL::asset('addNewEventform')}}" onsubmit = "eventFormValidation();">
              	@csrf
                  @if(session()->has('errorMsg'))
                      <div class="alert alert-danger">
                          <ul style="text-align: center;list-style-type:none;">
                              {{session('errorMsg')}}
                          </ul>
                      </div>
                  @endif
                  @if(session()->has('successMsg'))
                      <div class="alert alert-success">
                          <ul style="text-align: center;list-style-type:none;">
                              {{session('successMsg')}}
                          </ul>
                      </div>
                  @endif
                  @if ($errors->any())
                      <div class="alert alert-danger  col-12">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li style="list-style-type:none;">{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <!-- progressbar -->
                  <ul id="progressbar">
                      <li class="active account" id="account"><strong>Event Details</strong></li>
                      <li class="personal" id="personal"><strong>Champion Details</strong></li>
                      <li class="payment" id="payment"><strong>Supporting Media</strong></li>
                      <li class="confirm" id="confirm"><strong>Finish</strong></li>
                  </ul>
                  <!-- fieldsets -->
                  <fieldset id='name'>
                    <div class="form-card">

                      <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <label for="eventDetail"> Event Details</label>
                            <input type="text"  class="form-control" name="name" id="eventDetail"
                              placeholder="Event Title/Name">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="location" id="elocation" placeholder="Event Location">
                          </div>

                          <div class="form-group">
                            <select class="form-select form-control" aria-label="Default select example" name="country">
                              {{-- <option class="active" selected="">Country</option> --}}
            									@foreach(App\Models\country::get(['country1','country2']) as $us)
            									<option value="{{$us->country1}},{{$us->country2}}">{{$us->country1}}</option>
            									@endforeach
                            </select>
                          </div>
                          <div class="form-group">

                            <textarea class="form-control" id="description1" placeholder="Description" 
                              rows="3" name="description"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                              placeholder="Event Reference URL" name="url">
                          </div>
                          <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name='type'>
                              <option>Daily</option>
                              <option>Weekly</option>
                              <option>Monthly</option>
                              <option>Annual</option>

                            </select>
                          </div>
                          <div class="form-group">
                            <div class="move-container" ></div>
                            <select  class="form-control js-example-basic-multiple category"  name='category[]' id="js-example-basic-multiple" style="border: none !important;"   multiple="multiple">
                              {{-- <option>Category</option> --}}
                              <?php $i=0;?>
                              @foreach(App\Models\category::all() as $cat1)
                                <option value="{{$cat1->cat_id}}">{{$cat1->name}}</option>
                                <?php $i=$i+1;?>
                              @endforeach

                            </select>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="startDate">Event Schedule</label>
                            <input type="date" class="form-control datepicker" id="startDate" placeholder="Start Date" name="startDate">
                            {{-- <i class="fa fa-calendar field-icon-one" aria-hidden="true"></i> --}}
                          </div>

                           <div class="form-group">
                            <input type="date" class="form-control datepicker" id="endDate"
                              placeholder="End Date" name="endDate">
                            {{-- <i class="fa fa-calendar field-icon-one" aria-hidden="true"></i> --}}
                          </div>
                          <div class="form-group">
                            <input type="datetime" class="form-control" id="exampleFormControlInput1" name="startTime" 
                              placeholder="Start Time">
                          </div>
                          <div class="form-group">
                            <input type="datetime" class="form-control" id="exampleFormControlInput1" name="endTime" 
                              placeholder="End Time">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Event Length</label>
                            <select class="form-control" name="eventDuration">
                              <option value=''>Select Event Duration</option>
                              <option value='1d'>1 Day</option>
                              <option value='2d'>2 Day</option>
                              <option value='3d'>3 Day</option>
                              <option value='4d'>4 Day</option>
                              <option value='5d'>5 Day</option>
                              <option value='6d'>6 Day</option>
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
                    
                    <input type="button" id='' name="next" class="next action-button" value="continue" />
                  </fieldset>
                  {{-- Champ details --}}
                  <fieldset id='champ'>
                      <div class="form-card">
                        <div class="row">
                          <div class="col-md-5">

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Event Champions</label>
                              <input type="text" class="form-control" id="champName" name="champ_name" 
                                placeholder="Referral Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="province" name="province" 
                                placeholder="Address : State / Province">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <select class="form-select form-control" aria-label="Default select example" name="champ_country">
                                    @foreach(App\Models\country::get(['country1']) as $us)
                                    <option value="{{$us->country1}},{{$us->country2}}">{{$us->country1}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="zip"
                                    placeholder="Zip Code" name="zip">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="contactName" name="contactName" 
                                    placeholder="Contact Person">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="tel" class="form-control" id="phNo" name="ph_number" 
                                    placeholder="Phone Number">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <input type="email" class="form-control" id="email" name="email" 
                                placeholder="E-mail or Social Media Handle">
                            </div>

                            <div class="form-group">
                              <input type="text" class="form-control" id="url" name="contactUrl" 
                                placeholder="Contact URL">
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
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook" 
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
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram" 
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
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter" 
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div>
                              {{-- <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Linkedin</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="linkedIn" 
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Youtube</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="youTube" 
                                      placeholder="URL">
                                  </div>
                                </div>
                              </div> --}}
                            </div>

                          </div>
                        </div>
                      </div>  <input type="button" name="previous" class="previous action-button-previous" value="Back" /> <input type="button" name="next" class="next action-button" value="Continue" />
                  </fieldset>
                  {{-- Images --}}
                  <fieldset id='eveimages'> 
                      <div class="form-card four">
                        <div class="row">

                          <div class="col-md-6" id='media1'>
                            <label for="exampleFormControlInput1">Event Images</label>
                            <div class="img-box text-center">
                              <img src="{{URL::asset('leep_calender/images/Developer Assets/Add an eVent (Not Confirmed)/Icon ionic-ios-images.svg')}}"
                                alt="">
                                <p>Drag an image or <u>
                              	<input type="file" accept="image/*"  id='imageUploadd' style="    " class="form-control-file text-danger font-weight-bold"  onchange="readUrl(this,'mediaImage')" data-title="Drag and drop a file">					
                                 </u></p>
                            </div>

                          </div>
                          <div class="col-md-6 link-media" id='media2'>
                            <label for="exampleFormControlInput1">Event Documents</label>
                            <div class="img-box text-center">
                              <img src="{{URL::asset('leep_calender/images/Developer Assets/Add an eVent (Not Confirmed)/Group 1578.svg')}}" alt="">
                              <p>								        
                              	Drag a document or <u>
                              	<input type="file" id='imageUploaddF' style="    " class="form-control-file text-danger font-weight-bold"  onchange="readUrl(this,'mediaFile')" data-title="Drag and drop a file">		</u></p>
                            </div>
                          </div>
                        </div>
                      </div>  <input type="button" name="previous" class="previous action-button-previous mt-3" value="Back" /><input style="width: 160px;background: #60012C; border-radius: 6px;   color: white;" type="submit" name="next" class="" value="Save" />
                  </fieldset>

                  <fieldset>
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

{{--     <script src="{{URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
    <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')}}"></script>

 --}}
{{-- <script>
  $(document).ready(function(){  
       $('.js-example-basic-multiple').select2();
       alert('za');
  });  
</script>
 --}}<script type="text/javascript">
  {{-- document.getElementById("js-example-basic-multiple").select2(); --}}
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
        $check=0;
        // if(fileType=='mediaImage'){
        //   input.files[0].split('/')[0] === 'image';
        //   $check=1;
        // }
	  		// alert(document.getElementById('imageUploadd').value);
	  		if((mi<3 && fileType=='mediaImage')||(mf<3 && fileType=='mediaFile'))
          // if($check===0)
        {
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
</script>
@endsection












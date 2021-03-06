{{-- Extends layout --}}

@extends('layout.layoutLeep') {{-- layout/layoutLeep --}}
@section('loader')

@include('leepFront.parts.loader') {{-- leepFront/parts/loader --}}

@endsection
@section('content')


<!-- caegories-section -->
{{-- <a href="event-search.html"> --}}
<div class="categories-page">

    <div class="cat-heading text-center">
        <h3 class="font-weight-bold">Categories</h3>
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
        
    </div>

    <div class="catBorder">
        <div class="row p-0 m-0 mt-lg-5">
            
            <div class="col-lg-3 col-md-6">
                <div class="categories-box ">
                    <?php $categoryA=App\Models\category::where('name','like','A'.'%')->orderBy('name','Asc')->get();?>
                    @if(isset($categoryA[0]->name))
                    <div class="cat-box">
                        <div class="box-one">
                            <div class="heading">
                                <h1>{{$categoryA[0]->name[0]}}</h1>
                            </div>
                            {{-- <div class="underline"> <hr> </div> --}}
                            <div class="cat-data">
                                <p>
                                    @foreach($categoryA as $c)
                                    <a href="{{'category/'.$c->id}}"> <div>{{$c->name}}</div> </a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="categories-box">
                    <?php $categoryB=App\Models\category::where('name','like','B'.'%')->orderBy('name','Asc')->get();?>
                    @if(isset($categoryB[0]->name))
                    <div class="cat-box">
                        <div class="box-one">
                            <div class="heading">
                                <h1>{{$categoryB[0]->name[0]}}</h1>
                            </div>
                            {{-- <div class="underline"> <hr> </div> --}}
                            <div class="cat-data">
                                <p>
                                    @foreach($categoryB as $c)
                                    <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="categories-box">
                    <?php $categoryC=App\Models\category::where('name','like','C'.'%')->orderBy('name','Asc')->get();?>
                    @if(isset($categoryC[0]->name))
                    <div class="cat-box">
                        <div class="box-one">
                            <div class="heading">
                                <h1>{{$categoryC[0]->name[0]}}</h1>
                            </div>
                           {{--  <div class="underline">
                                <hr>
                            </div> --}}
                            <div class="cat-data">
                                <p>
                                    @foreach($categoryC as $c)
                                        <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <?php $categoryD=App\Models\category::where('name','like','D'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryD[0]->name))
            <div class="col-lg-3 col-md-6">
                <div class="cat-box">
                    <div class="box-one ml-5">
                        <div class="heading">
                            <h1>{{$categoryD[0]->name[0]}}</h1>
                        </div>
                        <div class="underline py-4">
                            <hr>
                        </div>
                        <div class="cat-data">
                            <p>
                                @foreach($categoryD as $c)
                                    <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div></a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <?php $categoryE=App\Models\category::where('name','like','E'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryE[0]->name))
            <div class="col-md-6 col-lg-3">
               <div class="categories-box">
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                    <h1>{{$categoryE[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryE as $c)
                                            <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
              </div>
            </div>
            @endif


            <div class="col-md-6 col-lg-3">
               <div class="categories-box">
                 <?php $categoryA=App\Models\category::where('name','like','F'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryA[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                     <h1>{{$categoryA[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryA as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 <?php $categoryC=App\Models\category::where('name','like','H'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryC[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryC[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryC as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 <?php $categoryD=App\Models\category::where('name','like','I'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryD[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryD[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryD as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>        
      
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                  <?php $categoryE=App\Models\category::where('name','like','J'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryE[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryE[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryE as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div></a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                   <?php $categoryC=App\Models\category::where('name','like','L'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryC[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryC[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryC as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
               <div class="categories-box">
                  <?php $categoryD=App\Models\category::where('name','like','M'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryC[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryD[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                        @foreach($categoryD as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>
            
            <?php $categoryE=App\Models\category::where('name','like','N'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryE[0]->name))
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryE[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                         @foreach($categoryE as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
              </div> 
            </div>
            @endif


            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 <?php $categoryB=App\Models\category::where('name','like','O'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryB[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryB[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                         @foreach($categoryB as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>
          
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 <?php $categoryC=App\Models\category::where('name','like','P'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryC[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryC[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                         @foreach($categoryC as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}}  </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>
            
            <?php $categoryD=App\Models\category::where('name','like','Q'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryD[0]->name))
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                 
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryD[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                         @foreach($categoryD as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}}  </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
              </div>
            </div>
            @endif

          
            <div class="col-md-6 col-lg-3">
             <div class="categories-box">
                 <?php $categoryE=App\Models\category::where('name','like','R'.'%')->orderBy('name','Asc')->get();?>
                   @if(isset($categoryE[0]->name))
                     <div class="cat-box">
                            <div class="box-one">
                                <div class="heading">
                                      <h1>{{$categoryE[0]->name[0]}}</h1>
                                </div>
                                {{-- <div class="underline">
                                    <hr>
                                </div> --}}
                                <div class="cat-data">
                                    <p>
                                         @foreach($categoryE as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                     </div>
                    @endif
              </div>
            </div>

            <div class="col-md-6 col-lg-3">
             <div class="categories-box">
                     <?php $categoryA=App\Models\category::where('name','like','T'.'%')->orderBy('name','Asc')->get();?>
                            @if(isset($categoryA[0]->name))
                             <div class="cat-box">
                                    <div class="box-one">
                                        <div class="heading">
                                              <h1>{{$categoryA[0]->name[0]}}</h1>
                                        </div>
                                        {{-- <div class="underline">
                                            <hr>
                                        </div> --}}
                                        <div class="cat-data">
                                            <p>
                                             @foreach($categoryA as $c)
                                             <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                             @endforeach
                                            </p>
                                        </div>
                                    </div>
                             </div>
                            @endif
                   </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                     <?php $categoryB=App\Models\category::where('name','like','U'.'%')->orderBy('name','Asc')->get();?>
                            @if(isset($categoryB[0]->name))
                             <div class="cat-box">
                                    <div class="box-one">
                                        <div class="heading">
                                              <h1>{{$categoryB[0]->name[0]}}</h1>
                                        </div>
                                        {{-- <div class="underline">
                                            <hr>
                                        </div> --}}
                                        <div class="cat-data">
                                            <p>
                                             @foreach($categoryB as $c)
                                             <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                             @endforeach
                                            </p>
                                        </div>
                                    </div>
                             </div>
                            @endif
                   </div>
            </div>
            
            <?php $categoryC=App\Models\category::where('name','like','V'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryC[0]->name))
            <div class="col-md-6 col-lg-3">
              <div class="categories-box">
                      
                         <div class="cat-box">
                             <div class="box-one">
                                  <div class="heading">
                                     <h1>{{$categoryC[0]->name[0]}}</h1>
                                  </div>
                                 {{-- <div class="underline">
                                          <hr>
                                       </div> --}}
                                    <div class="cat-data">
                                       <p>
                                         @foreach($categoryC as $c)
                                         <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                         @endforeach
                                      </p>
                                  </div>
                             </div>
                         </div>
                   </div>
            </div>
            @endif

          
            <div class="col-md-6 col-lg-3">
               <div class="categories-box">
                      <?php $categoryD=App\Models\category::where('name','like','W'.'%')->orderBy('name','Asc')->get();?>
                      @if(isset($categoryD[0]->name))
                         <div class="cat-box">
                             <div class="box-one">
                                  <div class="heading">
                                     <h1>{{$categoryD[0]->name[0]}}</h1>
                                  </div>
                                 {{-- <div class="underline">
                                          <hr>
                                       </div> --}}
                                    <div class="cat-data">
                                       <p>
                                         @foreach($categoryD as $c)
                                          <a href="{{'category/'.$c->id}}"> <div> {{$c->name}} </div> </a>
                                         @endforeach
                                      </p>
                                  </div>
                             </div>
                         </div>
                      @endif
                   </div>
            </div>
        </div>
    </div>
      {{-- <div class="catBorder">
          <div class="row m-0 p-0 mt-lg-5">
              <div class="col-md-6 col-lg-3">
                  
              </div>
              <div class="col-md-6 col-lg-3">
                  
              </div>
              <div class="col-md-6 col-lg-3">
                  
              </div>
              <div class="col-md-6 col-lg-3">
                 
              </div>
          </div> 
      </div> --}}
</div>   
<style type="text/css">
  .heading h1{
    font-family: 'impact';
    color: black;
  }
  .catBorder{
    /*border-bottom: 2px solid #60012C;*/
  }
</style>
@endsection
    {{-- END About Us --}}

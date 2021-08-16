{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')


    
 <!-- caegories-section -->
{{-- <a href="event-search.html"> --}}
<div class="categories-page">
    <div class="cat-heading">
        <h3>Categories</h3>
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
    <div class="categories-box" style="padding-bottom: 85px !important;">
        <?php $categoryA=App\Models\category::where('name','like','A'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryA[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryA[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryA as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryB=App\Models\category::where('name','like','B'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryB[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryB[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryB as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryC=App\Models\category::where('name','like','C'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryC[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryC[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryC as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryD=App\Models\category::where('name','like','D'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryD[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryD[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryD as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryE=App\Models\category::where('name','like','E'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryE[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryE[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryE as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <?php $categoryA=App\Models\category::where('name','like','F'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryA[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryA[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryA as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="categories-box">
        <?php $categoryC=App\Models\category::where('name','like','H'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryC[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryC[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryC as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryD=App\Models\category::where('name','like','I'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryD[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryD[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryD as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryE=App\Models\category::where('name','like','J'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryE[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryE[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryE as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryC=App\Models\category::where('name','like','L'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryC[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryC[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryC as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryD=App\Models\category::where('name','like','M'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryD[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryD[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryD as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="categories-box">
        <?php $categoryE=App\Models\category::where('name','like','N'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryE[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryE[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryE as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="categories-box">
        <?php $categoryA=App\Models\category::where('name','like','N'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryA[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryA[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryA as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryB=App\Models\category::where('name','like','O'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryB[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryB[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryB as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryC=App\Models\category::where('name','like','P'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryC[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryC[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryC as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryD=App\Models\category::where('name','like','Q'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryD[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryD[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryD as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryE=App\Models\category::where('name','like','R'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryE[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryE[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryE as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
        <?php $categoryA=App\Models\category::where('name','like','T'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryA[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryA[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryA as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryB=App\Models\category::where('name','like','U'.'%')->orderBy('name','Asc')->get();?>
            @if(isset($categoryB[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryB[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryB as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="categories-box"  >
        <?php $categoryC=App\Models\category::where('name','like','V'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryC[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryC[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryC as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
            <?php $categoryD=App\Models\category::where('name','like','W'.'%')->orderBy('name','Asc')->get();?>
        @if(isset($categoryD[0]->name))
            <div class="cat-box">
                <div class="box-one">
                    <div class="heading">
                        <h1>{{$categoryD[0]->name[0]}}</h1>
                    </div>
                    <div class="underline">
                        <hr>
                    </div>
                    <div class="cat-data">
                        <p>
                            @foreach($categoryD as $c)
                                <a href="{{'category/'.$c->id}}">{{$c->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<style type="text/css">
        categories-page .categories-box .cat-box a:hover{
            color: white !important;
        }
        .categories-page .categories-box .cat-box a{
            text-decoration: none;
            color: #FFFFFF !important;
        }
</style>
@endsection
    {{-- END About Us --}}

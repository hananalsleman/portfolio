

@extends('index')

@section('css-link')
    
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/progress-circle.css') }}">

@endsection


@section('content')

    <div id="about" class="pt-4 pb-4">
        <div class="container pt-2">
            <div id="aboutme" class="d-flex flex-wrap panel">
                <div class="col-md-5 pr-0 pl-0">
                    <img src="uploads/{{ $myinfo->image}}" class="w-100 h-100">
                </div>
                <div class="description col-md-7  pt-2 pb-4">
                    <h2>{{ $myinfo->aboutme_title }}</h2>
                    <div class="p">
                        <i class="fa fa-quote-left "></i>
                        <p class="d-inline">
                            {{ $myinfo->aboutme_description }}
                        </p>
                        <i class="fa fa-quote-right pull-right"></i>
                    </div>
                    <div class="icons-social pl-1">
                        <a href="{{$links->facebook}}" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="{{$links->linkedin}}" target="_blank"><i
                                class="fa fa-linkedin"></i></a>
                        <a href="{{$links->github}}"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="skills panel"> 
                <h3>My Skills</h3>
                <div class="d-flex flex-wrap"> 
                    @foreach ($skills as $skill)
                    <div class="skill col-12 col-md-3">
                        <h6>{{ $skill->name }}</h6>                          
                        <div class="progress-circle progress-{{$skill->percentage}} "><span>{{$skill->percentage}}</span></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class=" techniques panel"> 
                <h3>My Techniques</h3> 
                <div class="d-flex flex-wrap mt-5 p-5">                 
                    @foreach ($techniques as $technique)
                    <div class="col-md-6 technique">
                        <span >{{ $technique->name }}<small>%</small><small class="count"
                                    data-value="95">{{ $technique->percentage }}</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" class="progress-bar" role="progressbar"
                                aria-valuenow="{{ $technique->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $technique->percentage}}%;"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                        
                </div>
            </div>
        </div>
    </div>

@endsection
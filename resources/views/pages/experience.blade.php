

@extends('index')

@section('css-link')
    
<link rel="stylesheet" type="text/css" href="{{ asset('css/experiences.css') }}">

@endsection


@section('content')


    <!-- Experiences -->

    <div id="experiences" class="pt-4 pb-4">
        <div class="container">
            <div class="text-center">
                <h3><i class="fa fa-newspaper-o mr-2"></i>My Experience</h3>
            </div>
            <div >
                <div id="cd-timeline" class="cd-container">
                    @foreach ($experiences as $experience)
                        <div class="cd-timeline-block experience ">
                            <div class="experience-date pointer">
                                <span>  {{ $experience->start_year }} - {{ $experience->end_year }}</span>
                            </div>
                            @if($loop->index%2==0)
                            <div class="experience-img cd-timeline-img cd-picture wow fadeInLeft " data-wow-delay="0.6s">
                            @else
                            <div class="experience-img cd-timeline-img cd-picture wow fadeInRight  " data-wow-delay="0.6s">
                            @endif
                                <span >{{ $loop->index+1 }}</span>
                            </div>

                            @if($loop->index%2==0)
                            <div class="experience-content cd-timeline-content service-box-content wow fadeInLeft panel">
                            @else
                            <div class="experience-content cd-timeline-content service-box-content wow fadeInRight panel">
                            @endif
                                <div class="header">
                                    <h2>{{ $experience->title }}</h2>
                                </div>
                                <p>{{ $experience->description }}
                                    <br />
                                    <span class="date-range">
                                        <i class="fa fa-clock mr-2"></i>from {{ $experience->start_month }}, {{ $experience->start_year }}
                                        to {{ $experience->end_month }} {{ $experience->end_year }}<br />
                                        <i class="fa fa-map-marker mr-2"></i>{{ $experience->country }}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                    
            </div>
        </div>
    </div>
    <!-- End Experiences -->

@endsection
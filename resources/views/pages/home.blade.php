

@extends('index')

@section('css-link')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center mb-4 text-center text-md-left">
                    <hr class="m-auto ml-md-0" />
                    <h4 class="mt-2">Hello There!</h4>
                    <h1 class="mt-4 mb-4">I'm <span class="main-color">{{ $myinfo->name}}</span></h1>
                    <h2 class="rotate">{{ $myinfo->job }}</h2>
                    <p>{{ $myinfo->description}}
                    </p>
                    <div class="d-flex align-self-center">
                        <div class="contact nav-item  text-center pull-left d-inline-block">
                            <a class="nav-link text-white" href="#contact">Contact</a>
                        </div>
                        <div class="col-12 col-lg-5 icons-social pl-1">
                            <a href="{{$links->facebook}}" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="{{$links->linkedin}}" target="_blank"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="{{$links->github}}"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="frame-1 animate__animated animate__bounce">
                        <div class="frame-2">
                            <div class="frame-3">
                                <img class="myImage d-block" src="uploads/{{ $myinfo->image}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Section -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
                    <h2>ABOUT ME</h2>
                    <h4>{{ $myinfo->aboutme_title }}</h4>
                    <p>{{ $myinfo->aboutme_description }}</p>
                </div>
                <div class="col-md-6 col-xs-11 skills">

                    @foreach ($techniques as $technique)
                    @if ($loop->index < 3)
                    <span >{{ $technique->name }}<small>%</small><small class="count"
                                data-value="95">{{ $technique->percentage }}</small></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" class="progress-bar" role="progressbar"
                            aria-valuenow="{{ $technique->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Achievements Section -->
    <section id="achievements">
        <div class="container">
            <h2 class="heading">Here are my biggest achievements</h2>
            <div class="box_timeline_holder">
                <div class="box_timeline">
                    <ul>
                    @foreach ($achievements as $achievement )
                        @if ($loop->index < 4)
                            <li class="col-12 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="date ">
                                    <span> {{ $achievement->year }} </span>
                                </div>
                                <h3>{{ $achievement->title }}</h3>
                                <p>{{ $achievement->description }}
                                </p>
                            </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- End Achievements Section -->

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="row">
                <h2 class="heading">Here are my experience</h2>
                <div id="cd-timeline" class="cd-container">
                @foreach ($experiences as $experience)
                    @if ($loop->index < 4)
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture wow fadeInLeft" data-wow-delay="0.6s">
                            <img src="images/{{$loop->index%3}}-icon.png" alt="Picture">
                        </div>

                        <div class="cd-timeline-content service-box-content wow fadeInLeft">
                            <h2>{{ $experience->title }}</h2>
                            <p>{{ $experience->description }}
                                <br />
                                <span class="date-range">
                                    <i class="fa fa-clock mr-2"></i>from {{ $experience->start_month }}, {{ $experience->start_year }}
                                     to {{ $experience->end_month }} {{ $experience->end_year }}<br />
                                    <i class="fa fa-map-marker mr-2"></i>{{ $experience->country }}</span>
                            </p>
                        </div>
                    </div>
                    @endif
                @endforeach

                </div>
            </div>
        </div>

    </section>
    <!-- End Experience Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <address>
                        <p class="contact-title">CONTACT ME</p>
                        <p><i class="fa fa-phone"></i>{{$links->phone}}</p>
                        <p><i class="fa fa-envelope-o"></i>{{$links->email}}</p>
                        <p><i class="fa fa-map-marker"></i>{{$links->location}}</p>
                    </address>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form role="form" method="post" action="contact-me">
                        {{csrf_field()}}
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                        <textarea name="message" rows="5" class="form-control" id="message"
                            placeholder="Your Message" required></textarea>
                        <input name="send" type="submit" class="form-control" id="send" value="SEND ME">
                    </form>
                </div>
                <div class="col-md-1 col-sm-1"></div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

@endsection
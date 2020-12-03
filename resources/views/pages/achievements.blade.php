

@extends('index')

@section('css-link')

<link rel="stylesheet" type="text/css" href="{{ asset('css/achievements.css') }}">
@endsection


@section('content')


    <!-- Achievements -->
    <div id="achievements" class="pt-4 pb-4">
        <div class="container">
            <div class="text-center mb-5">
                <h3><i class="fa fa-trophy mr-2"></i>My Achievements</h3>
            </div>
            <div class="tab-pane-content">
                <div class="row flex-wrap justify-content-center mb-3">
                @foreach ($achievements as $achievement)
                    <div class="col-md-4 mb-5 mt-2"> 
                        <div class="panel achievement">
                            <div class="panel-header">
                                <div class="icon-container"><i class="fa fa-trophy"></i></div>
                            </div>
                            <div class="panel-body">
                                <label>{{ $achievement->title }}</label>
                                <p>{{ $achievement->description }}</p>
                                <div class="footer">
                                    <span><i class="fa fa-home"></i>{{ $achievement->organisation }}</span>
                                    <span><i class="fa fa-calendar"></i>{{ $achievement->year }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                        
            </div>

        </div>
    </div>
    <!-- End Achievements -->
    @endsection
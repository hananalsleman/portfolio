@extends('layouts.app')

@section('cont')

    <div class="d-flex">

        <!------------------- Sidebar -------------------->
        <div class="col-12 col-md-6 col-lg-2 sidebar" id="sidebar" >
            
            <h3 class=""><i class="fa fa-dashboard mr-2"></i>Dashboard</h3>
            <hr/>
            <h4 classs="heading-nav">Pages</h4>
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} "  href="/dashboard" role="tab" 
                    aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/about') ? 'active' : '' }}" href="/dashboard/about" role="tab" 
                    aria-controls="v-pills-about" aria-selected="false"><i class="fa fa-address-book mr-2"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/achievements') ? 'active' : '' }}" href="/dashboard/achievements" role="tab"
                        aria-controls="v-pills-achievements" aria-selected="false"><i class="fa fa-trophy mr-2"></i>Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/experience') ? 'active' : '' }}" href="/dashboard/experience" role="tab" 
                    aria-controls="v-pills-experience" aria-selected="false"><i class="fa fa-newspaper-o mr-2"></i>Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/contact') ? 'active' : '' }}" href="/dashboard/contact" role="tab" 
                    aria-controls="v-pills-contact" aria-selected="false"><i class="fa fa-phone mr-2"></i>Contact</a>
                </li>
            </ul>
            <hr/>
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item text-center">
                    <a class="nav-link" id="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fa fa-inbox mr-2"></i>Logout</a>
                </li>
            </ul>
                  
        </div>
        
        <!------------------- End Sidebar -------------------->

  
        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form  role="form" id="form_logout" action="logout" method="post">
                            {{csrf_field()}}
                            <p>Do you want to logout ??</p>
                            <button  type="submit" class="btn btn-primary save pull-right">Yes</button>
                            <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">No</button>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Logout -->

         <!------------------- Sidebar Content -------------------->
        <div class="col-lg-10 sidebar-content">
                
            <div class="tab-content" id="v-pills-tabContent">
                    
                @yield('content')

            </div>

        </div>
        <!------------------- End Sidebar Content -------------------->

    </div>

@endsection
<!DOCTYPE html>
<title>Dashboard</title>
<meta name="description" content="">
<meta name="author" content="Hanan Al-Slaiman">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<!-- Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-free-5.11.2-web/css/fontawesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/progress-circle.css') }}">

</head>

<body id="dashboard">

    <div class="d-flex">

        <!------------------- Sidebar -------------------->
        <div class="col-md-2 sidebar" id="navbarNavDropdown" >
            <h3 class=""><i class="fa fa-dashboard mr-2"></i>Dashboard</h3>
            <hr/>
            <h4 classs="heading-nav">Pages</h4>
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" 
                    aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-about-tab" data-toggle="pill" href="#v-pills-about" role="tab" 
                    aria-controls="v-pills-about" aria-selected="false"><i class="fa fa-address-book mr-2"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-achievements-tab" data-toggle="pill" href="#v-pills-achievements" role="tab"
                        aria-controls="v-pills-achievements" aria-selected="false"><i class="fa fa-trophy mr-2"></i>Achievements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-experience-tab" data-toggle="pill" href="#v-pills-experience" role="tab" 
                    aria-controls="v-pills-experience" aria-selected="false"><i class="fa fa-newspaper-o mr-2"></i>Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" 
                    aria-controls="v-pills-contact" aria-selected="false"><i class="fa fa-phone mr-2"></i>Contact</a>
                </li>
            </ul>
        </div>
        <!------------------- End Sidebar -------------------->


         <!------------------- Sidebar Content -------------------->
        <div class="col-md-10 sidebar-content">
                
            <div class="tab-content" id="v-pills-tabContent">

                <!-- Home Section  -->
                <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="d-flex justify-content-between topbar">
                        <h3><i class="fa fa-home mr-2"></i>Home</h3>
                        <button data-toggle="modal" data-target="#editHomeModal" ><i class="fa fa-pencil-square-o mr-1"></i>Edit</button>
                    </div>
                    
                    <div class="tab-pane-content d-flex panel" id="home">
                        <img src="images/myImage.jpg" class="col-md-5 " alt="">
                        <div class="col-md-7 d-flex pl-4 align-items-center"> 
                            <div>
                                 @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                <label>Name</label>
                                <p>{{ $myinfo->name }}</p>
                                <label>Job</label>
                                <p>{{ $myinfo->job }}</p>
                                <label>Description</label>
                                <p >{{ $myinfo->description }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Home Modal -->
                    <div class="modal fade" id="editHomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Home</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="edit-home">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name </label>
                                        <input type="text" name="name" value="{{ $myinfo->name }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Job</label>
                                        <input type="text" name="job" value="{{ $myinfo->job }}" class="form-control" id="exampleInputPassword1" placeholder="Jobs..">
                                        <small id="emailHelp" class="form-text text-muted">Put ',' between every two jobs please.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $myinfo->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                    <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Edit Home Modal -->

                </div>
                <!-- End Home Section  -->

                <!-- About Section  -->
                <div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
                    <div class="d-flex justify-content-between topbar">
                        <h3><i class="fa fa-address-book mr-2"></i>About</h3>
                    </div>
                    <div class="tab-pane-content" id="about">
                        <div class="row mb-3">
                            <div class="col-md-7"> 
                                <div class="panel">
                                    <div class="panel-header">
                                        <h6>About Me</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#editAboutMeModal"><i class="fa fa-pencil-square-o "></i></button>
                                    </div>
                                    <div class="panel-body">   
                                        <label>Title</label>
                                        <p>{{ $myinfo->aboutme_title }}</p>
                                        <label>Description</label>
                                        <p>{{ $myinfo->aboutme_description }} </p>
                                    </div>
                                </div>
                                <!-- Modal Edit About Me -->
                                <div class="modal fade" id="editAboutMeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit About me</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="edit-aboutme">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title </label>
                                                    <input type="text" name="aboutme_title" value="{{ $myinfo->aboutme_title }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Description</label>
                                                    <textarea name="aboutme_description" class="form-control" id="exampleFormControlTextarea1" rows="5">{{ $myinfo->aboutme_description }}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit About Me -->
                            </div>
                            <!-- PERSONAL INFORMATION --> 
                            <div class="col-md-5"> 
                                <div class="panel">
                                    <div class="panel-header">
                                        <h6>PERSONAL INFORMATION</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#editPersonalInfoModal"><i class="fa fa-pencil-square-o "></i></button>
                                    </div>
                                    <div class="panel-body">   
                                        <div class="line">
                                            <label>Sex</label>
                                            <span>{{ $myinfo->sex }}</span>
                                        </div>
                                        <div class="line">
                                            <label>Marital Status</label>
                                            <span>{{ $myinfo->marital_status }}</span>
                                        </div>
                                        <div class="line">
                                            <label>Nationality</label>
                                            <span>{{ $myinfo->nationality }}</span>
                                        </div>
                                        <div class="line">
                                            <label>Languages</label>
                                            <span>{{ $myinfo->languages }}</span>
                                        </div>
                                    </div>
                                </div>
                                            
                                <!-- Modal Edit Personal Information -->
                                <div class="modal fade" id="editPersonalInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Personal Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="edit-personalInfo">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sex </label>
                                                    <input type="text" name="sex" value="{{ $myinfo->sex }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Marital Status </label>
                                                    <input type="text" name="marital_status" value="{{ $myinfo->marital_status }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nationality</label>
                                                    <input type="text" name="nationality" value="{{ $myinfo->nationality }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Languages</label>
                                                    <input type="text" name="languages" value="{{ $myinfo->languages }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 skills"> 
                                <div class="panel">
                                    <div class="panel-header">
                                        <h6>Skills</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#addSkillModal"><i class="fa fa-plus "></i></button>
                                    </div>
                                    <div class="panel-body">  
                                        <div class=""> 
                                            @foreach ($skills as $skill)
                                            <div class="skill">
                                                <div class="skill-choices">
                                                    <a href=""  data-id="{{ $skill->id }}"  id="editSkill" data-toggle="modal" data-target="#editSkillModal"><i class="fa fa-edit mr-2"></i></a>
                                                    <a href="" data-id="{{ $skill->id }}"  id="deleteSkill" data-toggle="modal" data-target="#deleteSkillModal"><i class="fa fa-trash"></i></a>
                                                </div>
                                                <h6>{{ $skill->name }}</h6>                          
                                                <div class="progress-circle progress-{{$skill->percentage}} "><span>{{$skill->percentage}}</span></div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                            
                                <!-- Modal Add Skill -->
                                <div class="modal fade" id="addSkillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Skill</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="add-skill">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name </label>
                                                    <input type="text" name="name" value=""class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter skill name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Percentage</label>
                                                    <input type="number" max="100" min="0" name="percentage" class="form-control" id="exampleInputPassword1" placeholder="Enter percentage..">
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Add Skill -->
                                     
                                <!-- Modal Edit Skill -->
                                <div class="modal fade" id="editSkillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Skills</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="form_editSkill" method="post" action="">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name </label>
                                                    <input type="text" name="name" id="skill_name" value=""class="form-control"  aria-describedby="emailHelp" placeholder="Enter skill name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Percentage</label>
                                                    <input type="number" max="100" min="0" name="percentage" class="form-control" id="skill_percentage" placeholder="Enter percentage..">
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit Skill -->
    
                                <!-- Modal Delete Skill -->
                                <div class="modal fade" id="deleteSkillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Delete Skill</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form  role="form" id="form_deleteSkill"  method="post">
                                                {{csrf_field()}}
                                                <p>Do you want to delete skill <span id="delskill_name"></span> ??</p>
                                                <button  type="submit" class="btn btn-primary save pull-right">Yes</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">No</button>
                            
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Delete Skill -->

                            </div>
                            <div class="col-md-7 techniques"> 
                                <div class="panel">
                                    <div class="panel-header">
                                        <h6>Techniques</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#addTechniqueModal"><i class="fa fa-plus "></i></button>
                                    </div>
                                    <div class="panel-body pt-5">  
                                        <div class="d-flex flex-wrap">                 
                                            @foreach ($techniques as $technique)
                                            <div class="col-md-6 technique">
                                                <div class="technique-choices">
                                                    <a href=""  data-id="{{ $technique->id }}"  id="editTechnique" data-toggle="modal" data-target="#editTechniqueModal"><i class="fa fa-edit mr-2"></i></a>
                                                    <a href="" data-id="{{ $technique->id }}"  id="deleteTechnique" data-toggle="modal" data-target="#deleteTechniqueModal"><i class="fa fa-trash"></i></a>
                                                </div>
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
                                               
                                    <!-- Modal Add Technique -->
                                    <div class="modal fade" id="addTechniqueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Technique</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="add-technique">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name </label>
                                                        <input type="text" name="name" value=""class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter technique name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Percentage</label>
                                                        <input type="number" max="100" min="0" name="percentage" class="form-control" id="" placeholder="Enter percentage..">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                    <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Add Technique -->
                                            
                                            
                                    <!-- Modal Edit Technique -->
                                    <div class="modal fade" id="editTechniqueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Technique</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" id="form_editTechnique" method="post" action="">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name </label>
                                                        <input type="text" name="name" id="technique_name" value=""class="form-control"  aria-describedby="emailHelp" placeholder="Enter skill name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Percentage</label>
                                                        <input type="number" max="100" min="0" name="percentage" class="form-control" id="technique_percentage" placeholder="Enter percentage..">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                    <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Edit Technique -->
        
                                    <!-- Modal Delete Technique -->
                                    <div class="modal fade" id="deleteTechniqueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Delete Technique</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form  role="form" id="form_deleteTechnique"  method="post">
                                                    {{csrf_field()}}
                                                    <p>Do you want to delete technique <em id="deltechnique_name"></em> ??</p>
                                                    <button  type="submit" class="btn btn-primary save pull-right">Yes</button>
                                                    <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">No</button>
                                
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Delete Technique -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About Section  -->

                
                <!-- Achievements Section  -->
                <div class="tab-pane fade" id="v-pills-achievements" role="tabpanel" aria-labelledby="v-pills-achievements-tab">
                    <div class="d-flex justify-content-between topbar">
                        <h3><i class="fa fa-trophy mr-2"></i>Achievements</h3>
                        <button data-toggle="modal" data-target="#addAchievementModal" ><i class="fa fa-plus mr-3"></i>New</button>
                    </div>
                    <div class="tab-pane-content" id="achievements">
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
                <!-- End Achievements Section  -->


                <div class="tab-pane fade" id="v-pills-experience" role="tabpanel" aria-labelledby="v-pills-experience-tab">
                    <div class="d-flex justify-content-between topbar">
                        <h3><i class="fa fa-newspaper-o mr-2"></i>Experience</h3>
                    </div>
                </div>

                <!-- Contact Section  -->
                <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                    <div class="d-flex justify-content-between topbar">
                        <h3><i class="fa fa-phone mr-2"></i>Contact</h3>
                    </div>
                    <div class="tab-pane-content" id="contact">
                        <div class="row mb-3">
                            <div class="col-md-5"> 
                                <div class="panel contact-me">
                                    <div class="panel-header">
                                        <h6>Contact Me</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#editContactMeModal"><i class="fa fa-pencil-square-o "></i></button>
                                    </div>
                                    <div class="panel-body">  
                                        <p><i class="fa fa-phone"></i>{{$links->phone}}</p>
                                        <p><i class="fa fa-envelope-o"></i>{{$links->email}}</p>
                                        <p><i class="fa fa-map-marker"></i>{{$links->location}}</p>
                                    </div>
                                </div>
                                <!-- Modal Edit Contact Me -->
                                <div class="modal fade" id="editContactMeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Contact Me</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="edit-contactme">
                                                {{csrf_field()}}
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                    </div>
                                                    <input type="text" name="phone" class="form-control" value="{{$links->phone}}" placeholder="phone">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                                    </div>
                                                    <input type="text"  name="email" class="form-control" value="{{$links->email}}" placeholder="email">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                    </div>
                                                    <input type="text" name="location"  class="form-control"value="{{$links->location}}" placeholder="location">
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit Contact Me -->
                            </div>
                            <!-- Social Links  --> 
                            <div class="col-md-7"> 
                                <div class="panel social_links">
                                    <div class="panel-header">
                                        <h6>Social Links</h6>
                                        <button class="pull-right" data-toggle="modal" data-target="#editSocialLinksModal"><i class="fa fa-pencil-square-o "></i></button>
                                    </div>
                                    <div class="panel-body">   
                                        <div class="line">
                                            <label><i class="fa fa-facebook"></i></label>
                                            <a href="{{$links->facebook}}" target="_blank"
                                                class="#">{{$links->facebook}}</i></a>
                                        </div>
                                        <div class="line">
                                            <label><i class="fa fa-linkedin"></i></label>
                                            <a href="{{$links->linkedin}}" target="_blank"
                                                class="#">{{$links->linkedin}}</i></a>
                                        </div>
                                        <div class="line">
                                            <label><i class="fa fa-twitter"></i></label>
                                            <a href="{{$links->twitter}}" target="_blank"
                                                class="#">{{$links->twitter}}</i></a>
                                        </div>
                                        <div class="line">
                                            <label><i class="fa fa-instagram"></i></label>
                                            <a href="{{$links->instagram}}" target="_blank"
                                                class="#">{{$links->instagram}}</i></a>
                                        </div>
                                        <div class="line">
                                            <label><i class="fa fa-github"></i></label>
                                            <a href="{{$links->github}}" target="_blank"
                                                class="#">{{$links->github}}</i></a>
                                        </div>
                                    </div>
                                
                                <!-- Modal Edit Social Links -->
                                <div class="modal fade" id="editSocialLinksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Social Links </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="edit-sociallinks">
                                                {{csrf_field()}}
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-facebook"></i></div>
                                                    </div>
                                                    <input type="text" name="facebook" class="form-control" value="{{$links->facebook}}" placeholder="facebook url">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-linkedin"></i></div>
                                                    </div>
                                                    <input type="text"  name="linkedin" class="form-control" value="{{$links->linkedin}}" placeholder="linkedin url">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-twitter"></i></div>
                                                    </div>
                                                    <input type="text" name="twitter"  class="form-control"value="{{$links->twitter}}" placeholder="twitter url">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-instagram"></i></div>
                                                    </div>
                                                    <input type="text" name="instagram"  class="form-control"value="{{$links->instagram}}" placeholder="instagram url">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-github"></i></div>
                                                    </div>
                                                    <input type="text" name="github"  class="form-control"value="{{$links->github}}" placeholder="github url">
                                                </div>
                                                <button type="submit" class="btn btn-primary save pull-right">Save</button>
                                                <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit Social Links -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Section  -->

            </div>

        </div>
        <!------------------- End Sidebar Content -------------------->

    </div>

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- Custom script -->
    <script  src="{{ asset('js/dashboard.js') }}"> </script>
</body>
</html>
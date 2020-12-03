
@extends('dashboard.dashboard')

@section('content')

<!-- About Section  -->

<div class="tab-pane fade show active " id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
    <div class="d-flex justify-content-between topbar">
        
        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-address-book mr-2"></i>About</h3>
        </div>
    </div>
    <div class="tab-pane-content" id="about">
        @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row ">
            <div class="col-md-7 pb-3"> 
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
            <div class="col-md-5 pb-3"> 
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
            <div class="col-md-5  pb-3 skills"> 
                <div class="panel">
                    <div class="panel-header">
                        <h6>Skills</h6>
                        <button class="pull-right" data-toggle="modal" data-target="#addSkillModal"><i class="fa fa-plus "></i></button>
                    </div>
                    <div class="panel-body">  
                        <div class="row"> 
                            @foreach ($skills as $skill)
                            <div class="skill col-md-6">
                                <div class="skill-choices choices">
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
            <div class="col-md-7 pb-3 techniques"> 
                <div class="panel">
                    <div class="panel-header">
                        <h6>Techniques</h6>
                        <button class="pull-right" data-toggle="modal" data-target="#addTechniqueModal"><i class="fa fa-plus "></i></button>
                    </div>
                    <div class="panel-body pt-5">  
                        <div class="d-flex flex-wrap">                 
                            @foreach ($techniques as $technique)
                            <div class="col-md-6 technique">
                                <div class="technique-choices choices">
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

@endsection
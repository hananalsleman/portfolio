@extends('dashboard.dashboard')

@section('content')

<div class="tab-pane fade show active" id="v-pills-experience" role="tabpanel" aria-labelledby="v-pills-experience-tab">
    <div class="d-flex justify-content-between topbar">

        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-newspaper-o mr-2"></i>Experience</h3>
        </div>
        
        <button data-toggle="modal" data-target="#addExperienceModal" ><i class="fa fa-plus mr-3"></i>New</button>
    </div>
    <div class="tab-pane-content" id="experience">
        @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
        @endif
        <div id="cd-timeline" class="cd-container">
        @foreach ($experiences as $experience)
            <div class="cd-timeline-block experience ">
                <div class="experience-date pointer">
                    <div class="choices">
                        <a href=""  data-id="{{ $experience->id }}"  id="editExperience" data-toggle="modal" data-target="#editExperienceModal"><i class="fa fa-edit mr-2"></i></a>
                        <a href="" data-id="{{ $experience->id }}"  id="deleteExperience" data-toggle="modal" data-target="#deleteExperienceModal"><i class="fa fa-trash"></i></a>
                    </div> 
                    <span>  {{ $experience->start_year }} - {{ $experience->end_year }}</span>
                </div>
                <div class="cd-timeline-img cd-picture wow fadeInLeft " data-wow-delay="0.6s">
                    <span >{{ $loop->index+1 }}</span>
                </div>

                <div class="experience-content cd-timeline-content service-box-content wow fadeInLeft panel">
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
           
        <!-- Modal Add Experience -->
        <div class="modal fade" id="addExperienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="add-experience">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" name="title" required class="form-control" id=" " aria-describedby="emailHelp" placeholder="Enter Experience title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Organisation</label>
                            <input type="text" name="organisation" required class="form-control" id=" " placeholder="Enter organisation name..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Country</label>
                            <input type="text" name="country" required class="form-control" id=" " placeholder="Enter country name..">
                        </div>
                        <div class="row date">
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Start Month</label>
                                <input type="number" max="12" min="1" name="start_month" required class="form-control " id=" " placeholder="Start Month..">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Start Year</label>
                                <input type="number" max="" min="1990" name="start_year" required class="form-control " id=" " placeholder="Start Year">
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">End Month</label>
                                <input type="number" max="12" min="1" name="end_month" required class="form-control " id=" " placeholder="End Month">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">End Year</label>
                                <input type="number" max="" min="1990" name="end_year" required class="form-control " id=" " placeholder="End Year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" required class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary save pull-right">Save</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add Experience -->
              
        <!-- Modal Edit Experience -->
        <div class="modal fade" id="editExperienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" id="form_editExperience" action="">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" name="title" required class="form-control" id="experience_title" aria-describedby="emailHelp" placeholder="Enter Experience title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Organisation</label>
                            <input type="text" name="organisation" required class="form-control" id="experience_organisation" placeholder="Enter organisation name..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Country</label>
                            <input type="text" name="country" required class="form-control" id="experience_country" placeholder="Enter country name..">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Start Month</label>
                                <input type="number" max="12" min="1" name="start_month" required class="form-control " id="experience_start_month" placeholder="Start Month..">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Start Year</label>
                                <input type="number" max="" min="1990" name="start_year" required class="form-control " id="experience_start_year" placeholder="Start Year">
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">End Month</label>
                                <input type="number" max="12" min="1" name="end_month" required class="form-control " id="experience_end_month" placeholder="End Month">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">End Year</label>
                                <input type="number" max="" min="1990" name="end_year" required class="form-control " id="experience_end_year" placeholder="End Year">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" required id="experience_description" class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary save pull-right">Save</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Edit Experience -->
              
        <!-- Modal Delete Experience -->
        <div class="modal fade" id="deleteExperienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  role="form" id="form_deleteExperience"  method="post">
                        {{csrf_field()}}
                        <p>Do you want to delete experience <em id="delExperience_title"></em> ??</p>
                        <button  type="submit" class="btn btn-primary save pull-right">Yes</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">No</button>
    
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Delete Experience -->

    </div>
</div>

@endsection
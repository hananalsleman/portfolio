@extends('dashboard.dashboard')

@section('content')

<div class="tab-pane fade show active" id="v-pills-achievements" role="tabpanel" aria-labelledby="v-pills-achievements-tab">
    <div class="d-flex justify-content-between topbar">
        
        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-trophy mr-2"></i>Achievements</h3>
        </div>
        <button data-toggle="modal" data-target="#addAchievementModal" ><i class="fa fa-plus mr-3"></i>New</button>
    </div>
    <div class="tab-pane-content" id="achievements">
        @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row flex-wrap justify-content-center mb-3">
        @foreach ($achievements as $achievement)
            <div class="col-md-4 mb-5 mt-2"> 
                <div class="panel achievement">
                    <div class="panel-header">
                        <div class="icon-container"><i class="fa fa-trophy"></i></div>
                    </div>
                    <div class="panel-body"> 
                        <div class="achievement-choices choices">
                            <a href=""  data-id="{{ $achievement->id }}"  id="editAchievement" data-toggle="modal" data-target="#editAchievementModal"><i class="fa fa-edit mr-2"></i></a>
                            <a href="" data-id="{{ $achievement->id }}"  id="deleteAchievement" data-toggle="modal" data-target="#deleteAchievementModal"><i class="fa fa-trash"></i></a>
                        </div>  
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
             
        <!-- Modal Add Achievement -->
        <div class="modal fade" id="addAchievementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Achievement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="add-achievement">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" name="title" value=""class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter achievement title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Organisation</label>
                            <input type="text" name="organisation" class="form-control" id="exampleInputPassword1" placeholder="Enter organisation name..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Year</label>
                            <input type="number" max="" name="year" class="form-control" id="exampleInputPassword1" placeholder="Enter year..">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary save pull-right">Save</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add Achievement -->
              
        <!-- Modal Edit Achievement -->
        <div class="modal fade" id="editAchievementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Achievement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" id="form_editAchievement" action="">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" name="title" value=""class="form-control" id="achievement_title" aria-describedby="emailHelp" placeholder="Enter achievement title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Organisation</label>
                            <input type="text" name="organisation" class="form-control" id="achievement_organisation" placeholder="Enter organisation name..">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Year</label>
                            <input type="number" max="" name="year" class="form-control" id="achievement_year" placeholder="Enter year..">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" id="achievement_description" class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary save pull-right">Save</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">Close</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Edit Achievement -->
              
        <!-- Modal Delete Achievement -->
        <div class="modal fade" id="deleteAchievementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Achievement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  role="form" id="form_deleteAchievement"  method="post">
                        {{csrf_field()}}
                        <p>Do you want to delete achievement <em id="delAchievement_title"></em> ??</p>
                        <button  type="submit" class="btn btn-primary save pull-right">Yes</button>
                        <button type="button" class="btn btn-secondary cancel pull-right mr-1" data-dismiss="modal">No</button>
    
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal Delete Achievement -->

    </div>
</div>

@endsection
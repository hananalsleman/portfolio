
@extends('dashboard.dashboard')

<!-- Home Section  -->
@section('content')
   
<div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    
    <div class="d-flex justify-content-between align-items-end topbar">
        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-home mr-2"></i>Home</h3>
        </div>
        <button data-toggle="modal" data-target="#editHomeModal" ><i class="fa fa-pencil-square-o mr-1"></i>Edit</button>
    </div>
    
    <div class="tab-pane-content d-flex flex-wrap panel" id="home">
        <img src="uploads/{{ $myinfo->image  }}" class="col-12 col-md-5 " alt="">
        <div class="col-12 col-md-7 d-flex mt-3 mt-md-0 pt-2  pl-4 align-items-center"> 
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
                <form role="form" method="post" action="edit-home" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name </label>
                        <input type="text" name="name" required value="{{ $myinfo->name }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Job</label>
                        <input type="text" name="job" required value="{{ $myinfo->job }}" class="form-control" id="exampleInputPassword1" placeholder="Jobs..">
                        <small id="emailHelp" class="form-text text-muted">Put ',' between every two jobs please.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" required class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $myinfo->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
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
@endsection
<!-- End Home Section  -->
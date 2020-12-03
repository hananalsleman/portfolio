@extends('dashboard.dashboard')

@section('content')

<div class="tab-pane fade show active" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="d-flex justify-content-between topbar">
        
        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-phone mr-2"></i>Contact</h3>
        </div>
        
    </div>
    <div class="tab-pane-content" id="contact">
        @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row ">
            <div class="col-md-5  pb-3 "> 
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
                                    <input type="text" required name="phone" class="form-control" value="{{$links->phone}}" placeholder="phone">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                    </div>
                                    <input type="text" required name="email" class="form-control" value="{{$links->email}}" placeholder="email">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <input type="text" required name="location"  class="form-control"value="{{$links->location}}" placeholder="location">
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
            <div class="col-md-7  pb-3 "> 
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



@endsection
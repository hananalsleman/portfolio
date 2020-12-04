@extends('dashboard.dashboard')

@section('content')

<div class="tab-pane fade show active " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    
    <div class="d-flex justify-content-between align-items-end topbar">
        <div class="d-flex align-items-end">  
            <button class="collapse d-lg-none" id="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <h3><i class="fa fa-home mr-2"></i>Messages</h3>
        </div>
    </div>
    
    <div class="tab-pane-content d-flex flex-wrap panel" id="home">
        
    </div>

</div>
@endsection
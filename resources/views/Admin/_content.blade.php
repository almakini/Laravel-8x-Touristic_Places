<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="{{route('admin_users')}}">
                    <div class="box bg-info text-center">
                        <i class="fa fa-user mb-1 font-16  text-white"></i>
                        <h5 class="mb-0 mt-1  text-white">{{$usersCount}}</h5>
                        <small class="font-light text-white">Total Users</small>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="{{route('admin_places')}}">
                    <div class="box bg-warning text-center">
                        <i class="mdi mdi-map-marker mb-1 font-16  text-white"></i>
                        <h5 class="mb-0 mt-1  text-white">{{$placesCount}}</h5>
                        <small class="font-light text-white">Total Places</small>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="{{route('admin_messages')}}">
                    <div class="box bg-danger text-center">
                        <i class="mdi mdi-message mb-1 font-16  text-white"></i>
                        <h5 class="mb-0 mt-1  text-white">{{$smsCount}}</h5>
                        <small class="font-light text-white">New Messages</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

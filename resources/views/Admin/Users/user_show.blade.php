<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Almakini">
    <title>Baladi | {{$user->name}}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="12x12" href="{{asset('admin_assets')}}/images/logo-icon.png">
    <!-- Custom CSS -->
    <link href="{{asset('admin_assets')}}/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin_assets')}}/css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <h3>User Roles</h3>
                </div>
                <div>@include('Home.message')</div>
                <div class="card">
                    <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                        aria-describedby="zero_config_info">
                        <tr role="row">
                            <th rowspan="8" align="center" valign="center">

                                @if ($user->profile_photo_path)
                                <img src="{{Storage::url($user->profile_photo_path)}}" witdth="80" height="150" alt="">
                                @endif
                            </th>
                        </tr>
                        <tr role="row">
                            <th><b>Name</b></th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr role="row">
                            <th><b>Email</b></th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr role="row">
                            <th><b>Phone</b></th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr role="row">
                            <th><b>Address</b></th>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr role="row">
                            <th><b>Date</b></th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        <tr role="row">
                            <th><b>Roles</b></th>
                            <td>
                                <table>
                                    @foreach($user->roles as $role)
                                    <tr role="row">
                                        <td>{{$role->name}}
                                        <td>
                                        <td><a href="{{route('admin_user_role_delete', ['user_id'=>$user->id, 'role_id'=>$role->id])}}"
                                                onclick="return confirm('Do you want to delete?')"
                                                class="me-2 mdi mdi-delete"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                        <tr role="row">
                            <th><b>Add Roles</b></th>
                            <td>
                                <form class="form-horizontal"
                                    action="{{route('admin_user_role_add', ['id'=>$user->id])}}" method="post">
                                    @csrf
                                    <select class="select2 form-select shadow-none select2-hidden-accessible"
                                        name="role_id" style="">
                                        @foreach($roles as $role)
                                        <option data-select2-id="3" value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select><br>
                                    <div style="text-align:center; float:right; margin-right:3px;" class="form-group">
                                        <button type="submit" class=" btn btn-primary" style="text-align:center;">Add
                                            Role</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin_assets')}}/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin_assets')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin_assets')}}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('admin_assets')}}/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin_assets')}}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin_assets')}}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin_assets')}}/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{asset('admin_assets')}}/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('admin_assets')}}/libs/flot/excanvas.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot/jquery.flot.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot/jquery.flot.time.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{asset('admin_assets')}}/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('admin_assets')}}/js/pages/chart/chart-page-init.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Almakini">
    <title>Baladi | Review</title>
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
                    <h3>Review</h3>
                </div>
                <div class="card">
                    <div>@include('Home.message')</div>
                    <form class="form-horizontal" action="{{route('user_review_update', ['id'=>$review->id])}}"
                        method="post">
                        @csrf
                        <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                            aria-describedby="zero_config_info">
                            <tr role="row">
                                <th><b>ID</b></th>
                                <td>{{$review->place->id}}</td>
                            </tr>
                            <tr role="row">
                                <th><b>Place</b></th>
                                <td>{{$review->place->title}}</td>
                            </tr>
                            <tr role="row">
                                <th><b>Subject</b></th>
                                <td><input name="subject" class="form-control" value="{{$review->subject}}"></td>
                            </tr>
                            <tr role="row">
                                <th><b>Review</b></th>
                                <td><textarea name="review" class="form-control">{{$review->review}}</textarea></td>
                            </tr>
                            <tr role="row">
                                <th><b>Rate</b></th>
                                <td>{{$review->rate}}</td>
                            </tr>
                            <tr role="row">
                                <th><b>Status</b></th>
                                <td>
                                    <select class="select2 form-select shadow-none select2-hidden-accessible"
                                        name="status" style="">
                                        <option data-select2-id="3" @if ($review->status == 'Active') selected
                                            @endif>Active</option>
                                        <option data-select2-id="3" @if ($review->status == 'Inactive') selected
                                            @endif>Inactive</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
                            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
                        </div>
                    </form>
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

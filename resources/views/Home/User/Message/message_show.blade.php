<?php
    $settings = \App\Http\Controllers\MainController::getSetting();
	$parentCategories = \App\Http\Controllers\MainController::categoryList();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Almakini">
    <title>{{$settings->title}} | Message</title>
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
            <div class="container-fluid"><br>
                <div class="row mb-2 align-items-center">
                    <h3>Message</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="zero_config" class="table table-striped table-bordered dataTable"
                                            role="grid" aria-describedby="zero_config_info">
                                            <tr role="row">
                                                <th><b>ID</b></th>
                                                <td>{{$message->id}}</td>
                                            </tr>
                                            <tr role="row">
                                                <th><b>Subject</b></th>
                                                <td>{{$message->subject}}</td>
                                            </tr>
                                            <tr role="row">
                                                <th><b>Message</b></th>
                                                <td>{{$message->message}}</td>
                                            </tr>
                                            <tr role="row">
                                                <th><b>Admin Note</b></th>
                                                <td>{{$message->note}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
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

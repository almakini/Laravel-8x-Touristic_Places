<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Almakini">
    <title>Baladi | Editing FAQ</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="12x12" href="{{asset('admin_assets')}}/images/logo-icon.png">
    <!-- Custom CSS -->
    <link href="{{asset('admin_assets')}}/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin_assets')}}/css/style.min.css" rel="stylesheet">

    <!-- New Js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <h3>Editing FAQ</h3>
        </div>
        <div class="card">
            <div>@include('Home.message')</div>
            <form class="form-horizontal" action="{{route('admin_faq_update', ['id'=>$faq->id])}}" method="post">
                @csrf
                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                    aria-describedby="zero_config_info">
                    <tr role="row">
                        <th><b>ID</b></th>
                        <td>{{$faq->id}}</td>
                    </tr>
                    <tr role="row">
                        <th><b>Question</b></th>
                        <td><input type="text" name="question" class="form-control" value="{{$faq->question}}"></td>
                    </tr>
                    <tr role="row">
                        <th><b>Answer</b></th>
                        <td><textarea name="answer" id="summernote" class="form-control">{{$faq->answer}}</textarea>
                        </td>
                    </tr>
                    <tr role="row">
                        <th><b>Position</b></th>
                        <td><input type="number" name="position" class="form-control" value="{{$faq->position}}"></td>
                    </tr>
                    <tr role="row">
                        <th><b>Status</b></th>
                        <td>
                            <select class="select2 form-select shadow-none select2-hidden-accessible" name="status"
                                style="">
                                <option data-select2-id="3" @if ($faq->status == 'True') selected
                                    @endif>True</option>
                                <option data-select2-id="3" @if ($faq->status == 'False') selected
                                    @endif>False</option>
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
    <script type="text/javascript">
    $('#summernote').summernote({
        placeholder: 'Place Detail',
        tabsize: 2,
        height: 100
    });
    </script>
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

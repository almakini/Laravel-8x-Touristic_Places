@extends('layouts.admin')

@section('title', 'Images Gallery')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Images Gallery</h3>
    </div>
    <div class="card">
        <form class="form-horizontal" action="{{route('admin_image_store', ['place_id'=>$place->id])}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">{{$place->title}}</h4>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" id="lname" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="image" id="lname" placeholder="Image">
                    </div>
                </div>
            </div>
            <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
                <button type="submit" class=" btn btn-primary" style="text-align:center;">Add</button>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="zero_config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 58.0781px; text-align:center;"><b>ID</b></th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 58.0781px; text-align:center;"><b>Title</b></th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 58.0781px; text-align:center;"><b>Image</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 72.2969px; text-align:center;"><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($images as $image)
                                    <tr role="row" class="odd">
                                        <td style="text-align:center;">
                                            {{$image->id}}
                                        </td>
                                        <td style="text-align:center;">
                                            {{$image->title}}
                                        </td>
                                        <td style="text-align:center;">
                                            @if ($image->image)
                                            <img src="{{Storage::url($image->image)}}" witdth="400" height="200" alt="">
                                            @endif
                                        </td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_image_delete', ['id'=>$image->id, 'place_id'=>$image->place_id])}}"
                                                onclick="return confirm('Do you want to delete?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="zero_config_previous"><a
                                            href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="zero_config"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                            data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="zero_config"
                                            data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="zero_config_next"><a href="#"
                                            aria-controls="zero_config" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    @endsection

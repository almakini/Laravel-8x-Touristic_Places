@extends('layouts.admin')

@section('title', 'Places List')

@section('content')

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Places List</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div>
                <form action="{{route('admin_place_add')}}">
                    <button type="submit" class="btn btn-primary">Add a place</button>
                </form>
            </div>
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="zero_config_length">
                                <label>Show
                                    <select name="zero_config_length" aria-controls="zero_config"
                                        class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    entries
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="zero_config_filter" class="dataTables_filter">
                                <label>Search:
                                    <input type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="zero_config">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="zero_config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 72.2969px; text-align:center;"><b>ID</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 72.2969px; text-align:center;"><b>Parent ID</b></th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 58.0781px; text-align:center;"><b>Title</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 72.2969px; text-align:center;"><b>Keywords</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Country</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>City</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Address</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Image</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Images Galery</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Slug</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>User ID</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Status</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Edit</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($places as $place)
                                    <tr role="row" class="odd">
                                        <td style="text-align:center;">{{$place->id}}</td>
                                        <td style="text-align:center;">{{$place->category_id}}</td>
                                        <td style="text-align:center;">{{$place->title}}</td>
                                        <td style="text-align:center;">{{$place->keywords}}</td>
                                        <td style="text-align:center;">{{$place->country}}</td>
                                        <td style="text-align:center;">{{$place->city}}</td>
                                        <td style="text-align:center;">{{$place->address}}</td>
                                        <td style="text-align:center;">
                                            @if ($place->image)
                                            <img src="{{Storage::url($place->image)}}" witdth="50" height="70" alt="">
                                            @endif
                                        </td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_image_show', ['place_id'=>$place->id])}}">Show</a>
                                        </td>
                                        <td style="text-align:center;">{{$place->user_id}}</td>
                                        <td style="text-align:center;">{{$place->slug}}</td>
                                        <td style="text-align:center;">{{$place->user_id}}</td>
                                        <td style="text-align:center;">{{$place->status}}</td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_place_edit', ['id'=>$place->id])}}">Edit</a>
                                        </td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_place_delete', ['id'=>$place->id])}}"
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

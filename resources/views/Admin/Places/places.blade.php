@extends('layouts.admin')

@section('title', 'Places List')

@section('content')
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Places List</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div>
                <form action="{{route('admin_place_add')}}">
                    <button type="submit" class="btn btn-primary"
                        style="margin-left:10px; margin-bottom:15px; height:40px;">Add a place</button>
                </form>
            </div>
            <div style="">@include('Home.message')</div>
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
                                            aria-label="Name: activate to sort column descending" style="">
                                            <b>ID</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="">
                                            <b>Category</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending" style="">
                                            <b>Title</b>
                                        </th>
                                        <th class="" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending" style="">
                                            <b>Image</b>
                                        </th>
                                        <th class="" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                            aria-label="Start date: activate to sort column ascending" style="">
                                            <b>Images Gallery</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending" style="">
                                            <b>Status</b>
                                        </th>
                                        <th class="" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                            style="">
                                            <b>Edit</b>
                                        </th>
                                        <th class="" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                            style="">
                                            <b>Delete</b>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($places as $place)
                                    <tr role="row" class="odd">
                                        <td>{{$place->id}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($place->category, $place->category->title)}}
                                        </td>
                                        <td>{{$place->title}}</td>
                                        <td>
                                            @if ($place->image)
                                            <img src="{{Storage::url($place->image)}}" witdth="50" height="70" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin_image_show', ['place_id'=>$place->id])}}"
                                                class="me-2 mdi mdi-folder-multiple-image"
                                                onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')"></a>
                                        </td>
                                        <td>{{$place->status}}</td>
                                        <td><a href="{{route('admin_place_edit', ['id'=>$place->id])}}"
                                                class="fas fa-edit"></a>
                                        </td>
                                        <td><a href="{{route('admin_place_delete', ['id'=>$place->id])}}"
                                                onclick="return confirm('Do you want to delete?')"
                                                class="me-2 mdi mdi-delete"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

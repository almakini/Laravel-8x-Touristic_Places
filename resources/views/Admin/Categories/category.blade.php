@extends('layouts.admin')

@section('title', 'Categories List')

@section('content')
<div class="row mb-2 align-items-center">
    <h3>Categories List</h3>
</div>
<div class="card">
    <div class="card-body">
        <div>
            <form action="{{route('admin_category_add')}}">
                <button type="submit" class="btn btn-primary"
                    style="margin-left:10px; margin-bottom:15px; height:40px;">Add a
                    category</button>
            </form>
        </div>
        <div class="table-responsive">
            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        @include('Home.message')
                        <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                            aria-describedby="zero_config_info">
                            <thead>
                                <tr role="row">
                                    <th><b>ID</b></th>
                                    <th><b>Parent</b></th>
                                    <th><b>Title</b></th>
                                    <th><b>Image</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Edit</b></th>
                                    <th><b>Delete</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $cat)
                                <tr role="row" class="odd">
                                    <td>{{$cat->id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($cat, $cat->title)}}
                                    </td>
                                    <td>{{$cat->title}}</td>
                                    <td>
                                        @if ($cat->image)
                                        <img src="{{Storage::url($cat->image)}}" witdth="40" height="50" alt="">
                                        @endif
                                    </td>
                                    <td>{{$cat->status}}</td>
                                    <td><a href="{{route('admin_category_edit', ['id'=>$cat->id])}}"
                                            class="fas fa-edit"></a></td>
                                    <td><a href="{{route('admin_category_delete', ['id'=>$cat->id])}}"
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
@endsection

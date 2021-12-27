@extends('layouts.admin')

@section('title', 'Categories List')

@section('content')
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Users List</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Users</h5>
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                            aria-describedby="zero_config_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 72.2969px; text-align:center;"><b>ID</b></th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending"
                                        style="width: 58. 0781px; text-align:center;"><b>Name</b></th>
                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 72.2969px; text-align:center;"><b>Email</b></th>
                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 61.125px; text-align:center;"><b>Edit</b></th>
                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 61.125px; text-align:center;"><b>Delete</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a
                                            href="{{route('admin_user_edit', ['id'=>$user->id])}}"
                                            class="fas fa-edit"></a></td>
                                    <td><a
                                            href="{{route('admin_user_delete', ['id'=>$user->id])}}"
                                            class="me-2 mdi mdi-delete"></a></td>
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
@endsection

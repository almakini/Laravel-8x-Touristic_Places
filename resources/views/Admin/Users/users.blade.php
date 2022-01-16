@extends('layouts.admin')

@section('title', 'Users List')

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
                                    <th><b>ID</b></th>
                                    <th><b>Photo</b></th>
                                    <th><b>Name</b></th>
                                    <th><b>Email</b></th>
                                    <th><b>Phone</b></th>
                                    <th><b>Address</b></th>
                                    <th><b>Role</b></th>
                                    <th><b>Edit</b></th>
                                    <th><b>Delete</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{$user->id}}</td>
                                    <td>
                                        @if ($user->profile_photo_path)
                                        <img src="{{Storage::url($user->profile_photo_path)}}" witdth="20" height="30"
                                            alt="">
                                        @endif
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                        {{$role->name}}&nbsp;
                                        @endforeach
                                        <a href="{{route('admin_user_roles', ['id'=>$user->id])}}" class="fas fa-edit"
                                            onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')"></a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit', ['id'=>$user->id])}}"
                                            class="fas fa-edit"></a></td>
                                    <td><a href="{{route('admin_user_delete', ['id'=>$user->id])}}"
                                            onclick="return confirm('Do you want to delete?')"
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

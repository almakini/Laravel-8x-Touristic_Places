@extends('layouts.admin')

@section('title', 'Reviews List')

@section('content')
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Reviews List</h3>
    </div>
    <div class="card">
        <div class="card-body">
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
                                            <b>Name</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending" style="">
                                            <b>Place</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending" style="">
                                            <b>Subject</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="">
                                            <b>Review</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending" style="">
                                            <b>Rate</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="">
                                            <b>Status</b>
                                        </th>
                                        <th class="sorting" aria-label="Start date: activate to sort column ascending"
                                            tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="">
                                            <b>Date</b>
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
                                    @foreach($reviews as $rs)
                                    <tr role="row" class="odd">
                                        <td>{{$rs->place->id}}</td>
                                        <td><a href="{{route('admin_user_show', ['id'=>$rs->user->id])}}"
                                                onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')">{{$rs->user->name}}</a>
                                        </td>
                                        <td>{{$rs->place->title}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td><a href="{{route('admin_review_edit', ['id'=>$rs->id])}}"
                                                class="fas fa-edit"></a>
                                        </td>

                                        <td><a href="{{route('admin_review_delete', ['id'=>$rs->id])}}"
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

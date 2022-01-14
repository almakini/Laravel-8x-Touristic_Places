@extends('layouts.admin')

@section('title', 'Reviews List')

@section('content')
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Reviews List</h3>
    </div>
    <div class="card">
        <div>@include('Home.message')</div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="zero_config_info">
                                <thead>
                                    <tr role="row">
                                        <th><b>ID</b></th>
                                        <th><b>Place</b></th>
                                        <th><b>Subject</b></th>
                                        <th><b>Review</b></th>
                                        <th><b>Rate</b></th>
                                        <th><b>Status</b></th>
                                        <th><b>Date</b></th>
                                        <th><b>Edit</b></th>
                                        <th><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $rs)
                                    <tr role="row" class="odd">
                                        <td>{{$rs->place->id}}</td>
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
    @endsection

@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Messages</h3>
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
                                        <th><b>ID</b></th>
                                        <th><b>Name</b></th>
                                        <th><b>Subject</b></th>
                                        <th><b>Message</b></th>
                                        <th><b>Admin Note</b></th>
                                        <th><b>Status</b></th>
                                        <th><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                    <tr role="row" class="odd">
                                        <td>{{$message->id}}</td>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->subject}}</td>
                                        <td><a href="{{route('admin_message_edit', ['id'=>$message->id])}}"
                                                class="me-2 mdi mdi-open-in-new"
                                                onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')"></a>
                                        </td>
                                        <td>{{$message->note}}</td>
                                        <td>{{$message->status}}</td>
                                        <td><a href="{{route('admin_message_delete', ['id'=>$message->id])}}"
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    @endsection

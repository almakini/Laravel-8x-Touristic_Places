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
                                            <b>Subject</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending" style="">
                                            <b>Message</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="">
                                            <b>Admin Note</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending" style="">
                                            <b>Status</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="">
                                            <b>Delete</b>
                                        </th>
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
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
@endsection

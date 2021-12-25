@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>Messages</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div>
                <form action="{{route('admin_place_add')}}">
                    <button type="submit" class="btn btn-primary"
                        style="margin-left:10px; margin-bottom:15px; height:40px;">Contact messages</button>
                </form>
            </div>
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
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
                                            style="width: 72.2969px; text-align:center;"><b>Name</b></th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 58.0781px; text-align:center;"><b>Email</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Phone</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 50.5781px; text-align:center;"><b>Subject</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Message</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Show</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Edit</b></th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 61.125px; text-align:center;"><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                    <tr role="row" class="odd">
                                        <td style="text-align:center;">{{$message->id}}</td>
                                        <td style="text-align:center;">{{$message->name}}</td>
                                        <td style="text-align:center;">{{$message->email}}</td>
                                        <td style="text-align:center;">{{$message->phone}}</td>
                                        <td style="text-align:center;">{{$message->subject}}</td>
                                        <td style="text-align:center;">{{$message->message}}</td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_message_show', ['id'=>$message->id])}}" class=""
                                                onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')">Show</a>
                                        </td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_message_edit', ['id'=>$message->id])}}"
                                                class="fas fa-edit"></a>
                                        </td>
                                        <td style="text-align:center;"><a
                                                href="{{route('admin_message_delete', ['id'=>$message->id])}}"
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

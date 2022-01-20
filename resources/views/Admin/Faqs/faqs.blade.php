@extends('layouts.admin')

@section('title', 'FAQs List')

@section('content')
<div class="container-fluid">
    <div class="row mb-2 align-items-center">
        <h3>FAQs List</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div>
                <form action="{{route('admin_faq_add')}}">
                    <button type="submit" class="btn btn-primary"
                        style="margin-left:10px; margin-bottom:15px; height:40px;">Add a FAQ</button>
                </form>
            </div>
            <div>@include('Home.message')</div>
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
                                            <b>Position</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending" style="">
                                            <b>Question</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending" style="">
                                            <b>Answer</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="">
                                            <b>Status</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending" style="">
                                            <b>Edit</b>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" style="">
                                            <b>Delete</b>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faqs as $rs)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$rs->id}}</td>
                                        <td>{{$rs->position}}
                                        </td>
                                        <td>{{$rs->question}}</td>
                                        <td>{!!$rs->answer!!}
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_faq_edit', ['id'=>$rs->id])}}" class="fas fa-edit"
                                                onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=500')"></a>
                                        </td>
                                        <td><a href="{{route('admin_faq_delete', ['id'=>$rs->id])}}"
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

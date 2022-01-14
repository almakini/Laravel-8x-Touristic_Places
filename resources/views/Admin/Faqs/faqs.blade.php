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
                                        <th><b>ID</b></th>
                                        <th><b>Position</b></th>
                                        <th><b>Question</b></th>
                                        <th><b>Answer</b></th>
                                        <th><b>Status</b></th>
                                        <th><b>Edit</b></th>
                                        <th><b>Delete</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faqs as $rs)
                                    <tr role="row" class="odd">
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->position}}</td>
                                        <td>{{$rs->question}}</td>
                                        <td>{!!$rs->answer!!}</td>
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

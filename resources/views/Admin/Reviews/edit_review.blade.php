@extends('layouts.admin')

@section('title', 'Editing Review')

@section('content')
<div class="row mb-2 align-items-center">
    <h3>Editing Review</h3>
</div>
<div class="card">
    <form class="form-horizontal" action="{{route('admin_review_update', ['id'=>$review->id])}}" method="post">
        @csrf
        <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
            aria-describedby="zero_config_info">
            <tr role="row">
                <th><b>ID</b></th>
                <td>{{$review->place->id}}</td>
            </tr>
            <tr role="row">
                <th><b>Place</b></th>
                <td>{{$review->place->title}}</td>
            </tr>
            <tr role="row">
                <th><b>Subject</b></th>
                <td>{{$review->subject}}</td>
            </tr>
            <tr role="row">
                <th><b>Review</b></th>
                <td>{{$review->review}}</td>
            </tr>
            <tr role="row">
                <th><b>Rate</b></th>
                <td>{{$review->rate}}</td>
            </tr>
            <tr role="row">
                <th><b>Status</b></th>
                <td>
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="status" style="">
                        <option data-select2-id="3" @if ($review->status == 'Active') selected
                            @endif>Active</option>
                        <option data-select2-id="3" @if ($review->status == 'Inactive') selected
                            @endif>Inactive</option>
                    </select>
                </td>
            </tr>
        </table>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
        </div>
    </form>
</div>
@endsection

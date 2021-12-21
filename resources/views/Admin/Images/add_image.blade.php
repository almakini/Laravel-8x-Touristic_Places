@extends('layouts.admin')

@section('title', 'Adding Image')

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@section('content')
<div class="card">
    <form class="form-horizontal" action="{{route('admin_image_store', ['place_id'=>$place->id])}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Place: {{$place->title}}</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" id="lname" placeholder="Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="image" id="lname" placeholder="Image">
                </div>
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Add</button>
        </div>
    </form>
</div>
@endsection

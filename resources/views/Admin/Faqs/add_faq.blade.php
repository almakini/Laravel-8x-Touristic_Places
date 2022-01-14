@extends('layouts.admin')

@section('title', 'Adding FAQ')

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
@endsection
@section('content')
<div class="row mb-2 align-items-center">
    <h3>Adding FAQ</h3>
</div>
<div class="card">
    <form class="form-horizontal" action="{{route('admin_faq_create')}}" method="post">
        @csrf
        <div class="card-body">
            <h4 class="card-title">Add a FAQ</h4>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Position</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="position" id="lname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Question</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="question" id="lname" placeholder="Question">
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Answer</label>
                <div class="col-sm-9">
                    <textarea name="answer" id="summernote" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9" data-select2-id="11">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" name="status" style="">
                        <option data-select2-id="3">True</option>
                        <option data-select2-id="3">False</option>
                    </select>
                </div>
            </div>
        </div>
        <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
            <button type="submit" class=" btn btn-primary" style="text-align:center;">Add</button>
        </div>
    </form>
</div>
<script type="text/javascript">
$('#summernote').summernote({
    placeholder: 'Place Detail',
    tabsize: 2,
    height: 100
});
</script>
@endsection

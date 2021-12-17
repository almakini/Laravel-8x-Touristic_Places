
@extends('layouts.admin')

@section('title', 'Adding Category')

@section('content')
<div class="card">
    <form class="form-horizontal">
        <div class="card-body">
            <h4 class="card-title">Add a category</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-end control-label col-form-label">ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" placeholder="ID">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Parent_ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" placeholder="Parent_ID">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" placeholder="Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" placeholder="Keywords">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                <div class="col-sm-9" data-select2-id="11">
                    <select class="select2 form-select shadow-none select2-hidden-accessible" style="">
                        <option data-select2-id="3">True</option>
                        <option data-select2-id="3">False</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
        </div>
            <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
                <button type="button" class=" btn btn-primary" style="text-align:center;">Add</button>
            </div>
        
    </form>
</div>
@endsection
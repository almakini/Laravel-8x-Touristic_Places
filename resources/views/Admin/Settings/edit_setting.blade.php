@extends('layouts.admin')

@section('title', 'Settings')

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@section('content')

@section('content')
<div class="row mb-2 align-items-center">
    <h3>Settings</h3>
</div>
<div class="card">
    <!-- Nav tabs -->
    <form class="form-horizontal" action="{{route('admin_setting_update', ['id'=>$data->id])}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#general" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">General</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#smtp" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">SMTP</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#social_medias" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Social Medias</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aboutus" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">About Us</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">Contact</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#references" role="tab"><span
                        class="hidden-sm-up"></span> <span class="hidden-xs-down">References</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="general" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">ID</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="id" id="lname" placeholder="ID"
                                value="{{$data->id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" id="lname" placeholder="Title"
                                value="{{$data->title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Keywords</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="keywords" id="lname" placeholder="Keywords"
                                value="{{$data->keywords}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control">{{$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="company" id="lname" placeholder="Company"
                                value="{{$data->company}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="lname" placeholder="Address"
                                value="{{$data->address}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="phone" id="lname" placeholder="Phone"
                                value="{{$data->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Fax</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="fax" id="lname" placeholder="Fax"
                                value="{{$data->fax}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="lname" placeholder="Email"
                                value="{{$data->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Website</label>
                        <div class="col-sm-9">
                            <input type="website" class="form-control" name="website" id="lname" placeholder="Website"
                                value="{{$data->website}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Status</label>
                        <div class="col-sm-9" data-select2-id="11">
                            <select class="select2 form-select shadow-none select2-hidden-accessible" name="status"
                                style="">
                                <option data-select2-id="3" @if ($data->status == 'True') selected
                                    @endif>True</option>
                                <option data-select2-id="3" @if ($data->status == 'False') selected
                                    @endif>False</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  p-20" id="smtp" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">SMTP
                            Server</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="smtpserver" id="lname"
                                placeholder="SMTP Server" value="{{$data->smtpserver}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">SMTP Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="smtpemail" id="lname"
                                placeholder="SMTP Email" value="{{$data->smtpemail}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">SMTP
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="smtppassword" id="lname"
                                placeholder="SMTP Password" value="{{$data->smtppassword}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">SMTP Port</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="smtpport" id="lname" placeholder="SMTP Port"
                                value="{{$data->smtpport}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-20" id="social_medias" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="facebook" id="lname" placeholder="Facebook"
                                value="{{$data->facebook}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="instagram" id="lname" placeholder="Instagram"
                                value="{{$data->instagram}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Twitter</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="twitter" id="lname" placeholder="Twitter"
                                value="{{$data->twitter}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="youtube" id="lname" placeholder="Youtube"
                                value="{{$data->youtube}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-20" id="aboutus" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea name="aboutus" id="aboutus_summernote"
                                class="form-control">{{$data->aboutus}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-20" id="contact" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea name="contact" id="contact_summernote"
                                class="form-control">{{$data->contact}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-20" id="references" role="tabpanel">
                <div class="p-20">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea name="references" id="references_summernote"
                                class="form-control">{{$data->references}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center; float:right; margin-right:17px;" class="form-group">
                <button type="submit" class=" btn btn-primary" style="text-align:center;">Update</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
$('#aboutus_summernote').summernote({
    placeholder: 'About Us',
    tabsize: 2,
    height: 100
});
$('#contact_summernote').summernote({
    placeholder: 'Contact',
    tabsize: 2,
    height: 100
})
$('#references_summernote').summernote({
    placeholder: 'References',
    tabsize: 2,
    height: 100
})
</script>
@endsection

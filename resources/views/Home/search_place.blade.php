@extends('layouts.main')

@section('title', 'Search a Place')

@section('description')
  Discover The Beauty of Chad
@endsection

@section('keywords', 'tourism, contact us, Chad, Zakouma, Ounianga')

@section('top')
  @include('Home._top')
@endsection

@section('content')
<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
<form action="#">
					<div class="row animate-box">
<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
</div>
</div>
</div>
</div>
@endsection
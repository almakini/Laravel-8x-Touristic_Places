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
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						    <h3>Search a Tourist Attraction</h3>
						    <p></p>
					    </div>
					    <div class="col-lg-4 col-md-4 col-sm-4">
						    <div class="form-group animate-box">
                                <div class="text-center">
						            <h3>Country</h3>
					            </div>
							    <input type="text" class="form-control text-center" placeholder="Country">
    						</div>
	    				</div>
		    			<div class="col-lg-4 col-md-4 col-sm-4">
			    			<div class="form-group animate-box">
                                <div class="text-center">
						            <h3>City</h3>
					            </div>
		    	    			<input type="text" class="form-control text-center" placeholder="City">
					    	</div>
    					</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
			    			<div class="form-group animate-box">
                                <div class="text-center">
						            <h3>Category</h3>
					            </div>
		    	    			<input type="text" class="form-control text-center" placeholder="Category">
					    	</div>
    					</div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
	    					<div class="form-group animate-box">
		    					<input type="submit" value="Send Message" class="btn btn-primary">
			    			</div>
				    	</div>
    				</div>
	    		</div>
            </div>
      </form>
    </div>
</div>
@endsection
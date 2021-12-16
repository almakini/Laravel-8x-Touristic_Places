@extends('layouts.main')

@section('title', 'Welcome!')

@section('description')
  Discover The Beauty of Chad
@endsection

@section('keywords', 'tourism, Chad, Zakouma, Ounianga')

@section('top')
  @include('Home._top')
@endsection

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray ">
  <div class="container" style="width:95%">
    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
			<h3>Zakouma</h3>
			<p></p>
	  </div>
	  <div class="row row-bottom-padded-md">
      <div class="">
      	<div class="fh5co-blog animate-box">
          <a href="#"><img class="img-responsive" src="{{asset('assets')}}/images/tiger.jpg" alt=""></a>
    			<div class="blog-text">
					  <div class="prod-title">
        			<h3><a href="#">Zakouma National Park</a></h3>
	    				<span class="posted_by">Chad, Salamat</span>
							<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <h3>Comments</h3>
            </div>
             <div class="row">
             
				<div class="col-md-11">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-11">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				  <div class="col-md-11">
					  <div class="box-testimony animate-box">
						  <blockquote>
							  <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						  </blockquote>
						  <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					  </div>
				    </div>
              <div class="col-md-10">
                <h3>Leave a comment ...</h3>
								<div class="form-group">
									<textarea name="" class="form-control" id="" cols="20" rows="1" placeholder="Your Comment"></textarea>
								</div>
							</div>
              <div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Comment" class="btn btn-primary">
									</div>
								</div>
			      </div>
    	    </div> 
      	</div>
     </div>
    </div>
  </div>
</div>
@endsection
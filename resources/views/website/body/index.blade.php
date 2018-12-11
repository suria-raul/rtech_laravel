@extends('website.templates.master')
@section('body')
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url({{asset('images/img_bg_1.jpg')}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$800</span>
		   						<h2>Alato Cabinet</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{asset('images/img_bg_2.jpg')}});">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$530</span>
		   						<h2>The Haluz Rocking Chair</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="#" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$750</span>
		   						<h2>Alato Cabinet</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="#" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{asset('images/img_bg_4.jpg')}});">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<span class="price">$540</span>
		   						<h2>The WW Chair</h2>
		   						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
			   					<p><a href="#" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Products.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-1.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Hauteville Concrete Rocking Chair</a></h3>
							<span class="price">$350</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-2.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Pavilion Speaker</a></h3>
							<span class="price">$600</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-3.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Ligomancer</a></h3>
							<span class="price">$780</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-4.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Alato Cabinet</a></h3>
							<span class="price">$800</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-5.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Earing Wireless</a></h3>
							<span class="price">$100</span>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url({{asset('images/product-6.jpg')}});">
							<div class="inner">
								<p>
									<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="#" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">Sculptural Coffee Table</a></h3>
							<span class="price">$960</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
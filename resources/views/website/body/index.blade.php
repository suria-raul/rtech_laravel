@extends('website.templates.master')
@section('body')
	<aside id="rtech-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
			@foreach($product as $prod)
			   	<li style="background-image: url('storage/images/{{$prod->image}}');">
			   		<div class="container">
			   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span class="price">{{$prod->price}}</span>
			   						<h2>{{$prod->name}}</h2>
			   						<p>{{$prod->description}}</p>
				   					<p><a href="{{url('/prod-view/'.$prod->id)}}" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
		   	@endforeach 		
		  	</ul>
	  	</div>
	</aside>

	<div id="rtech-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center rtech-heading">
					<h2>Products.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				@foreach($product as $prod)
				<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url('storage/images/{{$prod->image}}');">
							<div class="inner">
								<p>
									<a href="{{url('/prod-view/'.$prod->id)}}" class="icon">
										<i class="icon-shopping-cart"></i>
									</a>
									<a href="{{url('/prod-view/'.$prod->id)}}" class="icon">
										<i class="icon-eye"></i>
									</a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="#">{{$prod->name}}</a></h3>
							<span class="price">{{$prod->price}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

@endsection
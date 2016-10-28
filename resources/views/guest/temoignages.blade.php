@extends('guest-template')

@section('title','Accueil')

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->

<!-- =========================== TESTIMONIALS BEGIN =========================== -->
<section>
<div class="container">
	<div class="row">
			<div id="content" role="main">
				<div class="the-headline text-center">
					<h2 class="text-uppercase" style="font-weight: 800; "><span class="accentcolor"></span>Témoignages</h2>
					<div class="decoration">
						<div class="decoration-inside">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="testimonialstyle">
						<blockquote>
							Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
						</blockquote>
						<p>
							<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar4.png" alt="" class="avatar img-responsive">
						</p>
						<p>
							<cite>Georges H. Gates, New Orleans, LA 70113</cite>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6">
					<div class="testimonialstyle">
						<blockquote>
							Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
						</blockquote>
						<p>
							<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar4.png" alt="" class="avatar img-responsive">
						</p>
						<p>
							<cite>Stephanie E. Murry, CEO Director</cite>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	</div>
</div>
</section>
<!-- =========================== TESTIMONIALS END =========================== -->


@endsection
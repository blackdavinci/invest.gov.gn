@extends('guest-template')

@section('title','Accueil')

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->


<!-- =========================== BLOG BEGIN =========================== -->
<div class="container">
	<div class="row">

		<!-- main begin -->
		<div class="col-md-9">
			<div id="content" role="main">

				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
					<span class="month">Jul</span><span class="date">5</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Spanish Style">
				 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="#"> Interior Design </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Interiors</a>
					</p>
				</div>
				</article>

				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
						<span class="month">Jul</span><span class="date">4</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Winter Cabin"/>
					 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="#"> Renovation </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Houses</a>
					</p>
				</div>
				</article>


				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
						<span class="month">Jul</span><span class="date">3</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Light House">
					 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="#"> Wooden Construction </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Business</a>
					</p>
				</div>
				</article>


				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
						<span class="month">Jul</span><span class="date">2</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153414/3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Gray Tiles">
					 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="#"> Lake Houses </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Places</a>
					</p>
				</div>
				</article>


				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
						<span class="month">Jul</span><span class="date">1</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153520/8.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Red House">
					 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="#"> Building Houses is Fun </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Technology</a>
					</p>
				</div>
				</article>

				<article class="hentry excerpt col-md-4 col-sm-6">
				<div class="blog-img-box">
					<div class="blog-date">
						<span class="month">Jun</span><span class="date">30</span>
					</div>
					<a class="hover-effect" href="blog-single.html">
					<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153428/7.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lovely Home">
					 </a>
				</div>
				<div class="blog-content">
					<h3 class="entry-title"><a href="blog-single.html"> Tree House </a></h3>
					<p>
						<span class="vcard author"><span class="fn">By WowThemes</span></span>
						in <a href="#" rel="category tag">Nature</a>
					</p>
				</div>
				</article>
			</div>
			<div class="text-center">
			</div>
		</div>
		<!-- main end -->

		<!-- sidebar begin -->
		<div class="col-md-3" id="sidebar" role="navigation">

			<aside class="sidebar blogsidebar">

		<!-- 	<section class="widget_search">
			<form role="search" method="get" id="searchform" class="searchform" action="#">
				<div>
					<input type="search" class="search-field" placeholder="Type keyword and enter&hellip;" value="" name="s" id="s"/>
				</div>
			</form>
			</section> -->

			<section class="widget_recent_entries">
			<h4 class="widgettitle">Récents Evènements</h4>
			<ul>
				<li>
				<a href="#">Interior Design</a>
				</li>
				<li>
				<a href="#">Renovation</a>
				</li>
				<li>
				<a href="#">Wooden Construction</a>
				</li>
				<li>
				<a href="#">Lake Houses</a>
				</li>
				<li>
				<a href="#">Building Houses is Fun</a>
				</li>
			</ul>
			</section>

			<!-- <section class="widget_categories">
			<h4 class="widgettitle">Catégories</h4>
			<ul>
				<li class="cat-item"><a href="#">Business</a>
				</li>
				<li class="cat-item"><a href="#">how to</a>
				</li>
				<li class="cat-item"><a href="#">html</a>
				</li>
				<li class="cat-item"><a href="#">Interiors</a>
				</li>
				<li class="cat-item"><a href="#">markup</a>
				</li>
				<li class="cat-item"><a href="#">Places</a>
				</li>
			</ul>
			</section> -->

		</aside>
		</div>
		<!--sidebar end -->


	</div>
</div>
<!-- =========================== BLOG END =========================== -->



@endsection
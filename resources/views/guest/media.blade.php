@extends('guest-template')

@section('title','Accueil')

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->

<!-- =========================== GALLERY BEGIN =========================== -->
<section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="content" role="main">
				<div class="row gallery">
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153520/8.jpg" data-caption="Red House">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153520/8.jpg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Red House</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153446/4.jpeg" data-caption="Wooden House">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153446/4.jpeg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Wooden House</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153428/7.jpg" data-caption="Lovely Home">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153428/7.jpg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Lovely Home</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6.jpeg" data-caption="Winter Cabin">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6.jpeg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Winter Cabin</h2>
					</div>
				</div>
				<div class="row gallery">
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1.jpg" data-caption="Spanish Style">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1.jpg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Spanish Style</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153409/2.jpeg" data-caption="Garden House">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153409/2.jpeg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Garden House</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153414/3.jpg" data-caption="Gray Tiles">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153414/3.jpg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Gray Tiles</h2>
					</div>
					<div class="col-md-3 wpgallerybox">
						<a data-gallery="gallery" href="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" data-caption="Light House">
						<div class="wowgallerybox">
							<div class="img-box has-overlay">
								<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" class="img-responsive" alt="">
								<div class="overlay">
									<div class="box">
										<div class="content-box">
											<i class="fa fa-camera"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<h2>Light House</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- =========================== GALLERY END =========================== -->


@endsection
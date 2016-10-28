<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<!-- Template CSS -->
{!! Html::style('css/front.css') !!}
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/animate.min.css') !!}
{!! Html::style('css/flexslider.css') !!}
{!! Html::style('css/style.css') !!}
{!! Html::style('css/custom.css') !!}
{!! Html::style('css/breakpoint.css') !!}

<!-- TABS CSS -->
{!! Html::style('css/tab/normalize.css') !!}
{!! Html::style('css/tab/tabs.css') !!}
{!! Html::style('css/tab/tabstyles.css') !!}

<!-- TABS SCRIPT -->
{!! Html::script("js/tab/modernizr.custom.js") !!}

{!! Html::style('css/font-awesome.min.css') !!}

<!-- MAPS CSS -->
{!! Html::style('css/map.css') !!}

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300italic,400italic,700italic,300,400,700,800,900%7CShadows+Into+Light&ver=4.5.3' type='text/css' media='all'/>

@yield('head')
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/gn/gn-all.js"></script>

<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  #mapss {
    height: 100%;
  }
</style>


</head>
<body>
<!-- <div class="page-loader">
	<img src="img/loader.gif" alt="loader">
</div> -->

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please upgrade your browser</a> to improve your experience.
</div>
<![endif]-->


<!-- Header
================================================== -->

@include('partials.guest-header')


<div class="">
	@yield('content')
</div>

<!-- =========================== FOOTER BEGIN  =========================== -->

@include('partials.testimonials')

<!-- =========================== FOOTER BEGIN  =========================== -->

@include('partials.footer')

<!-- =========================== SCRIPTS BEGIN  =========================== -->
{!! Html::script("js/jquery.js") !!}
{!! Html::script("js/jquery.touchSwipe.min.js") !!}
{!! Html::script("js/carousel.min.js") !!}
{!! Html::script("js/modernizr-2.8.3.min.js") !!}
{!! Html::script("js/bootstrap.min.js") !!}
{!! Html::script("js/mason.js") !!}
{!! Html::script("js/popup.js") !!}
{!! Html::script("js/common.js") !!}
{!! Html::script("js/flexslider.js") !!}
{!! Html::script("js/portfolio.js") !!}
{!! Html::script("js/countto.js") !!}
{!! Html::script("js/testimonial.js") !!}
<!-- {!! Html::script("js/custom.js") !!} -->
{!! Html::script("js/gmaps.js") !!}

<!-- Tabs Script -->
{!! Html::script("js/tab/cbpFWTabs.js") !!}

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(document).scroll(function () {
		    var y = $(this).scrollTop();
		    if (y > 93) {
		        $('#small-logo').fadeIn(300);
		    } else {
		        $('#small-logo').fadeOut();
		    }
		});

	});
	$('#monitor').html($(window).width());

	$(window).resize(function() {
	    var viewportWidth = $(window).width();
	    $('#monitor').html(viewportWidth);
	});
</script>
<!-- Tabs Script For Showing -->
<script>
	(function() {

		[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
		});

	})();
</script>



</body>
</html>

<!-- Localized -->
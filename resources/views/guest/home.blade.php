@extends('guest-template')

@section('title','Accueil')

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->
    <div id="mapss"></div>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('mapss'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-1shSszEQDxqaXMOPIA1ZnUkAyMNk9K8&callback=initMap"
        async defer></script>

<!-- =========================== 7 REASONS & USELESS DOCS BEGIN =========================== -->
<section>
<div class="container">

	<div>
		<div class="the-headline text-center">
			<h2 class="text-uppercase"><span class="accentcolor">7 Bonnes raisons</span> d'Investir en Guinée</h2>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="tabs tabs-style-linetriangle">
				<nav>
					<ul>
						<li><a href="#section-linetriangle-1"><span>1.</span></a></li>
						<li><a href="#section-linetriangle-2"><span>2.</span></a></li>
						<li><a href="#section-linetriangle-3"><span>3.</span></a></li>
						<li><a href="#section-linetriangle-4"><span>4.</span></a></li>
						<li><a href="#section-linetriangle-5"><span>5.</span></a></li>
						<li><a href="#section-linetriangle-6"><span>6.</span></a></li>
						<li><a href="#section-linetriangle-7"><span>7.</span></a></li>
					</ul>
				</nav>
				<div class="content-wrap">
					<section id="section-linetriangle-1">
					<h1>{{$secteur->secteur_nom}}</h1>	
					<?= $secteur->secteur_presentation ?>
					</section>
					<section id="section-linetriangle-2">
					<h1>La Guinée, une Puissance agricole et energétique en devenir</h1>	
					Dotée d’un potentiel hydroélectrique de plus 6 000 MW faiblement valorisé, bénéficiant de conditions naturelles pour une production agricole diversifiée et à grande échelle, la Guinée est une puissance Energétique et Agricole en devenir.</section>
					<section id="section-linetriangle-3">
					<h1>Coût faible des facteurs d'investissement dont la main d'oeuvre</h1>	
					Le coût des facteurs est comparativement très favorable en Guinée : main d’œuvre abondante à bon prix, coût de l’énergie et de l’eau très compétitif, disponibilité des matériaux et intrants « naturels » à faible coût, facilité d’exploitation des ressources (ex : mines à ciel ouverts, conditions naturelles pour l’agriculture et les infrastructures), etc.</section>
					<section id="section-linetriangle-4">
					<h1>Environnement des affaires attractif et cadre juridique propice</h1>	
					En plus des nombreuses opportunités d’investissements disponibles, la Guinée a engagé plusieurs réformes qui en font l’un des pays africains les plus attractifs, en termes d’avantages, de garanties, de sécurité aux investisseurs. Le nouveau code minier, le nouveau code des investissements et le nouveau code du travail. consacrent un cadre juridique et réglementaire plus compétitif pour votre investissement.</section>
					<section id="section-linetriangle-5">
					<h1>Investissements importants de l’Etat dans les infrastructures de base</h1>	
					Plus de 4500 km de Fibre Optique couvrant tout le pays ; Barrage Hydroélectrique de KALETA (240MW en 2015), Modernisation et extension du Port de Conakry, des Hôtels et Résidences de standing international, d'importants investissements dans la formation et le renforcement des acteurs économiques locaux, etc. Autant de réalisations de l’Etat et de ses partenaires dans la consolidation d’un environnement humain et technique plus propice pour des investissements durables et profitables.</section>
					<section id="section-linetriangle-6">
					<h1>Stabilité politique et macroéconomique soutenue</h1>	
					Initiée à la démocratie depuis 1990, la Guinée a connu en 2010 sa première transition démocratique du pouvoir politique. Dans un environnement régional marqué par des décennies d’instabilités politiques majeures, la Guinée est restée l’un des rares pays à ne pas connaitre de conflits. Elle œuvre depuis plusieurs années à son encrage démocratique et à la consolidation de l’Etat de droit avec notamment plusieurs réformes adoptées, des institutions républicaines renforcées et installées. Depuis 2010, la Guinée jouit d’une stabilité macroéconomique remarquable : monnaie stable, inflation maitrisée, déficit budgétaire maitrisé, pression fiscale à 18%, etc.</section>
					<section id="section-linetriangle-7">
					<h1>La Guinée, "Une nouvelle frontière" qui offre des perspectives concrètes aux investisseurs du monde</h1>	
					La Guinée est un pays doté de potentiels miniers, agricoles, énergétiques, et halieutiques particulièrement denses et variés. Ces ressources naturelles prédisposent le pays à un développement socioéconomique certain, traduit dans une vision pour l’émergence à l’horizon 2035. Les opportunités d’investissement sont ainsi réelles et nombreuses, dans tous les domaines.</section>
				</div><!-- /content -->
				<p></p><br>
			</div><!-- /tabs -->
		</div>
		<div class="col-md-3">
			<section class="widget_recent_entries">
			<h4 class="widgettitle text-uppercase">Documents utiles</h4>
			<ul>
				<li>
				<a href="#">Code des investissements</a>
				</li>
				<li>
				<a href="#">Code des Imp&ocirc;ts</a>
				</li>
				<li>
				<a href="#">Code des march&eacute;s publics</a>
				</li>
				<li>
				<a href="#">Code de l'environnement</a>
				</li>
				<li>
				<a href="#">Loi des Finances 2016</a>
				</li>
			</ul>
			</section>
		</div>
</div>
</section>
<!-- =========================== 7 REASONS & USELESS DOCS END =========================== -->

<!-- =========================== COUNTER BEGIN =========================== -->
<section class="darkarea margin-bottom50 padding110" style="background-size:cover;background-color:black; background-position: center center; background-repeat: no-repeat;">
	<div class="container">

		<div class="row">

		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-fontawesome"><i class="fa fa-building-o"></i></span>
				</div>
				<h2 class="counter" style="">4999</h2>
				<h4>Nouvelles Entreprises</h4>
			</div>
		</div>

		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-fontawesome"><i class="fa fa-cube"></i></span>
				</div>
				<h2 class="counter" style="">800</h2>
				<h4>Projects</h4>
			</div>
		</div>

		<div class="col-md-4">
			<div class="funfacts text-center">
				<div class="icon">
					<span class="sow-icon-fontawesome"><i class="fa fa-globe"></i></span>
				</div>
				<h2 class="counter" style="">685</h2>
				<h4>Documents</h4>
			</div>
		</div>

		</div>

	</div>
</section>
<!-- =========================== COUNTER END =========================== -->

<!-- =========================== RECENT NEWS BEGIN  =========================== -->
<section class="margin-bottom50">
	<div class="container">
		<div class="the-headline text-center">
			<h1><span class="accentcolor">Actualités &</span> Evènements</h1>
			<div class="decoration">
				<div class="decoration-inside">
				</div>
			</div>
			<!-- <h3>READ OUR LATEST ARTICLES, TUTORIALS AND MORE</h3> -->
		</div>

		<div class="wow fadeInUp panel-widget-style">
			<div class="so-widget-sow-post-carousel so-widget-sow-post-carousel-base">
				<div class="row tline-holder">
					<!-- tline ITEM-->
					<div class="col-md-3">
						<article class="hentry">
						<div class="blog-img-box">
							<!-- <div class="blog-date">
								<span class="month">Jul</span><span class="date">5</span>
							</div> -->
							<a class="hover-effect" href="#">
							<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153404/1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Spanish Style"></a>
						</div>
						<div class="blog-content">
							<h3 class="entry-title"><a href="#"> Interior Design </a></h3>
							<p>
								<span class="vcard author"><span class="fn">By WowThemes</span></span> in <a href="#" rel="category tag">Interiors</a>
							</p>
						</div>
						</article>
					</div>
					<!-- /tline-->
					<!-- tline ITEM-->
					<div class="col-md-3">
						<article class="hentry">
						<div class="blog-img-box">
							<!-- <div class="blog-date">
								<span class="month">Jul</span><span class="date">4</span>
							</div> -->
							<a class="hover-effect" href="#">
							<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153424/6.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Winter Cabin"></a>
						</div>
						<div class="blog-content">
							<h3 class="entry-title"><a href="#"> Renovation </a></h3>
							<p>
								<span class="vcard author"><span class="fn">By WowThemes</span></span> in <a href="#" rel="category tag">how to</a>
							</p>
						</div>
						</article>
					</div>
					<!-- /tline-->
					<!-- tline ITEM-->
					<div class="col-md-3">
						<article class="hentry">
						<div class="blog-img-box">
							<div class="blog-date">
								<span class="month">Jul</span><span class="date">3</span>
							</div>
							<a class="hover-effect" href="#">
							<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Light House"/></a>
						</div>
						<div class="blog-content">
							<h3 class="entry-title"><a href="#"> Wooden Construction </a></h3>
							<p>
								<span class="vcard author"><span class="fn">By WowThemes</span></span> in <a href="#" rel="category tag">Business</a>
							</p>
						</div>
						</article>
					</div>
					<!-- /tline-->
					<!-- tline ITEM-->
					<div class="col-md-3">
						<article class="hentry">
						<div class="blog-img-box">
							<div class="blog-date">
								<span class="month">Jul</span><span class="date">3</span>
							</div>
							<a class="hover-effect" href="#">
							<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/16/2015/09/05153417/5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Light House"/></a>
						</div>
						<div class="blog-content">
							<h3 class="entry-title"><a href="#"> Wooden Construction </a></h3>
							<p>
								<span class="vcard author"><span class="fn">By WowThemes</span></span> in <a href="#" rel="category tag">Business</a>
							</p>
						</div>
						</article>
					</div>

					<div class="tline-start-content">
						<div class="tline-start-icon">
						</div>
						<a style="position:relative;" href="blog.html" class="btn btn-primary">More</a>
					</div>

				</div>
			</div>
		</div>

	</div>
</section>

@endsection
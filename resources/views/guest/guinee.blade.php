@extends('guest-template')

@section('title','Accueil')

@section('head')

@endsection

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->


<!-- =========================== 7 REASONS & USELESS DOCS BEGIN =========================== -->
<section>
	<div class="container">
		<div>
			<div class="the-headline text-center">
				<h2 class="text-uppercase" style="font-weight: 800; "><span class="accentcolor"></span> La Guinée en Bref</h2>
				<div class="decoration">
					<div class="decoration-inside">
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<ul>
						<li><a href="">La Guinée</a></li> /
						<li><a href="">La Guinée en bref</a></li>
					</ul>
				</div>
			</div> -->
			<div class="col-md-9">
				<div class="tabs tabs-style-linetriangle">
					<nav>
						<ul>
							<li><a href="#section-linetriangle-1"><span><b>La Guinée en bref</b></span></a></li>
							<li><a href="#section-linetriangle-2"><span>La Guinée des régions</span></a></li>
							<li><a href="#section-linetriangle-3"><span>Perspectives économiques</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-linetriangle-1">
							<div class="the-headline text-center">
								<h1 class="text-uppercase text-left"><span class="accentcolor">La plus grande réserve de Bauxite et le minerai de Fer le plus riche au monde</span></h1>
								
								<p class="text-left">
								Les réserves de ressources minérales de la Guinée sont classées parmi les plus importantes au monde, en quantité, en qualité, et en variété de substances : Bauxite (2/3 des réserves mondiales, 2ème exportateur mondial), Fer (gisements de classe mondiale), Or, Diamant, Argent, Manganèse, Granite, etc. Depuis 2010 plus de 42 milliards USD de contrats signés, avec d’énormes opportunités de sous-traitance et de prestation de services.
								</p>
						</section>
						<section id="section-linetriangle-2">
							<div id="container-guinea"></div>
						</section>
						<section id="section-linetriangle-3">
							<div class="the-headline text-center">
								<h1 class="text-uppercase text-left"><span class="accentcolor">Coût faible des facteurs d'investissement dont la main d'oeuvre</span></h1>
								
								<p class="text-left">
								Le coût des facteurs est comparativement très favorable en Guinée : main d’œuvre abondante à bon prix, coût de l’énergie et de l’eau très compétitif, disponibilité des matériaux et intrants « naturels » à faible coût, facilité d’exploitation des ressources (ex : mines à ciel ouverts, conditions naturelles pour l’agriculture et les infrastructures), etc.
								</p>
						</section>
						
					</div><!-- /content -->
					<p></p><br>
				</div><!-- /tabs -->
			</div>
			<div class="col-md-3">
				<section class="widget_recent_entries recent-doc">
				<h4 class="widgettitle text-uppercase">Documents utiles</h4>
				<ul>
					<li>
					<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Interior Design</a>
					</li>
					<li>
					<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Renovation</a>
					</li>
					<li>
					<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Wooden Construction</a>
					</li>
					<li>
					<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Lake Houses</a>
					</li>
					<li>
					<a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Building Houses is Fun</a>
					</li>
				</ul>
				</section>
		</div>
	</div>
</section>

@endsection

@section('script')

	    


@endsection
@extends('guest-template')

@section('title','Accueil')

@section('content')


<!-- =========================== SLIDER BEGIN =========================== -->

@include('partials.slider')

<!-- =========================== SLIDER END =========================== -->

<!-- =========================== Contact BEGIN =========================== -->
<section>
	<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="the-headline">
								<h1 style="font-size:20px;">DETAILS</h1>
					</div>
					<p>Agence de Promotion des Investissements Privés (APIP-Guinée)</p>
					<div class="textwidget"><p><i class="fa fa-map-marker"></i> 252, rue KA 022 - BP : 2024, Boulbinet, Conakry, République de Guinée</p>
					<p><i class="fa fa-phone"></i> (00224) 666 666 666</p>
					<p><i class="fa fa-envelope"></i> spi@apip.gov.gnm</p>
					<p><i class="fa fa-fax"></i> (00224) 4762 8264</p>
					<p><i class="fa fa-clock-o"></i> Lun - Ven: 8:30 - 16:30</p>
					</div>
				</div>
				<div class="col-md-8">
					<div class="the-headline">
								<h1 style="font-size:20px;">CONTACT</h1>
					</div>
					<div class="textwidget">
						<div class="done">
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								Your message has been sent. Thank you!
							</div>
						</div>
						<form class="wpcf7-form" method="post" action="main-contact.php" id="pagecontactform">
							<div class="row">
									<div class="col-md-6">
										<input type="text" name="mainname" placeholder="Nom">
									</div>
									<div class="col-md-6">
										<input type="text" name="mainemail" placeholder="E-mail">
								  </div>
							</div>
							<br/>
							<textarea name="maincomment" rows="4" placeholder="Message"></textarea>
							<br/>
							<input type="submit" id="submitmaincontact" class="btn" value="ENVOYER">
						</form>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- =========================== Contact End =========================== -->



@endsection
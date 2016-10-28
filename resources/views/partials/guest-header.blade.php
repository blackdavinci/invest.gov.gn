<header id="header">
	<div class="container">
		<div class="logoare">
			<div class="col-md-4">
				<a class="navbar-brand" href="index.html" id="logo-img">
				<img src="img/logo.png" alt="logo-portail" width="250" >
				</a>
			</div>
			<div class="col-md-8 text-right hidden-x" id="logoarea-right">
				<div class="headMiddInfo">
					<div class="col-md-12" id="line-language">
						<div class="hidden-x singMiddInfo ">
							<p>
								<a href="{{url()->current().'/fr'}}" class="@if($langue=='fr') activelangue @endif">Français </a>
							</p>
						</div>
						<div class="hidden-x singMiddInfo ">
							<p>
								<a href="" class="@if($langue=='en') activelangue @endif"> English</a>
							</p>
						</div>
					</div>
					<div class="col-md-12 hidden-xs" id="apip-txt">
						<p class="text-uppercase" >Agence de  Promotion des Investissements Privés
						</p>
					</div>
					<div class="col-md-12" id="line-other">
						<div class="singMiddInfo">
							<p>
								<a href="">F.A.Q</a>
							</p>
						</div>
						<div class="singMiddInfo ">
							<p>
								<a href="">Nous contacter</a>
							</p>
						</div>
						<div class="singMiddInfo ">
							<p>
								<a href="">Téléchargement</a>
							</p>
						</div>
						<div class="singMiddInfo ">
							<p>
								<a href="">Newsletter</a>
							</p>
						</div>
						<div class=" singMiddInfo ">
							<p>
								<a href="">A propos</a>
							</p>
						</div>
						<div class="hidden-sm hidden-md hidden-xs singMiddInfo time">
							<div class="search-3 widget_search">
								<div class="widget sep-top-lg">
									<form role="search" method="get" class="searchform" action="#">
										<div>
											<input type="search" class="search-field" placeholder="Recherche" value="" name="q">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin fadeIn">
		<nav class="navbar navbar-default redq">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<a class="mobile-menu-close"><i class="fa fa-close"></i></a>
				<div class="menu-top-menu-container">
					<ul id="menu-top-menu" class="nav navbar-nav nav-list">
						<li class="highlight pull-left hiddend-xs hidden-sm" id="small-logo"><a href="contact.html"><img src="img/black-bold-logo.png" alt="" width="180" id="logo-header"></a>
						</li>

						@foreach($menus as $menu)
							@if($menu->menu_niveau==1)
								@if($menu->menu_dad==0)
									<li class="li-on @if($active=='home')active @endif"><a href="accueil" class="text-center">{{$menu->menu_nom}}</a></li>
								@else
									<li class="dropdown li-on @if($active=='guinee')active @endif"><a title="Pages" href="guinee" data-hover="dropdown" class="dropdown-toggle text-center" >{{$menu->menu_nom}} <span class="caret"></span></a>
									<ul role="menu" class=" sub-menu">
									@foreach($menus as $submenu)
										@if($submenu->menu_niveau==2)
											@if($submenu->menu_parent==$menu->id)
												@if($submenu->menu_dad==0)
												<li>
												<a href="guinee">{{$submenu->menu_nom}}</a>
												</li>
												@else
												<li class="dropdown li-on @if($active=='guinee')active @endif"><a title="Pages" href="guinee" data-hover="dropdown" class="dropdown-toggle text-center" >{{$submenu->menu_nom}} <span class="caret"></span></a>
												<ul role="menu" class=" sub-menu">
												</ul>
												</li>
												@endif
											@endif
										@endif
									@endforeach
									</ul>
									</li>
								@endif
							@endif
						@endforeach

						

							<!-- ######################### OLD MENU  ######################### -->
					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
		</nav>
	</div>
</header>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GAD HUAMBOYA</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

		<!-- GOOGLE FONTS : begin -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<!-- GOOGLE FONTS : end -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="{{ asset('library/css/style.css') }}">
		<!-- To change to a different pre-defined color scheme, change "red.css" in the following element to blue.css | bluegray.css | green.css | orange.css
		Please refer to the documentation to learn how to create your own color schemes -->
        <link rel="stylesheet" type="text/css" href="{{ asset('library/css/skin/green.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('library/css/custom.css') }}">
		<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="library/css/oldie.css">
		<![endif]-->
		<!-- STYLESHEETS : end -->

		<script src="{{ asset('library/js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

		  <!-- sweetalert -->
		<link rel="stylesheet" href="{{asset('library/bootstrap-sweetalert/dist/sweetalert.css')}}">
		<script src="{{asset('library/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>

		
	</head>
	<body>

		<!-- HEADER : begin -->
		<!-- If you want to use Standard Header Menu, add "m-has-standard-menu" class to the following element (see home-2.html template for example)
		Remove "m-has-gmap" class if you are not using Google Map in this template -->
		<header id="header" class="m-has-header-tools m-has-gmap">
			<div class="header-inner">

				<!-- HEADER CONTENT : begin -->
				<div class="header-content">
					<div class="c-container">
						<div class="header-content-inner">

							<!-- HEADER BRANDING : begin -->
							<!-- Logo dimensions can be changed in library/css/custom.css
							You can remove "m-large-logo" class from following element to use standard (smaller) version of logo -->
							<div class="header-branding m-large-logo">
								<a href="index.html"><span>
									<img src="{{ asset('images/huamboya.jpg') }}"
										data-hires="{{ asset('images/huamboya.jpg') }}"
										alt="Huamboya">
								</span></a>
							</div>
							<!-- HEADER BRANDING : end -->

							<!-- HEADER TOGGLE HOLDER : begin -->
							<div class="header-toggle-holder">

								<!-- HEADER TOGGLE : begin -->
								<button type="button" class="header-toggle">
									<i class="ico-open tp tp-menu"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Menu</span>
								</button>
								<!-- HEADER TOGGLE : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
								</button>
								<!-- HEADER GMAP SWITCHER : end -->

							</div>
							<!-- HEADER TOGGLE HOLDER : end -->

							<!-- HEADER MENU : begin -->
							<!-- This menu is used as both mobile menu (displayed on devices with screen width < 991px)
							and standard header menu (only if Header element has "m-has-standard-menu" class) -->
							<nav class="header-menu">
								@include('layouts.menu')
								
							</nav>
							<!-- HEADER MENU : end -->

							<!-- HEADER TOOLS : begin -->
							<div class="header-tools">
								  <!-- Right Side Of Navbar -->
								  
								<!-- HEADER SEARCH : begin -->
								<div class="header-search">
									<form method="get" action="search-results.html" class="c-search-form">
										<div class="form-fields">
											<input type="text" value="" placeholder="Buscar..." name="s">
											<button type="submit" class="submit-btn"><i class="tp tp-magnifier"></i></button>
										</div>
									</form>
								</div>
								<!-- HEADER SEARCH : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<!-- Remove following block if you are not using Google Map in this template -->
								<button type="button" class="header-gmap-switcher" title="Ver mapa">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Map</span>
								</button>
								
								<!-- HEADER GMAP SWITCHER : end -->

								@guest
										
									<a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
									
									@if (Route::has('register'))
										
									<a class="btn btn-info" href="{{ route('register') }}">{{ __('Register') }}</a>
										
									@endif
								@else
									
									<a id="navbarDropdown" class="btn btn-danger dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>
	
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
									
								@endguest

							</div>
							<!-- HEADER TOOLS : end -->

						</div>
					</div>
				</div>
				<!-- HEADER CONTENT : end -->

				<!-- HEADER GMAP : begin -->
				<!-- Add your address into "data-address" attribute
				Change zoom level with "data-zoom" attribute, bigger number = bigger zoom
				Change map type with "data-maptype" attribute, values: roadmap | terrain | hybrid | satellite
				API KEY IS REQUIRED! More info https://developers.google.com/maps/documentation/javascript/get-api-key -->
				<div class="header-gmap">
					<div class="gmap-canvas"
						data-google-api-key="AIzaSyD4bcJ39miYRDXIr4ux3484nqQP1XqS9Bw"
						data-address="Municipio de Huamboya"
						data-zoom="17"
						data-maptype="hybrid"
						data-enable-mousewheel="true">
					</div>
				</div>
				<!-- HEADER GMAP : end -->

			</div>
		</header>
		<!-- HEADER : end -->

		<!-- HEADER BG : begin -->
		<div class="header-bg">

			<!-- HEADER IMAGE : begin -->
			<!-- To add more images just copy and edit elements with "image-layer" class (see home-2.html template for example)
			Change autoplay speed with "data-autoplay" attribute (in seconds), works only if there are more than one image -->
			<div class="header-image" data-autoplay="8">
				<div class="image-layer" style="background-image: url( '{{ asset('images/header-01.jpg') }}' );"></div>
				<!-- div class="image-layer" style="background-image: url( 'images/header-02.jpg' );"></div -->
			</div>
			<!-- HEADER IMAGE : begin -->

		</div>
		<!-- HEADER BG : end -->

		<!-- CORE : begin -->
		<div id="core">
			<div class="c-container">
				<div class="row">

					<!-- MIDDLE COLUMN : begin -->
					<div class="middle-column col-md-6 col-md-push-3">

						@foreach (['success', 'danger', 'warning', 'message','info'] as $msg)
						@if(Session::has($msg))
						
						<div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						  <strong>{{Session::get($msg)}}</strong>
						</div>
			  
						@endif
					@endforeach
			  
				  @if ($errors->any())
					  
					  <div class="alert alert-danger alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						<strong>Error:</strong>
						<ul>
							  @foreach ($errors->all() as $error)
								  <li>{{ $error }}</li>
							  @endforeach
						  </ul>
					  </div> 
					
				  @endif
						@yield('breadcrumbs')

						<!-- PAGE CONTENT : begin -->
						<div id="page-content">
							<div class="page-content-inner">
								@yield('content')
							</div>
						</div>
						<!-- PAGE CONTENT : end -->

						<hr class="c-separator m-margin-top-small m-margin-bottom-small m-transparent hidden-lg hidden-md">

					</div>
					<!-- MIDDLE COLUMN : end -->

					<!-- LEFT COLUMN : begin -->
					<div class="left-column col-md-3 col-md-pull-6">

						<!-- SIDE MENU : begin -->
						<nav class="side-menu m-left-side m-show-submenu">
							@include('layouts.menu')
						</nav>
						<!-- SIDE MENU : end -->

						<!-- LEFT SIDEBAR : begin -->
						<aside class="sidebar">
							<div class="widget-list">

								<!-- DOCUMENTS WIDGET : begin -->
								<div class="widget documents-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-papers"></i>Documentos</h3>
										<div class="widget-content">
											<ul class="document-list m-has-icons">

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><i class="fa fa-file-pdf-o"></i></div>
														<h4 class="document-title">
															<a href="documents/dummy-document2.pdf" target="_blank">Council Agenda April 24, 2015</a>
															<span class="document-filesize">(27 kB)</span>
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><i class="fa fa-file-pdf-o"></i></div>
														<h4 class="document-title">
															<a href="documents/dummy-document.pdf" target="_blank">Town Report 2015</a>
															<span class="document-filesize">(24 kB)</span>
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="Word Document"><i class="fa fa-file-word-o"></i></div>
														<h4 class="document-title">
															<a href="documents/dummy-document2.pdf" target="_blank">Police Contract</a>
															<span class="document-filesize">(27 kB)</span>
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="Word Document"><i class="fa fa-file-word-o"></i></div>
														<h4 class="document-title">
															<a href="documents/dummy-document2.pdf" target="_blank">Public Schools Contract</a>
															<span class="document-filesize">(27 kB)</span>
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

											</ul>
											<p class="show-all-btn"><a href="document-list.html">Ver todos los documentos</a></p>
										</div>
									</div>
								</div>
								<!-- DOCUMENTS WIDGET : end -->

								<!-- LOCALE INFO WIDGET : begin -->
								<!-- to remove background image from this widget, simply remove "m-has-bg" class from the following element -->
								<div class="widget locale-info-widget m-has-bg">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-map-marker"></i>INFORMACIÓN REGIONAL</h3>
										<div class="widget-content">
											<ul>
												<li>
													<div class="row-title"><h4>País</h4></div>
													<div class="row-value">Ecuador</div>
												</li>
												<li>
													<div class="row-title"><h4>Provincia</h4></div>
													<div class="row-value">Morona-Santiago</div>
												</li>
												<li>
													<div class="row-title"><h4>Cantón</h4></div>
													<div class="row-value">Huamboya</div>
												</li>
												<li>
													<div class="row-title"><h4>Área</h4></div>
													<div class="row-value">72.7 sq mi (188.4 km<sup>2</sup>)</div>
												</li>
												<li>
													<div class="row-title"><h4>Población</h4></div>
													<div class="row-value">4,314</div>
												</li>
												<li>
													<div class="row-title"><h4>Coordenadas</h4></div>
													<div class="row-value">44°28′31″N<br>72°42′8″W</div>
												</li>
												<li>
													<div class="row-title"><h4>Zona horaria</h4></div>
													<div class="row-value">Quito (GMT-5)</div>
												</li>
												<li>
													<div class="row-title"><h4>Código postal</h4></div>
													<div class="row-value">140750</div>
												</li>
											</ul>
            							</div>
									</div>
								</div>
								<!-- LOCALE INFO WIDGET : end -->

								<!-- FEATURED GALLERY WIDGET : begin -->
								<div class="widget featured-gallery-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-pictures"></i>GALERÍA DESTACADA</h3>
										<div class="widget-content">
											<div class="gallery-image" title="Streets of TownPress">
												<a href="gallery-detail.html"><img src="{{ asset('images/featured-gallery-01.jpg') }}" alt=""></a>
											</div>
											<p class="show-all-btn"><a href="gallery-list.html">Ver todas las galerías</a></p>
            							</div>
									</div>
								</div>
								<!-- FEATURED GALLERY WIDGET : end -->

							</div>
						</aside>
						<!-- LEFT SIDEBAR : end -->

					</div>
					<!-- LEFT COLUMN : end -->

					<!-- RIGHT COLUMN : begin -->
					<div class="right-column col-md-3">

						<!-- RIGHT SIDEBAR : begin -->
						<aside class="sidebar">
							<div class="widget-list">

								<!-- NOTICES WIDGET : begin -->
								<div class="widget notices-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-bullhorn"></i>AVISOS DE LA CIUDAD</h3>
										<div class="widget-content">
											<ul class="notice-list">

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Annual Marathon Registration</a></h4>
														<span class="notice-date">May 14, 2015</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Traffic Safety Notice</a></h4>
														<span class="notice-date">July 19, 2015</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Municipal Waste</a></h4>
														<span class="notice-date">August 24, 2015</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Upcoming Public Meetings</a></h4>
														<span class="notice-date">October 18, 2015</span>
													</div>
												</li>
												<!-- NOTICE : end -->

											</ul>
											<p class="show-all-btn"><a href="notice-list.html">Ver todos los avisos</a></p>
										</div>
									</div>
								</div>
								<!-- NOTICES WIDGET : end -->

								<!-- IMAGE WIDGET : begin -->
								<div class="widget image-widget">
									<div class="widget-inner">
										<div class="widget-content">
											<a href="#"><img src="{{ asset('images/poster-01.jpg') }}" alt=""></a>
										</div>
									</div>
								</div>
								<!-- IMAGE WIDGET : end -->

								<!-- EVENTS WIDGET : begin -->
								<div class="widget events-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-calendar-full"></i>PRÓXIMOS EVENTOS</h3>
										<div class="widget-content">
											<ul class="event-list">

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="June 3, 2016">
															<span class="event-month">Jun</span>
															<span class="event-day">3</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Movie Premiere: Reflex Revenge (Action Drama)</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="June 24, 2016">
															<span class="event-month">Jun</span>
															<span class="event-day">24</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Summer Rock Festival: Intrepid Pioneers, Filament Kingdom, Messenger Encounter &amp; More!</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="July 9, 2016">
															<span class="event-month">Jul</span>
															<span class="event-day">9</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Theatre Premiere: Antigone with Maximiliano Simonas</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="July 15, 2016">
															<span class="event-month">Jul</span>
															<span class="event-day">15</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Annual Spring Marathon: Around the TownPress</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

											</ul>
											<p class="show-all-btn"><a href="event-list.html">Ver todos los eventos</a></p>
										</div>
									</div>
								</div>
								<!-- EVENTS WIDGET : end -->

							</div>
						</aside>
						<!-- RIGHT SIDEBAR : end -->

					</div>
					<!-- RIGHT COLUMN : end -->

				</div>
			</div>
		</div>
		<!-- CORE : end -->

		<!-- FOOTER : begin -->
		<footer id="footer" class="m-has-bg">
			<div class="footer-bg">
				<div class="footer-inner">

					<!-- FOOTER TOP : begin -->
					<div class="footer-top">
						<div class="c-container">

							<!-- BOTTOM PANEL : begin -->
							<div id="bottom-panel">
								<div class="bottom-panel-inner">
									<div class="row">
										<div class="col-md-3">

											<!-- TEXT WIDGET : begin -->
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title">GAD HUAMBOYA</h3>
													<div class="widget-content">
														<p>TownPress is a premium Municipality HTML template. It is best suited to be used as a presentation site for small towns or villages.</p>
														<p>You can buy this responsive HTML template on <a href="http://themeforest.net/user/LSVRthemes/portfolio">ThemeForest</a>.</p>
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- DEFINITION LIST WIDGET : begin -->
											<div class="widget definition-list-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-telephone"></i>NÚMEROS DE TELÉFONO</h3>
													<div class="widget-content">
														<dl>
															<dt>Town Clerk</dt>
															<dd>(123) 456-7890</dd>
															<dt>State Police</dt>
															<dd>(123) 456-7891</dd>
															<dt>Fire Department</dt>
															<dd>(123) 456-7892</dd>
														</dl>
														<p class="show-all-btn"><a href="phone-numbers.html">Ver todos los números de teléfono</a></p>
													</div>
												</div>
											</div>
											<!-- DEFINITION LIST WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- MAILCHIMP SUBSCRIBE WIDGET : begin -->
											<!-- Please read the documentation to learn how to configure Mailchimp Subscribe widget -->
											<div class="widget mailchimp-subscribe-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-at-sign"></i>SUSCRÍBASE A NUESTRO BOLETÍN</h3>
													<div class="widget-content">

														<!-- Add your custom form URL into "action" attribute in following element -->
                										<form class="mailchimp-subscribe-form" method="get"
                											action="http://lsvr.us14.list-manage.com/subscribe/post-json?u=8291218baaf54ddfd7dbc6016&amp;id=f3e5d696dc&amp;c=?">
	                    									<div class="subscribe-inner">

	                    										<div class="description">
	                    											<p>Súmate a nuestra newsletter para recibir noticias actualizadas sobre nuestro municipio.</p>
																</div>

																<!-- VALIDATION ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>Your email address is required.</span></p>
																<!-- VALIDATION ERROR MESSAGE : end -->

																<!-- SENDING REQUEST ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>There was a connection problem. Try again later.</span></p>
																<!-- SENDING REQUEST ERROR MESSAGE : end -->

																<!-- SUCCESS MESSAGE : begin -->
																<p class="c-alert-message m-success" style="display: none;"><i class="ico fa fa-check-circle"></i>
																<span><strong>Form sent successfully!</strong></span></p>
																<!-- SUCCESS MESSAGE : end -->

										                        <div class="form-fields">
										                            <input type="text" placeholder="Your Email Address" name="EMAIL" class="m-required m-email">
										                            <button title="Subscribe" type="submit" class="submit-btn">
																		<i class="fa fa-chevron-right"></i>
																		<i class="fa fa-spinner fa-spin"></i>
																	</button>
										                        </div>

	                    									</div>
                										</form>

    												</div>
												</div>
											</div>
											<!-- MAILCHIMP SUBSCRIBE WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- TEXT WIDGET : begin -->
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-envelope"></i>DIRECCIÓN DEL AYUNTAMIENTO</h3>
													<div class="widget-content">
														<p>P.O. Box 123 TownPress<br>VT 12345</p>
														<p>Phone: (123) 456-7890<br>Fax: (123) 456-7891<br>
														Email: <a href="#">townhall@townpress.gov</a></p>
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- BOTTOM PANEL : end -->

						</div>
					</div>
					<!-- FOOTER TOP : end -->

					<!-- FOOTER BOTTOM : begin -->
					<div class="footer-bottom">
						<div class="footer-bottom-inner">
							<div class="c-container">

								<!-- FOOTER SOCIAL : begin -->
								<!-- Here is the list of some popular social networks. There are more icons you can use, just refer to the documentation -->
								<div class="footer-social">
									<ul class="c-social-icons">
										<li class="ico-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="ico-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="ico-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="ico-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
										<!--li><a href="#"><i class="fa fa-envelope"></i></a></li-->
										<!--li class="ico-angellist"><a href="#"><i class="fa fa-angellist"></i></a></li-->
										<!--li class="ico-behance"><a href="#"><i class="fa fa-behance"></i></a></li-->
										<!--li class="ico-bitbucket"><a href="#"><i class="fa fa-bitbucket"></i></a></li-->
										<!--li class="ico-bitcoin"><a href="#"><i class="fa fa-bitcoin"></i></a></li-->
										<!--li class="ico-codepen"><a href="#"><i class="fa fa-codepen"></i></a></li-->
										<!--li class="ico-delicious"><a href="#"><i class="fa fa-delicious"></i></a></li-->
										<!--li class="ico-deviantart"><a href="#"><i class="fa fa-deviantart"></i></a></li-->
										<!--li class="ico-digg"><a href="#"><i class="fa fa-digg"></i></a></li-->
										<!--li class="ico-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li-->
										<!--li class="ico-dropbox"><a href="#"><i class="fa fa-dropbox"></i></a></li-->
										<!--li class="ico-flickr"><a href="#"><i class="fa fa-flickr"></i></a></li-->
										<!--li class="ico-foursquare"><a href="#"><i class="fa fa-foursquare"></i></a></li-->
										<!--li class="ico-git"><a href="#"><i class="fa fa-git"></i></a></li-->
										<!--li class="ico-github"><a href="#"><i class="fa fa-github"></i></a></li-->
										<!--li class="ico-lastfm"><a href="#"><i class="fa fa-lastfm"></i></a></li-->
										<!--li class="ico-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li-->
										<!--li class="ico-paypal"><a href="#"><i class="fa fa-paypal"></i></a></li-->
										<!--li class="ico-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li-->
										<!--li class="ico-reddit"><a href="#"><i class="fa fa-reddit"></i></a></li-->
										<!--li class="ico-skype"><a href="#"><i class="fa fa-skype"></i></a></li-->
										<!--li class="ico-soundcloud"><a href="#"><i class="fa fa-soundcloud"></i></a></li-->
										<!--li class="ico-spotify"><a href="#"><i class="fa fa-spotify"></i></a></li-->
										<!--li class="ico-steam"><a href="#"><i class="fa fa-steam"></i></a></li-->
										<!--li class="ico-trello"><a href="#"><i class="fa fa-trello"></i></a></li-->
										<!--li class="ico-tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li-->
										<!--li class="ico-twitch"><a href="#"><i class="fa fa-twitch"></i></a></li-->
										<!--li class="ico-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li-->
										<!--li class="ico-vine"><a href="#"><i class="fa fa-vine"></i></a></li-->
										<!--li class="ico-vk"><a href="#"><i class="fa fa-vk"></i></a></li-->
										<!--li class="ico-wordpress"><a href="#"><i class="fa fa-wordpress"></i></a></li-->
										<!--li class="ico-xing"><a href="#"><i class="fa fa-xing"></i></a></li-->
										<!--li class="ico-yahoo"><a href="#"><i class="fa fa-yahoo"></i></a></li-->
										<!--li class="ico-yelp"><a href="#"><i class="fa fa-yelp"></i></a></li-->
										<!--li class="ico-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li-->
									</ul>
								</div>
								<!-- FOOTER SOCIAL : end -->

								<!-- FOOTER MENU : begin -->
								<nav class="footer-menu">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="http://demos.lsvr.sk/townpress.html/documentation/">Documentation</a></li>
										<li><a href="http://themeforest.net/user/LSVRthemes/portfolio">Purchase</a></li>
									</ul>
								</nav>
								<!-- FOOTER MENU : end -->

								<!-- FOOTER TEXT : begin -->
								<div class="footer-text">
									<p>2020 copyright © <a href="http://themeforest.net/user/LSVRthemes/portfolio">GAD HUAMBOYA</a></p>
								</div>
								<!-- FOOTER TEXT : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER BOTTOM : end -->

				</div>
			</div>
		</footer>
		<!-- FOOTER : end -->

		<!-- SCRIPTS : begin -->
		<script src="{{ asset('library/js/third-party.js') }}" type="text/javascript"></script>
		<script src="{{ asset('library/js/library.js') }}" type="text/javascript"></script>
		<script src="{{ asset('library/js/scripts.js') }}" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

		<script>
			function eliminar(argument) {
				swal({
					title: "Confirme?",
					text: "Está seguro de eliminar, se perdera todal la información.!",
					type: "error",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Si, eliminar esto!",
					cancelButtonText:"Cancelar",
					closeOnConfirm: false
				},
				function(){
					location.replace($(argument).data("url"));
				});
			}
		
		</script>

	</body>
</html>
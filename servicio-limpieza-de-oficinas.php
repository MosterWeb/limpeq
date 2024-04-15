<?php
require_once "inc/header.php";
?>

<style>
	.card-title {

		font-size: 25px;
	}

	.fix {
		position: sticky !important;
	}

	#page-menu.sticky-page-menu:not(.dots-menu) #page-menu-wrap {
		top: 90px;
	}

	/*--------------------
		paginations
		---------------------*/
	.dark .swiper-pagination span:nth-child(1):hover,
	.dark .swiper-pagination span:nth-child(1) {
		background-color: #7F858D
	}

	.dark .swiper-pagination span:nth-child(2):hover,
	.dark .swiper-pagination span:nth-child(2) {
		background-color: #CB394E
	}

	.dark .swiper-pagination span:nth-child(3):hover,
	.dark .swiper-pagination span:nth-child(3) {
		background-color: #75787B
	}

	.dark .swiper-pagination span:nth-child(4):hover,
	.dark .swiper-pagination span:nth-child(4) {
		background-color: #9C780E
	}


	/*--------------------
		Background
		--------------------*/
	.bg {
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		width: 100%;
		height: 100%;
	}

	/*--------------------
		Slider-text
		--------------------*/
	.slider-text {
		position: absolute;
		top: 150px;
		left: 50%;
		transform: translate(-50%, -50%);
		z-index: 2;
		text-align: center;
	}

	.slider-text h2 {
		font-weight: 700;
		margin-bottom: 10px;
	}

	.slider-text p {
		font-size: 17px;
		font-weight: 300;
		opacity: .7;
	}
</style>

<section id="slider" class="slider-element dark swiper_wrapper" data-effect="fade" data-loop="true" data-dots="true" data-speed="1000" data-autoplay="4500" style="min-height: 650px; position: relative; top: 10px;">



	<div class="swiper swiper-parent">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="swiper-slide-bg" style="background-image: url(assets/images/single/13.jpg);">
				</div>

			</div>
			<div class="swiper-slide">
				<div class="swiper-slide-bg" style="background-image: url(assets/images/single/14.jpg);">
				</div>

			</div>

		</div>
		<div class="swiper-pagination"></div>
	</div>

</section><!-- #Slider End -->

<!-- Page Sub Menu
============================================= -->
<div id="page-menu">
	<div id="page-menu-wrap">
		<div class="container">
			<div class="page-menu-row">

				<div class="page-menu-title"><span>Limpieza de oficinas (en general)</div>

				<nav class="page-menu-nav one-page-menu">
					<ul class="page-menu-container">
						<li class="page-menu-item"><a href="#" data-href="#section-features">
								<div>Descripción</div>
							</a></li>
						<li class="page-menu-item"><a href="#" data-href="#section-spec">
								<div>Características</div>
							</a></li>

						<li class="page-menu-item"><a href="#" data-href="#section-store">
								<div>Solicita servicio</div>
							</a></li>
					</ul>
				</nav>

				<div id="page-menu-trigger"><i class="bi-list"></i></div>

			</div>
		</div>
	</div>
</div><!-- #page-menu end -->

<!-- Content
============================================= -->
<section class="py-4" id="content">
	<div class="content-wrap pt-5">
		<div class="container">

			<div class="row">
				<!-- Posts -->
				<div class="col-md-8">

					<!-- Page Section - features
				============================================= -->
					<div id="section-features" class="page-section">
						<h3 class="mb-3">Descripción</h3>
						<p>
    Nos especializamos en servicios de limpieza de oficinas, proporcionando soluciones integrales adaptadas a las necesidades de cada espacio de trabajo. Comprendemos la relevancia de mantener un ambiente de oficina limpio y organizado, no solo para el confort y bienestar de los empleados, sino también para fomentar un entorno de trabajo saludable y productivo. Nuestro equipo aplica métodos eficaces y utiliza productos seguros para asegurar una limpieza exhaustiva que abarca desde áreas comunes hasta espacios privados, cuidando la integridad de su mobiliario y equipamiento.
</p>

					</div>

					<!-- Page Section - spec
				============================================= -->
					<div id="section-spec" class="page-section mt-5">
						<h3 class="mb-3">Características</h3>
						<div class="row">
							<div class="col-md-6">
								<ul class="iconlist">
									<li><i class="bi-check-circle-fill"></i><span class="ms-2">Limpieza profunda y meticulosa de todas las áreas.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Uso de productos de limpieza no tóxicos y ecológicos.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Equipos de limpieza de alta tecnología.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Personal calificado y de confianza.</span></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="iconlist">
									<li><i class="bi-check-circle-fill"></i><span class="ms-2">Servicios adaptados a las necesidades específicas del cliente.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Desinfección y sanitización efectivas.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Atención al detalle en cada servicio.</span></li>
									<li class="mt-2"><i class="bi-check-circle-fill"></i><span class="ms-2">Compromiso con la puntualidad y la eficiencia.</span></li>
								</ul>
							</div>
						</div>
					</div>





				</div>

				<!-- Sidebar -->
				<div class="col-md-4 ">
					<div>
						<div class="card mt-4 fix">
							<img class="card-img-top" src="assets/images/call.jpg" alt="Card image cap">
							<div class="card-body">
								<h4 class="mb-1 color">Llámanos:</h4>
								<h2 class="card-title mb-2">
									<i class="bi-telephone position-relative me-1 color" style="top: 4px;"></i>
									<a href="tel:+525555351555" style="text-decoration: none; color: inherit;">
										(55) 5535–1555
									</a>
									<span style="font-size: 14px;">Ext. 121</span>
								</h2>
								<h2 class="card-title mb-2">
									<i class="bi-telephone position-relative me-1 color" style="top: 4px;"></i>
									<a href="tel:+525555351888" style="text-decoration: none; color: inherit;">
										(55) 5535–1888
									</a>
									<span style="font-size: 14px;">Ext.104</span>
								</h2>
								<p class="card-text">Estamos disponibles 24/7. Nuestro personal experto está listo para
									responder a tus preguntas. También puedes contactarnos por correo electrónico <a class="btn-link" href="mailto:cotizaciones@limpeq.com">cotizaciones@limpeq.com</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>



			<!-- Page Section - store
		============================================= -->
			<div id="section-store" class="page-section mt-3">

				<div class="row">
					<div class="col-md-8">
						<div class="heading-block">
							<h2>Solicitar servicio</h2><br>
							<p>Nuestro equipo está disponible para proporcionar los mejores servicios de limpieza y
								mantenimiento. Con experiencia y dedicación, garantizamos soluciones óptimas para su
								empresa. Conéctese con nosotros para transformar y mantener sus espacios con
								profesionalismo y calidad excepcional.</p>
						</div>

						<div class="form-widget">

							<div class="form-result"></div>

							<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="form-process">
									<div class="css3-spinner">
										<div class="css3-spinner-scaler"></div>
									</div>
								</div>

								<div class="col-md-4 form-group">
									<label for="template-contactform-name">Nombre <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control border-form-control required">
								</div>

								<div class="col-md-4 form-group">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control border-form-control">
								</div>

								<div class="col-md-4 form-group">
									<label for="template-contactform-phone">Teléfono</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control border-form-control">
								</div>

								<div class="w-100"></div>

								<div class="col-md-4 form-group">
									<label for="template-contactform-empresa">Empresa</label>
									<input type="text" id="template-contactform-empresa" name="template-contactform-empresa" value="" class="form-control border-form-control">
								</div>

								<div class="col-md-4 form-group">
									<label for="template-contactform-subject">Asunto <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required form-control border-form-control">
								</div>



								<div class="col-md-4 form-group">
									<label for="template-contactform-service">Servicios</label>
									<select id="template-contactform-service" name="template-contactform-service" class="form-select border-form-control">
										<option value="">-- Selecciona uno --</option>
										<option value="Limpieza Inmuebles">Limpieza de Inmuebles</option>
										<option value="Trabajos Eventuales">Trabajos Eventuales</option>
										<option value="Pulido Pisos">Pulido de Pisos</option>
										<option value="Jardineria">Jardinería</option>
										<option value="Fumigacion">Fumigación</option>
										<option value="Pulido Pisos">Lavado de exteriores</option>
										<option selected value="Limpieza de interiores">Limpieza de interiores</option>

										<option value="Limpieza de altura">Limpieza de altura</option>

									</select>
								</div>

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="template-contactform-message">Mensaje <small>*</small></label>
									<textarea class="required form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="5" cols="30"></textarea>
								</div>

								<div class="col-12 form-group d-none">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control border-form-control">
								</div>

								<div class="col-12 form-group">

									<script src="https://www.google.com/recaptcha/api.js" async defer></script>
									<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT">
									</div>

								</div>

								<div class="col-12 form-group">
									<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar mensaje</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>

						</div>
					</div>



				</div>
			</div>

		</div>
	</div>
</section><!-- #content end -->
<?php
require_once 'inc/footer.php';

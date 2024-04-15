<?php
require_once "inc/header.php";
?>
<style>
	.card-title {
		margin-bottom: var(--bs-card-title-spacer-y);
		color: var(--bs-card-title-color);
		font-size: 20px;
	}
</style>
<!-- Page Title
		============================================= -->
<section class="page-title">
	<div class="container">
		<div class="page-title-row">

			<div class="page-title-content">
				<h1>Contacto</h1>
			</div>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="./">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contacto</li>
				</ol>
			</nav>

		</div>
	</div>
</section><!-- .page-title end -->


<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="heading-block">
						<h2>Contáctanos</h2>
						<p>Nuestro equipo está disponible para proporcionar los mejores servicios de limpieza y mantenimiento. Con experiencia y dedicación, garantizamos soluciones óptimas para su empresa. Conéctese con nosotros para transformar y mantener sus espacios con profesionalismo y calidad excepcional.</p>
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
									<option value="Limpieza de interiores">Limpieza de interiores</option>
									<option value="Limpieza empresarial">Limpieza empresarial</option>
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
								<div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

							</div>

							<div class="col-12 form-group">
								<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar mensaje</button>
							</div>

							<input type="hidden" name="prefix" value="template-contactform-">

						</form>

					</div>
				</div>

				<div class="col-md-4">
					<div class="card mt-4">
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
							<p class="card-text">Estamos disponibles 24/7. Nuestro personal experto está listo para responder a tus preguntas. También puedes contactarnos por correo electrónico <a class="btn-link" href="mailto:cotizaciones@limpeq.com">cotizaciones@limpeq.com</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->
<?php
require_once 'inc/footer.php';

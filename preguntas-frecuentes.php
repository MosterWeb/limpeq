<?php
require_once "inc/header.php";
?>

<style>
	.card-title {
		margin-bottom: var(--bs-card-title-spacer-y);
		color: var(--bs-card-title-color);
		font-size: 20px;
	}

	.ticker-wrap {
		--cnvs-ticker-duration: 100s;

		position: absolute;
		top: 50%;
		left: -100%;
		z-index: auto;
		width: 100%;
		overflow: hidden;
		padding-left: 100%;
		box-sizing: content-box;
		opacity: .05;
		transform: translateY(-50%);
	}

	.ticker-wrap .ticker-item {
		display: inline-block;
		font-size: 15rem;
		font-weight: 900;

	}

	.section {
		position: relative;
		width: 100%;
		margin: 0 0;
		padding: var(--cnvs-section-padding) 0;
		background-color: var(--cnvs-section-bg);
		overflow: hidden;
	}

	.content-wrap {
		position: relative;
		padding: var(--cnvs-content-padding) 0;
		overflow: hidden;
		top: -50px;
	}
</style>
<!-- Page Title
		============================================= -->
<section class="page-title">
	<div class="container">
		<div class="page-title-row">

			<div class="page-title-content">
				<h1>Preguntas frecuentes</h1>
			</div>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Preguntas frecuentes</li>
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
						<h2>Lo consultan nuestros clientes</h2>
						<p>Nuestro equipo está disponible para proporcionar los mejores servicios de limpieza y mantenimiento. Con experiencia y dedicación, garantizamos soluciones óptimas para su empresa. Conéctese con nosotros para transformar y mantener sus espacios con profesionalismo y calidad excepcional.</p>
					</div>

					<div id="faqs" class="faqs">

						<div class="toggle faq pb-3 mb-3 faq-marketplace faq-authors">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Qué servicios de limpieza ofrece Limpeq?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Proporcionamos limpieza general y especializada para diversos espacios, incluyendo oficinas, hospitales y más, con estándares de excelencia.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-authors faq-miscellaneous">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Cómo agendo un servicio de limpieza?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Contáctanos vía web, teléfono o email para personalizar tu horario de limpieza según tus necesidades y conveniencia.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-miscellaneous">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Utilizan productos ecológicos?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Priorizamos el medio ambiente usando productos y prácticas ecológicas, seguros para todos los espacios y usuarios.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-authors faq-legal faq-itemdiscussion">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Me pueden dar un precio por operador de limpieza sin visitar mis instalaciones?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">No. Para brindar una cotización precisa, es esencial evaluar personalmente cada espacio. Aunque contamos con estándares de servicio por metro cuadrado, entendemos que cada inmueble es único. Por ello, preferimos realizar una inspección para identificar las necesidades específicas y ofrecer la propuesta más adecuada a cada cliente.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-marketplace faq-authors">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Ofrecen mantenimiento integral?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Nos adaptamos a tus requerimientos, ofreciendo desde mantenimiento integral hasta servicios exclusivos de limpieza.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-marketplace faq-authors">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Puedo solicitar una presentación de su empresa?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Claro, estaríamos encantados de presentarle nuestra empresa y servicios. Por favor, póngase en contacto con nosotros a través de nuestra <a href="assets/./contacto.php">página web</a> para programar una presentación detallada y personalizada.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-marketplace faq-authors">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Capacitan a su personal?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Sí, nuestra plantilla recibe formación continua en diversos ámbitos, incluyendo técnicas de supervisión y especialización en pulido y aseo, asegurando un servicio de máxima calidad.</div>
						</div>

						<div class="toggle faq pb-3 mb-3 faq-marketplace faq-authors">
							<div class="toggle-header">
								<div class="toggle-icon">
									<i class="toggle-closed bi-question-circle"></i>
									<i class="toggle-open bi-check-lg"></i>
								</div>
								<div class="toggle-title ps-1">
									¿Hay un mínimo de persoas de limpieza para poder cotizar un servicio?
								</div>
								<div class="toggle-icon">
									<i class="toggle-closed fa-solid fa-chevron-down"></i>
									<i class="toggle-open fa-solid fa-chevron-up"></i>
								</div>
							</div>
							<div class="toggle-content ps-4">Sí. Se requiere que el servicio
								necesite mínimo 5 elementos para poder enviar una cotización.
								Esto aplica sólo para el servicio de limpieza profesional.</div>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="card mt-4">
						<img class="card-img-top" src="assets/images/call.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="mb-1 color">Llámanos:</h4>
							<h2 class="card-title mb-2"><i class="bi-telephone position-relative me-1 color" style="top: 4px;"></i> (55) 5535–1555 <span style="font-size: 14px;">Ext. 121</span></h2>
							<h2 class="card-title mb-2"><i class="bi-telephone position-relative me-1 color" style="top: 4px;"></i> (55) 5535–1888 <span style="font-size: 14px;">Ext. 104</span></h2>
							<p class="card-text">Estamos disponibles 24/7. Nuestro personal experto está listo para responder a tus preguntas. También puedes contactarnos por correo electrónico <a class="btn-link" href="mailto:cotizaciones@limpeq.com">cotizaciones@limpeq.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->
<section class="py-4">
	<div>
		<div class="section text-center text-white" style="background: #0a3883;">
			<div class="ticker-wrap">
				<div class="ticker">
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
					<div class="ticker-item">100% CALIDAD LIMPEQ</div>
					<div class="ticker-item"> &starf; </div>
				</div>
			</div>
			<div class="container ">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<p class="text-uppercase fw-bold mb-4">¡Brinda a tus clientes y equipo un espacio impecable! </p>
						<h1 class="text-white fw-bold display-3" style="letter-spacing: -1px;">Impulsa tu negocio con limpieza excepcional.<br> Calidad y eficiencia <span class="nocolor text-decoration-underline" style="text-underline-offset: 5px;"> <br>¡En cada servicio!</span> </h1>
						<p class="op-07 mw-xs mx-auto px-5 mb-5">Comprometidos con la excelencia, sin compromisos ocultos. Pura satisfacción y atención detallada.</p>
						<a href="./contacto.php" class="button button-xlarge rounded-pill button-light m-0 mt-2">Solicita tu Servicio</a>
					</div>
				</div>
			</div>
		</div>

	</div>

</section><!-- #content end -->
<script>
	jQuery(document).ready(function() {
		var $faqItems = jQuery('#faqs .faq');
		if (window.location.hash != '') {
			var getFaqFilterHash = window.location.hash;
			var hashFaqFilter = getFaqFilterHash.split('#');
			if ($faqItems.hasClass(hashFaqFilter[1])) {
				jQuery('.grid-filter li').removeClass('activeFilter');
				jQuery('[data-filter=".' + hashFaqFilter[1] + '"]').parent('li').addClass('activeFilter');
				var hashFaqSelector = '.' + hashFaqFilter[1];
				$faqItems.css('display', 'none');
				if (hashFaqSelector != 'all') {
					jQuery(hashFaqSelector).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
			}
		}

		jQuery('.grid-filter a').on('click', function() {
			jQuery('.grid-filter li').removeClass('activeFilter');
			jQuery(this).parent('li').addClass('activeFilter');
			var faqSelector = jQuery(this).attr('data-filter');
			$faqItems.css('display', 'none');
			if (faqSelector != 'all') {
				jQuery(faqSelector).fadeIn(500);
			} else {
				$faqItems.fadeIn(500);
			}
			return false;
		});
	});
</script>
<?php
require_once 'inc/footer.php';

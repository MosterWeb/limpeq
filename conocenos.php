<?php
require_once "inc/header.php";
?>

<style>
	.testimonial .flex-control-nav li a {
		border: none;
		background-color: #ffffff;
		opacity: 0.5;
	}

	#content {
		position: relative !important;
		background-color: #fff0;

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
		padding: 0 !important;
		overflow: hidden;
		top: -50px;
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

	.block-form-11 {
		font-weight: 800;
	}

	.block-form-11 .grid-border {
		--cnvs-grid-border-color: var(--cnvs-contrast-1000);
		--cnvs-grid-border-opacity: .5;
	}

	.block-form-11 .list-link a {
		text-underline-offset: 2px;
		font-size: 1.115rem;
	}
</style>
<!-- Page Title
		============================================= -->
<section class="page-title">
	<div class="container">
		<div class="page-title-row">

			<div class="page-title-content">
				<h1>Conócenos</h1>
			</div>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Conócenos</li>
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

			<!-- Content
		    ============================================= -->
			<section id="content">

				<div class="pt-6 pb-6">

					<div class="jumbotron p-4 p-md-5 dark position-relative rounded mb-4" style="background: url(assets/images/servicios/banner-nosotros.jpg) center center / cover;">
						<div class="col-md-6 px-0 py-3" style="z-index: 1">
							<strong class="d-inline-block mb-2 fw-semibold text-uppercase ls-2">Limpeq</strong>
							<h2 class="fw-semibold mb-2">Servicio de limpieza premium</h2>

							<p class="my-4 h6 text-white-50">Nos enorgullecemos de atender a una diversa clientela que incluye hospitales, entidades bancarias, corporativos, centros educativos y más.</p>
							<a href="./contacto.php" class="button button-rounded button-3d button-white button-light text-transform-none ls-0 m-0">Solicitar servicio</a>
						</div>
						<div class="video-wrap rounded" style="position: absolute; top: 0; left: 0; height: 100%; z-index: 0">
							<div class="video-overlay" style="background: rgba(0,0,0,0.5);"></div>
						</div>
					</div>

					<section id="section-about" class="page-section">

						<div class="container">

							<div>
								<h3 style="font-weight: 800;" class="text-center  display-4">Nosotros</h3>
							</div>

							<div class="row justify-content-center col-mb-50">
								<div class="col-sm-6 col-lg-4">
									<div class="feature-box media-box">
										<div class="fbox-media">
											<img src="assets/images/services/1.jpg" alt="Why choose Us?">
										</div>
										<div class="fbox-content px-0">

											<h3>Nuestra misión<span class="subtitle">Redefinir su marca.</span></h3>
											<p class="text-dark">A través de soluciones de limpieza innovadoras y eficientes, garantizando espacios más saludables y productivos y con ello la mejora de su imagen como valor agregado a su marca.</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-lg-4">
									<div class="feature-box media-box">
										<div class="fbox-media">
											<img src="assets/images/services/2.jpg" alt="Why choose Us?">
										</div>
										<div class="fbox-content px-0">
											<h3>Nuestro objetivo<span class="subtitle">Brindar calidad.</span></h3>
											<p class="text-dark">Ser líderes en el mercado de la limpieza, ofreciendo servicios de la más alta calidad que superen constantemente las expectativas de nuestros clientes.</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-lg-4">
									<div class="feature-box media-box">
										<div class="fbox-media">
											<img src="assets/images/services/3.jpg" alt="Why choose Us?">
										</div>
										<div class="fbox-content px-0">
											<h3>Lo que hacemos<span class="subtitle">Espacios sustentables.</span></h3>
											<p class="text-dark">Nos dedicamos a hacer felices a nuestros clientes mediante servicios de limpieza excepcionales. Nos enfocamos en cada detalle para garantizar espacios impecables y ambientes de trabajo óptimos.</p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</section>

				</div>
			</section><!-- #content end -->


		</div>

		<div id="wrapper">

			<!-- Content
		============================================= -->
			<section id="content">
				<div class="content-wrap py-lg-5" style="background: linear-gradient(rgba(var(--bs-primary-rgb), .17) 70%, var(--bs-white));">

					<div class="container mw-lg py-lg-5">

					 
						<div>
								<h3  style="font-weight: 800; " class="text-center  display-5">Soluciones de limpieza que inspiran</h3>
							</div>


						<div class="clear"></div>

						<div class="row grid-border justify-content-center mt-3">

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="fa-solid fs-2 fa-broom mb-3"></i>

								<h3 class="mb-1 fw-semibold">Imagen</h3>
								<p class="mb-5">Nos dedicamos a crear un entorno laboral que inspire y energice a empleados, clientes y visitantes a través de un servicio de limpieza de excelencia. La calidad de nuestra labor se refleja en cada detalle, y es por ello que dotamos a nuestro personal con uniformes que representan profesionalismo y confianza.</p>

							</div>

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="  fs-2 bi-calendar-check-fill mb-3"></i>
								<h3 class="mb-1 fw-semibold">Conservación</h3>
								<p class="mb-5">Estamos comprometidos con prolongar la vida útil y preservar la calidad del mobiliario y acabados de su empresa. Utilizamos los productos más eficaces y la tecnología más avanzada en maquinaria y equipos para asegurar la conservación óptima de sus activos.</p>

							</div>

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="fa-solid fa-user-shield fs-2   mb-3"></i>
								<h3 class="mb-1 fw-semibold">Salud</h3>
								<p class="mb-5">Ponemos la higiene en el centro de nuestras operaciones, asegurando áreas limpias y seguras, especialmente en aquellas que necesitan cuidados especializados. Fomentamos prácticas ecológicas, empleando procedimientos y materiales que protegen el medio ambiente y la salud.</p>
							</div>
						</div>
						<div class="row grid-border justify-content-center mt-3">

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="fa-solid fa-building-circle-check fs-2   mb-3"></i>
								<h3 class="mb-1 fw-semibold">Eficiencia</h3>
								<p class="mb-5">Incorporamos la más avanzada tecnología en nuestros procesos de limpieza, optimizando la calidad sin incurrir en costos adicionales. Nos adaptamos a las necesidades específicas de cada cliente y entorno, garantizando un servicio sin igual.</p>

							</div>

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="fa-solid fa-handshake fs-2   mb-3"></i>
								<h3 class="mb-1 fw-semibold">Atención personal</h3>
								<p class="mb-5">Brindamos un servicio al cliente excepcional, con un equipo altamente capacitado listo para atender cualquier requerimiento. Nuestra atención cubre tanto necesidades administrativas como operativas, asegurando una respuesta integral y eficiente.</p>

							</div>

							<div class="col-lg-4 col-padding py-lg-0">
								<i class="fa-solid  fa-donate fs-2   mb-3"></i>
								<h3 class="mb-1 fw-semibold">Economía</h3>
								<p class="mb-5">Estamos enfocados en minimizar los gastos para nuestros clientes, ofreciendo una gestión de limpieza eficiente que reduce costos y tiempo. Nuestro compromiso es maximizar los recursos y la eficacia en la administración y ejecución de nuestros servicios de limpieza.</p>
							</div>
						</div>

					</div>

				</div>
			</section><!-- #content end -->
		</div><!-- #wrapper end -->

	 
		<section >
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
	</div>
</section><!-- #content end -->

<?php
require_once 'inc/footer.php';

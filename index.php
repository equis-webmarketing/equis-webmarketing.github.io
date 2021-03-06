<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Equis | Web Marketing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="apple-touch-icon" sizes="57x57" href="public/images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="public/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="public/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="public/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="public/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="public/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="public/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="public/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="public/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="public/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="public/images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--[if lte IE 8]><script src="public/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="public/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="public/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="public/assets/css/ie8.css" /><![endif]-->
		<style>
			/* TODO: add to scss file*/
			#intro {
				background-image: url(public/images/equis.png);
				background-size: cover;
				color: white;
			}
			
			.message {
				display: block;
				padding: 10px;
				text-transform: uppercase;
				border-width: 1px;
				border-style: solid;
				margin-bottom: 10px;
				border-radius: 5px;
				font-size: 0.8em;
			}
			.message-error {
				border-color: red !important;
				background-color: rgba(255, 0, 0, 0.5);
			}
			.message-error:focus,
			.message-error:hover,
			.message-error:selected {
				border-color: red !important;
				background-color: rgba(255, 0, 0, 0.5);
			}
			.message-success {
				border-color: mediumseagreen !important;
				background-color: rgba(0, 255, 0, 0.5);
			}
			.message-success:focus,
			.message-success:hover,
			.message-success:selected {
				border-color: mediumseagreen !important;
				background-color: rgba(0, 255, 0, 0.5);
			}
			
			.input-error {
				border-color: red !important;
			}
		</style>
		<!-- reCaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- Google Analytics -->
		<?php include_once("backend/vendor/analyticstracking.php") ?>
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Bienvenido</a></li>
							<li><a href="#services">Que hacemos</a></li>
							<li><a href="#vission-mission">Quienes somos</a></li>
							<li><a href="#contact">Contactanos</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Equis</h1>
							<p>Innovación y creatividad para tu empresa</p>
							<!--
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
							-->
						</div>
					</section>

				<!-- Services -->
					<section id="services" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Que hacemos</h2>
							<!--
							<p>Lorem ipsum dolor sit amet.</p>
							-->
							<div class="features">
								<!-- e-commerce -->
								<section>
									<span class="icon major fa-credit-card"></span>
									<h3>E-commerce</h3>
									<p>Comercialización de tus productos y servicios a través de internet.</p>
								</section>
								<!-- web design -->
								<section>
									<span class="icon major fa-code"></span>
									<h3>Diseño web</h3>
									<p>Programación adaptativa para multiplataformas: PC, notebook, tablet, y móvil.</p>
								</section>
								<!-- community management -->
								<section>
									<span class="icon major fa-users"></span>
									<h3>Community management</h3>
									<p>Manejo de redes sociales, programación y desarrollo de contenidos.</p>
								</section>
								<!-- SEO -->
								<section>
									<span class="icon major fa-area-chart"></span>
									<h3>Posicionamiento web y Seguimiento digital</h3>
									<p>Colocación estratégica en las primeras páginas de buscadores web de forma orgánica y paga.</p>
								</section>
								<!-- branding -->
								<section>
									<span class="icon major fa-university"></span>
									<h3>Branding profesional</h3>
									<p>Fortalecimiento del perfil profesional y vinculación al mercado.</p>
								</section>
								<!-- digital profile -->
								<section>
									<span class="icon major fa-camera-retro"></span>
									<h3>Imagen Digital corporativa</h3>
									<p>Producimos imágenes y videos de tus productos y de la empresa.</p>
								</section>
								<!-- marketing -->
								<section>
									<span class="icon major fa-balance-scale"></span>
									<h3>Estrategias de marketing y comercialización</h3>
									<p>Planeamiento operativo de marketing mix: producto, distribución, precio y promoción.</p>
								</section>
								<!-- projects -->
								<section>
									<span class="icon major fa-book"></span>
									<h3>Formulación de proyectos</h3>
									<p>Asesoramiento y acompañamiento de la idea al negocio, búsqueda de financiamiento y estrategias de presentación de proyectos.</p>
								</section>
								<!-- events & training -->
								<section>
									<span class="icon major fa-calendar"></span>
									<h3>Eventos y capacitaciones</h3>
									<p>Organización de eventos y capacitaciones a medida de los clientes.</p>
								</section>
								<!-- projects -->
								<section>
									<span class="icon major fa-database"></span>
									<h3>Hosting</h3>
									<p>Servicio de alojamiento acorde a las necesidades del cliente.</p>
								</section>
								<!-- digital tracking 
								<section>
									<span class="icon major fa-area-chart"></span>
									<h3>Seguimiento digital</h3>
									<p>Seguimiento digital de la marca.</p>
								</section>
								-->
							</div>
							<!--
							<ul class="actions">
								<li><a href="#" class="button">Learn more</a></li>
							</ul>
							-->
						</div>
					</section>

				<!-- Vission / Mission -->
					<section id="vission-mission" class="wrapper style2 spotlights">
						<!-- Mission -->
						<section>
							<a href="#" class="image"><img src="public/images/vision.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Visión</h2>
									<p>Ser la consultora líder de empresas y emprendedores en lo referente al asesoramiento creativo e innovador para su negocio.</p>
									<!--
									<ul class="actions">
										<li><a href="#" class="button">Learn more</a></li>
									</ul>
									-->
								</div>
							</div>
						</section>
						<!-- Vission -->
						<section>
							<a href="#" class="image"><img src="public/images/mision.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Misión</h2>
									<p>Brindar un servicio integral de asesoramiento dinámico, basado en la especialización y desarrollo de nuestros Recursos Humanos, calidad de los servicios y tecnología aplicada de vanguardia. Ofrecer además, asistencia en la detección de necesidades, diagnóstico del estado de situación, desarrollo de las soluciones propuestas y seguimiento del cumplimiento de los objetivos.</p>
									<!--
									<ul class="actions">
										<li><a href="#" class="button">Learn more</a></li>
									</ul>
									-->
								</div>
							</div>
						</section>
						<!--
						<section>
							<a href="#" class="image"><img src="public/images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Ultricies aliquam</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									<ul class="actions">
										<li><a href="#" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						-->
					</section>

				<!-- Contact -->
					<section id="contact" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Contactanos</h2>
							<!--
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							-->
							<div class="split style1">
								<!-- contact form -->
								<section>
									<form name="contactForm" action='backend/actions/mail-contact.php' id='contactForm'>
										<div class="row">
											<div class="12u" id="formMessage"></div>
											<div class="field 6u">
												<label for="name">Nombre *</label>
												<input type="text" name="name" id="name" required="true"/>
											</div>
											<div class="field 6u$">
												<label for="email">Email *</label>
												<input type="text" name="email" id="email" required="true"/>
											</div>
											<div class="field 12u">
												<label for="subject">Motivo *</label>
												<div class="select-wrapper">
													<select name="subject" id="subject" required="true">
														<option value="" selected>- Motivo -</option>
														<option value="Informacion general">Información general</option>
														<option value="E-commerce">E-commerce</option>
														<option value="Diseño web">Diseño web</option>
														<option value="Community management">Community management</option>
														<option value="Posicionamiento web y Seguimiento digital">Posicionamiento web y Seguimiento digital</option>
														<option value="Branding profesional">Branding profesional</option>
														<option value="Imagen Digital corporativa">Imagen Digital corporativa</option>
														<option value="Estrategias de marketing y comercialización">Estrategias de marketing y comercialización</option>
														<option value="Formulación de proyectos">Formulación de proyectos</option>
														<option value="Eventos y capacitaciones">Eventos y capacitaciones</option>
														<option value="Hosting">Hosting</option>
													</select>
												</div>
											</div>
											<div class="field 12u">
												<label for="message">Mensaje *</label>
												<textarea name="message" id="message" rows="5" required="true"></textarea>
											</div>
											<ul class="actions 12u">
												<li><input type="submit" class="button submit formSubmit" value="Enviar"></li>
											</ul>
										</div>
										<!-- captcha -->
										<div class="g-recaptcha" data-sitekey="6LfR_hgTAAAAAMf2JYYYlW5tvNTHPSHqQ96ZXipz"></div>
									</form>
								</section>
								
								<!-- contact info -->
								<section>
									<ul class="contact">
										<li>
											<h3>Dirección</h3>
											<span>San Martín 902 <br />
											Piso 2 Oficina 10<br />
											3100 Paraná, Entre Ríos<br />
											Argentina</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="mailto:info@equis.com.ar" target="_blank">info@equis.com.ar</a>
										</li>
										<li>
											<h3>Teléfono</h3>
											<span>(0343) 4235507</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="https://www.facebook.com/Equismarketing" target="_blank" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://github.com/equis-webmarketing" target="_blank" class="fa-github"><span class="label">GitHub</span></a></li>
												<!--
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
												-->
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Equis. Todos los derechos reservados.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="public/assets/js/jquery.min.js"></script>
			<script src="public/assets/js/jquery.scrollex.min.js"></script>
			<script src="public/assets/js/jquery.scrolly.min.js"></script>
			<script src="public/assets/js/skel.min.js"></script>
			<script src="public/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="public/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="public/assets/js/main.js"></script>
			<script src="public/js/index.js"></script>

	</body>
</html>
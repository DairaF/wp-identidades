<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index,follow">
	<meta name="google-site-verification" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>Identidades informadas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="fav.png"> 

		<?php wp_head(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-F2C44LP7W9"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-F2C44LP7W9');
		</script>
	</head>


  <body onload="tagsActive()" <?php body_class(); ?>>
  <style>
            .aplicacion{border:solid 2px var(--lilaOsc)}
            .jurisprudencia{border:solid 2px var(--lilaOsc)}
            .normativa{border:solid 2px var(--lilaOsc)}
            .actualidad{border:solid 2px var(--rosa)}
          </style>
  <header id="site-header">
		<div class="brand"><a href="/">fund.ar</a></div>
		<div id="menuArea">
			<input type="checkbox" id="menuToggle"></input>

		<label for="menuToggle" class="menuOpen">
			<div class="open"></div>
		</label>

		<div class="menu menuEffects">
			<label for="menuToggle"></label>
			<div class="menuContent">
				<ul>
					<li class="menuItemTop ">
						<a href="http://identidadesinformadas.fund.ar/identidadesdos/hojas-informativas/" class="celeste">
							<h4 class="">Hojas informativas</h4>
							<h6 class="">Material sobre el acceso a derechos de personas TTNB.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a href="http://identidadesinformadas.fund.ar/identidadesdos/experiencias-comparadas/" class="lila">
							<h4 class="">Experiencia normativa y práctica</h4>
							<h6 class="">Normativa, jurisprudencia y casos de aplicación de la Ley de Identidad de Género.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a href="http://identidadesinformadas.fund.ar/identidadesdos/actualidades/" class="rosa">
							<h4 class="">Actualidad</h4>
							<h6 class="">Noticias y novedades sobre la situación de personas TTNB. </h6>
						</a>
					</li> 
					<li class="menuItemTop  ">
						<a href="http://identidadesinformadas.fund.ar/identidadesdos/glosario/" class="amarillo">
							<h4 class="">Glosario</h4>
							<h6 class="">Algunas palabras clave para comprender en detalle el contenido del sitio.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a href="http://identidadesinformadas.fund.ar/identidadesdos/grupo-promotor/" class="blanco">
							<h4 class="">¿Quiénes Somos?</h4>
							<h6>Historia del proyecto y de quienes participan de esta iniciativa.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a target="blank" href="https://debatesparlamentarios.fund.ar/ley" class="leyLink">
							<h4 class="">Ley de identidad de género <br>comentada por especialistas</h4>
							<h6>Explorá la Ley de Identidad de Género con comentarios en sus aspectos destacados y en los temas que todavía queda camino por recorrer.</h6>
						</a>
					</li>
				</ul>
			</div>
		</div>
		</div>
	</header>

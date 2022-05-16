<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index,follow">
	<meta name="google-site-verification" content="">
	<meta name="description" content="Una plataforma informativa sobre la Ley de Identidad de Género, con material clave para planificar y diseñar políticas públicas que avancen en la conquista de derechos para las personas trans, travestis y no binarias.">
	<meta name="keywords" content="">
	<title>Identidades informadas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" itemprop="image" content="https://identidadesinformadas.fund.ar/wp-content/uploads/2022/05/FU_IndentidadesInformadas_PortadaWeb.jpg">
    <meta property="og:title" content="Identidades Informadas" />
    <meta property="og:description" content="Una plataforma informativa sobre la Ley de Identidad de Género, con material clave para planificar y diseñar políticas públicas que avancen en la conquista de derechos para las personas trans, travestis y no binarias." />
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="fav.png"> 

			
		<!-- CSS
		================================================== -->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

 		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- Material Design Bootstrap -->
 		
		
		<!-- SLICK CSS -->
		<link rel="stylesheet" href="/wp-includes/css/slick.css"> 		
		<link rel="stylesheet" href="/wp-includes/css/slick-theme.css"> 		
		
		<!-- Custom core CSS -->
		<link rel="stylesheet" href="/wp-includes/css/fonts.css"> 
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


  <body onload="setActives();tagsActive()" <?php body_class(); ?>>

  <script>
        const setActive = (pageN) =>{
            let url = window.location.href;
            if(url.indexOf(pageN) !== -1){
              document.getElementById(pageN).classList.add('active');
              document.getElementById(pageN+'b').classList.add('active');
            }else{
              document.getElementById(pageN).classList.remove('active');
              document.getElementById(pageN+'b').classList.remove('active');
            }
        }
		const setActives = () =>{
			setActive('hojas');
			setActive('glosario');
			setActive('experiencias');
			setActive('grupo');
			setActive('actualidades');
		}
    </script>

<?php
				//  $url=$_SERVER['REQUEST_URI'];
				//  if(url.indexOf('hojas') == -1){
				// 	echo('si');
				//  }else{
				// 	 echo('no');
				//  }
			?>
  		<style>
            .aplicacion{border:solid 5px var(--lilaOsc)}
            .jurisprudencia{border:solid 5px var(--lila)}
            .normativa{border:solid 5px #7e76d3)}
            .actualidad{border:solid 5px var(--rosa)}
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
						<a id="hojas" href="http://identidadesinformadas.fund.ar/identidadesdos/hojas-informativas/" class="celeste">
							<h4 class="">Hojas informativas</h4>
							<h6 class="">Material sobre el acceso a derechos de personas TTNB.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a id="experiencias" href="http://identidadesinformadas.fund.ar/identidadesdos/experiencias-comparadas/" class="lila">
							<h4 class="">Experiencia normativa y práctica</h4>
							<h6 class="">Normativa, jurisprudencia y casos de aplicación de la Ley de Identidad de Género.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a id="actualidades" href="http://identidadesinformadas.fund.ar/identidadesdos/actualidades/" class="rosa">
							<h4 class="">Actualidad</h4>
							<h6 class="">Noticias y novedades sobre la situación de personas TTNB. </h6>
						</a>
					</li> 
					<li class="menuItemTop  ">
						<a id="glosario" href="http://identidadesinformadas.fund.ar/identidadesdos/glosario/" class="amarillo">
							<h4 class="">Glosario</h4>
							<h6 class="">Algunas palabras clave para comprender en detalle el contenido del sitio.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a id="grupo" href="http://identidadesinformadas.fund.ar/identidadesdos/grupo-promotor/" class="blanco">
							<h4 class="">¿Quiénes Somos?</h4>
							<h6>Historia del proyecto y de quienes participan de esta iniciativa.</h6>
						</a>
					</li>
					<li class="menuItemTop ">
						<a target="blank" href="https://untranspodcast.com/" class="traspodcast">
							<h4 class="">Traspodcast</h4>
							<h6></h6>
 						</a>
					</li>
					<li class="menuItemTop ">
						<a target="blank" href="https://debatesparlamentarios.fund.ar/identidaddegenero/" class="leyLink">
							<h4 class="">Ley comentada</h4>
							<h6>Explorá la Ley de Identidad de Género con comentarios en sus aspectos destacados y en los temas que todavía queda camino por recorrer.</h6>
						</a>
					</li>
				</ul>
			</div>
		</div>
		</div>
	</header>

<?php get_header(); ?>
  <section class="bggrad4col intro border-b-b pushBottom">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">				
						<h1 class="text-left text-lg-center">Sobre este proyecto</h1>
					</div>
				</div> 
      </div>
    </section>
    
		<section class="bgGris border-b-b ">
			<div class="container">
				<div class="row">		
					<div class="col-12 pt-5">		
						<h2 class="text-left text-lg-center blanco">¿Quiénes somos?</h2>
						<p class="blanco">El proyecto de Identidades Informadas surge para retratar, en experiencias personales, las barreras y obstáculos de personas TTNB para acceder al cambio registral. Marcelo Mangini, Sabina Bercovich y Ameleo Botto comenzaron el proyecto que, a partir de entrevistas con informantes clave y aliades,  dió un paso atrás y buscó difundir conocimiento generado por los movimientos TTNB, activismos, académiques y aliades. 
						</p><p class="blanco">
						Creamos Identidades Informadas para poner a disposición contenidos elaborados a partir de conocimientos construidos colectivamente. Creemos que el reconocimiento de la identidad de género de las personas está indisolublemente ligado al respeto de su dignidad, por lo que proponemos este sitio como herramienta para avanzar en la conquista de derechos.
						</p><p class="blanco">
						El objetivo del proyecto es articular entre la producción de información del movimiento LGBTTI+ y las personas encargadas de tomar decisiones y diseñar políticas públicas. 
						</p><p class="blanco">
						Este proyecto es una iniciativa del equipo de Géneros de Fundar. 
						</p>
					</div> 
				</div>
				<div class="row">		
					<div class="col-12 pt-5">		
						<h2 class="text-left text-lg-center blanco">Grupo Promotor</h2>
						<p class="blanco">El grupo promotor está integrado por activistas y personas aliadas de reconocida trayectoria en el avance de los derechos de las personas travesti, trans y no binarias que orientan y asesoran sobre el proyecto.</p>
					</div> 
				</div>
				
				<div class="row justify-content-center">
                    <?php 
					$con = 0;
                    $loop = new WP_Query( array( 'post_type' => 'promotor',  'orderby'=> 'title','order'=>'ASC' ) ); 
                
                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                
				<!-- CARD promotor -->
					<div class="col-12 col-md-6 col-lg-4  mb-4">
						<div class="promotor blanco">
								<div class="pic-autxr mb-4"><img src="<?php the_field('foto') ?>"/></div>
								<h4 class="card-title mb-3 d-block blanco"><?php the_title() ?></h4>
								<?php
										$con++;
										$content = get_the_content();
										$largo = strlen($content);
										$cropped = substr($content, 0, 400);
									?>
								<?php if($largo >= 400){ ?>
									<p id="crop<?php echo $con ?>" class="blanco"><?php echo $cropped ?></p>
									<a class="blanco seeMore" onClick="this.style.display = 'none'; 
										document.getElementById('crop<?php echo $con ?>').style.display = 'none';
										document.getElementById('full<?php echo $con ?>').style.display = 'block';
										">
										+ Ver más</a>
									<p style="display:none" id="full<?php echo $con ?>" class="blanco more"><?php echo $content ?></p>
									<?php }else{ ?>
										<p style="display:none" id="crop<?php echo $con ?>" class="blanco"><?php echo $cropped ?></p>
										<p id="full<?php echo $con ?>" class="blanco more"><?php echo $content ?></p>
									<?php } ?>
						</div>
					</div>
								
                    <?php endwhile;?>
								
				</div>
      </div>				
    </section>		
		
		<section class="bgG border-b-b ">
			<div class="container">
				<div class="row">		
					<div class="col-12 pt-5">		
						<h2 class="text-left text-lg-center blanco">Realizadores</h2>
					</div> 
				</div>
				
				<div class="row justify-content-center">
							
				<!-- CARD promotor -->
					<div class="col-12 col-lg-4  mb-4">
						<p class="blanco"><strong>Producci&oacute;n</strong></p>
						<p class="blanco">Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido</p> 			
					</div>

					<div class="col-12 col-lg-4 mb-4"> 
						<p class="blanco"><strong>Gui&oacute;n</strong></p>
						<p class="blanco">Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido</p> 				
					</div>

					<div class="col-12 col-lg-4 mb-4"> 
						<p class="blanco"><strong>Dise&ntilde;o</strong></p>
						<p class="blanco">Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido<br />Nombre Apellido</p>					
					</div>
			 
								
				</div>
      </div>				
    </section>
    <?php include_once('menuBottom.php'); ?>
  <?php get_footer(); ?>
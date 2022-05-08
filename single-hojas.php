
	<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    //variables custom
    $autores = get_post_meta( get_the_ID(), 'autor', true);
    $tiempo = get_post_meta( get_the_ID(), 'tiempo_de_lectura', true);
    $lectura_previa_recomendada = get_post_meta( get_the_ID(), 'lectura_previa_recomendada', true);
    $abstract = get_post_meta( get_the_ID(), 'abstract', true);
    $bibliografia = get_post_meta( get_the_ID(), 'bibliografia', true);
    $sobre_les_autores = get_post_meta( get_the_ID(), 'sobre_les_autores', true);
    ?>
    <section class="intro intro-hojas bggradC gradAnimado ">	
      <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-6 mb-4">
                    
                        <ul class="tagContainer justify-content-lg-center">
                        <?php
                        $posttags = get_the_tags();
                        $names=array();
                        if ($posttags) {
                          foreach($posttags as $tag) {
                            $name = $tag->name . '';
                            array_push($names, $name);
                            echo('<li class="tag"><a href="" class="active">'.ucfirst($name).'</a></li>');
                          }
                        }
                        ?>
                    <ul>
                </div>
                <div class="col-12 col-lg-10 col-xl-8 mb-4">
                <a href="https://identidadesinformadas.fund.ar/hojas-informativas/"><h4 class="d-none d-lg-block text-center" ><a href="">Hojas informativas</a></h4></a>
					<h1 class="text-left text-lg-center"><?php the_title() ?></h1>
                    
                </div>
                <div class="col-12 col-lg-10 col-xl-8 my-4">				
                    <ul class="autorContainer justify-content-lg-center">              
                        <li class="autor"><span class="autorIcon"><?php echo(mb_substr(get_field('autxr1'), 0, 1, "UTF-8")) ?></span><span><?php the_field('autxr1') ?></span></li>    
                        <?php 
                            if(get_field('autxr2') != ""){
                                $inicial = mb_substr(get_field('autxr2'), 0, 1, "UTF-8");
                                $autor= get_field('autxr2');
                                echo('<li class="autor"><span class="autorIcon">'. $inicial.'</span><span>'.$autor.'</span></li>');
                            } 
                        ?>
                    </ul> 
                </div>
                <div class="col-12 pb-5 text-left text-lg-center mt-5">	
                    <a class="btn btnCeleste" target="blank" href="<?php the_field('descargable') ?>">Descargar PDF</a>
                </div>
            </div>
      </div>
    </section> 
		
    <section class="bgCelOsc py-md-5 border-b-w ">
      <div class="container">
        <div class="row justify-content-between">					
					<div class="col-12 col-lg-3  order-1 order-lg-2 px-0">
						<div class="border-t-b py-4 px-3">									
							<p class="mb-3"><strong>Sobre este escrito</strong></p>
							<ul class="specs">
                                <li><?php the_field('fecha') ?></li>
								<li class="duracion">Vas a tardar:<br> <?php echo($tiempo); ?> minutos en leerlo</li>
								<?php if($lectura_previa_recomendada): ?>
                                <li class="antes">Antes te conviene leer:
									<ul>
                                        <li><?php
                                            $link = get_field('lectura_previa_recomendada');
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                                            </ul>
								</li>	
                                <?php endif ?>
							</ul> 
						</div>  
					</div>
					
            <div class="col-12 col-lg-8 order-2 order-lg-1 dark-mobile py-5 py-md-0">
                <h3 class="mb-4">Resumen</h3>
                <p><?php
                    echo($abstract);
                ?></p>
            </div>

        </div>
      </div>
    </section>
 
    <section class="bgW pt-0 pt-lg-5 pb-0 pb-lg-5">			
			<div class="container ">
				<div class="row">   
				<!--  -->
        <div class="col-12 col-lg-4 col-xl-3">	

					<nav class="navbar navbar-expand-lg navbar-hoja px-0">
						<div class="container-fluid">

						<div class="navigation-top bgCelOsc py-4 px-3 d-block d-lg-none">
			 
						<h6 class="">Hojas informativas</h6>
						<h6 class="mb-0"><strong><?php the_title() ?></strong></h6>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div> 
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav flex-column menu-hoja" id="menuSub" > 
								</ul>
							</div>
						</div>
					</nav>
					
        </div>
				<!-- / --> 
				
        <div class="col-12 col-lg-9 col-xl-8 offset-xl-1  ">
						<div id=" " class="mt-5 mt-lg-3 content-hoja">
                            <p><?php the_content(); ?></p>
						</div>
						
<!-- #tab2 -->
                        <?php if($bibliografia): ?>
						<h3 class="nav-acc collapsed" id="bibliografia" data-bs-toggle="collapse" href="#collapseBiblio" role="button" aria-expanded="false" aria-controls="collapseBiblio">Bibliografía</h3>
						<div  class="px-lg-4  collapse multi-collapse" id="collapseBiblio">
							<?php
							echo($bibliografia);
                            ?> 
						</div>
                        <?php endif ?>
							<!-- #tab3 -->
							<h3 class="nav-acc collapsed" id="autores" data-bs-toggle="collapse" href="#collapseAutorxs" role="button" aria-expanded="false" aria-controls="collapseAutorxs">Sobre lxs autorxs</h3>
							<div id="collapseAutorxs" class=" collapse multi-collapse">						 											
								
								<div class="row">
								
									<!-- CARD AUTOR -->
										<div class="col-12 col-md-6 mb-4 px-lg-4">
											<div class="promotor">
												<div class="pic-autxr mb-4"><img src="<?php the_field('foto_autxr_1') ?>"></div>
												<h4 class="card-title mb-3 d-block "><?php the_field('autxr1') ?></h4>
                                                <?php
                                                the_field('bio_autxr_1')
                                                ?>											
                                            </div>
										</div>
									<?php 
                                    if(get_field('autxr2') != ""){ 
                                    ?>
                                    <div class="col-12 col-md-6 mb-4 px-lg-4">
											<div class="promotor">
												<div class="pic-autxr mb-4"><img src="<?php the_field('foto_autxr_2') ?>"></div>
												<h4 class="card-title mb-3 d-block "><?php the_field('autxr2') ?></h4>
                                                <?php
                                                the_field('bio_autxr_2')
                                                ?>											
                                            </div>
										</div>
                                    <?php
                                    }
                                    ?>
								</div>
								
							</div>
							
				</div>
				</div>
      </div>
    </section> 
    <script>
        const hs = document.getElementsByTagName('H3');
        const ul = document.getElementById('menuSub');
        const func = () => {
            for (let i = 0; i < hs.length; i++){
                if(hs[i].innerText!="Resumen"){
                hs[i].id = "h3n"+i;
                var li = document.createElement("li");
                var aTag = document.createElement('a');
                aTag.setAttribute('href',"#h3n"+i);
                aTag.innerText = hs[i].innerText;
                li.appendChild(aTag)
                ul.appendChild(li);
                }
            }
        }
        func();
</script>


<?php endwhile; endif; ?>

<?php include_once('relacionadas.php'); ?>
<?php include_once('menuBottom.php'); ?>
  <?php get_footer(); ?>
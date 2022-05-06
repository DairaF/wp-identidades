<?php get_header(); ?>
<?php include_once('top-filtro-tags.php'); ?>
	<section class="bggradLila gradAnimado intro">
	
			<div class="container">
				<div class="row justify-content-lg-center">
					<div class="col-12 col-lg-10 col-xl-8 pt-4 pt-lg-5">				
						<h4 class="d-none d-lg-block text-center mb-4" >Experiencia normativa y práctica</h4>					
						<h1 class="text-left text-lg-center">Normativa</h1>
						<p class="text-left text-lg-center ">Leyes, decretos y resoluciones que implementan y complementan el derecho al reconocimiento de la identidad de género </p>

					</div>
				</div>
				<?php 
				// include_once('tags-bar.php'); 
				?>
      </div>
			
	</section>


<!--------------- DE TAGS ------------------------------>		
<?php  
        $url=$_SERVER['REQUEST_URI'];
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $selectedTag = $params; 
?>
<section class="bgGris gradAnimado py-5 border-b-b px-xl-5 overHide">
		<div class="container-fluid  ">
			<div class="row">

            <div class="c-relacionadas">
        <?php
        $ok = false; 
		$loop = new WP_Query( array( 
			'post_type' => 'normativa', ));
        if ($selectedTag){
            $loop = new WP_Query( array( 
                    'post_type' => 'normativa',
                    'tag' => $selectedTag,
                    'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
            $loop = new WP_Query( array('post_type' => 'normativa'));
            $ok=true;
          }
          if($loop->have_posts() && $ok == true){
          ?>
          <div class="col-12">
            <h2 class="text-left text-lg-center mb-5">Normas sobre: <?php foreach ($params as $param) { echo (ucwords($param)); } ?></h2>			
          </div>
          <?php
          }
          $minTitle = strtolower(get_the_title());
          $minSearch = strtolower($search);
          while ( $loop->have_posts() && $ok == true ) : $loop->the_post(); if ($search == null || str_contains($minTitle,$minSearch)): ?>
			<div class="post">
				<h6 class="lila"><?php the_field('date'); ?></h6>
				<h4 class="lilaOsc"><?php the_title() ?></h4>
				<p class="blanco"><?php the_content() ?></p>
				<!-- <a class="">+ Ver más</a> -->
			</div>
			<!-- /CARD -->

    <?php endif; endwhile; ?>
 </div>
			</div>
		</div>
	</section>




	<?php 
		$con =0;
		$years = array();
		$loop = new WP_Query( array( 
			'post_type' => 'normativa', 
			'posts_per_page' => 10 ,
			'meta_key'  => 'fecha_normativa',
			'orderby'   => 'meta_value_num',
			'order'     => 'DESC',
			) ); 
			while( $loop->have_posts() ) {
				$loop->the_post();
				$fecha = get_post_meta( get_the_ID(), 'fecha_normativa', true);
				$year = substr($fecha, 0, 4);
				if ( ! isset( $years[ $year ] ) ){ $years[ $year ] = array();}
				$years[ $year ][] = array( 'title' => get_the_title(), 'excerpt' => get_the_excerpt(), 'content'=> get_the_content(), 'date' => get_field('fecha_normativa') );
			}
		$keys = array_keys( $years);
	?>
	<section class="bgGris py-5 border-b-b px-xl-5">
		<div class="container">
			<div class="row"> 

				<!--  -->
        		<div class="col-12 col-lg-3 col-xl-2 d-none d-lg-block">				
					<ul class="tabs tabs_dark"> 
						<?php foreach ($keys as $key){ ?>
							<li rel="n<?php echo($key) ?>" class="active" href="#n<?php echo($key) ?>"><?php echo($key) ?></li>
						<?php } ?>
					</ul>
        		</div>
				<!-- / --> 

				<!--  -->
        		<div class="col-12 col-lg-9 col-xl-9 offset-xl-1  px-0 px-lg-3 mx-0 mx-lg-3">
					
						<div class="tab_container tabs_dark">
						<?php foreach ($keys as $key){ ?>
							<!-- #tab -->						
							<h3 class="d_active tab_drawer_heading" rel="n<?php echo($key) ?>"><?php echo($key) ?></h3>						
							<div id="n<?php echo($key) ?>" class="">
								<h3 class="d-none d-md-block lila mb-4"><strong><?php echo($key) ?></strong></h3>							
								<?php foreach ($years[$key] as $normativa){ ?>
								<div class="post">
									<?php
										$con++;
										$content = $normativa['content'];
										$largo = strlen($content);
										$cropped = substr($content, 0, 400);
									?>
									<h6 class="lila"><?php echo($normativa['date']); ?></h6>
									<h4 class="lilaOsc"><?php echo($normativa['title']); ?></h4>
									<a class="blanco seeMore" href="<?php the:field('link') ?>" target='_blank'> Ver Norma</a>
									<?php if($largo >= 1000){ ?>
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
								<?php }?>
							</div>
						<!-- .tab_container -->
					<?php } ?>
						</div>
        		</div>
				<!-- /CARD -->
			</div>
		</div>
	</section>
		
		
<?php include_once('menuBottom.php'); ?>
<?php get_footer(); ?>
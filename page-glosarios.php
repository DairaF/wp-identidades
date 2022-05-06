<?php get_header(); ?>
<?php
  $search = $_POST['searchTerm'];
?>
	<section class="bggradY gradAnimado intro">
 
			<div class="container">
				<div class="row justify-content-lg-center">
					<div class="col-12 col-lg-10 col-xl-8 pt-4 pt-lg-5">				
 						<h1 class="text-left text-lg-center">Glosario</h1>
						<p class="text-left text-lg-center ">La página cuenta con una pantalla de inicio con una breve presentación del proyecto.</p>

					</div>
				</div>
      </div>
			
	</section>
	
    		<?php $letras = array();
			$loop = new WP_Query( array( 
				'post_type' => 'glosario', 
				'posts_per_page' => 10 ,
				'orderby' => 'letra',
				'order'   => 'ASC',
				) );

				while( $loop->have_posts() ) {
					$loop->the_post();
					$letra = get_field('letra');
					if ( ! isset( $letras[ $letra ] ) ){ $letras[ $letra ] = array();}
					$letras[ $letra ][] = array( 'title' => get_the_title(), 'permalink' => get_the_permalink(), 'content'=> get_the_content() );
				}
			$keys = array_keys( $letras);	
	?>

 
	<section class="bgGris py-5 border-b-b px-xl-5">

		<div class="container">
			<div class="row">
				<div class="col-2 col-lg-3 pl-0 pl-lg-3">				
						<ul class="letters">
						<?php foreach ($keys as $key){ ?>
							<li><a href="#<?php echo($key) ?>"><?php echo strtoupper($key) ?></a></li>
						<?php } ?>
						</ul>
				</div>
					<div class="col-10 col-lg-9">	
						<div class="contieneGlosario">
							<div class="glosario ">
								 <ul class="blanco">
								 <?php foreach ($keys as $key){ ?>
									<li><h3 id="<?php echo($key) ?>"><?php echo strtoupper($key) ?></h3></li>
									<?php foreach ($letras[$key] as $letra){ ?>
									<li>
										<h4><?php echo($letra['title']); ?></h4>
										<p><?php echo($letra['content']); ?></p>
									</li>
									<?php } } ?>
								</ul>
							</div>	
						</div>	
						
					</div>
				</div>
      </div>
			
	</section> 
 
  <?php include_once('menuBottom.php'); ?>

  <?php get_footer(); ?>
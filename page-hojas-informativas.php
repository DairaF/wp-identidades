<?php get_header(); ?>


      <section class="bggradC gradAnimado intro pushBottom">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">				
						<h1 class="text-left text-lg-center"><?php the_title(); ?></h1>
					</div>
				</div>
      </div>
			
	</section>
    		
	<section class="bgCelOsc pb-5 intro border-b-b px-xl-5">
		<div class="container-fluid negativo">
			<div class="row justify-content-center"> 
				<?php 
					$loop = new WP_Query( array( 
						'post_type' => 'hojas',
						'meta_key' => 'hoja_n',
						'orderby' => 'meta_value', 
						'order' =>'ASC', 
						'posts_per_page' => 10 ) ); 
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<!-- CARD -->
				<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
				<a href="<?php the_permalink() ?>" class="card" style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
					<div class="card-body">
					<h4 class="card-title mb-3  d-block"><?php the_title(); ?></h4>
						<div class="excerpt"> <?php echo( substr(get_field('abstract'), 0, 150)); ?>[...] </div>
					<div class="d-flex align-items-center justify-content-between">
						<p class="cardAuthor" href="">Por <?php the_field('autxr1'); if(get_field('autxr2')){ echo(', ');the_field('autxr2');} ?></p>
						<!-- <p class="cardDate mb-0"><?php /*the_time('F j, Y');*/ ?></p> -->
					</div>
					</div>
				</a>					
				</div>
				<!-- /CARD -->
				<?php endwhile; ?>
				
			</div>
		</div>
	</section>

	<?php include_once('menuBottom.php'); ?>

<?php get_footer(); ?>
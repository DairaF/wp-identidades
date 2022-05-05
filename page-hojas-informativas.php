<?php get_header(); ?>
<?php $tipoPost='jurisprudencia' ?>
<?php include_once('top-filtro-tags.php'); ?>


      <section class="bggradC gradAnimado intro pushBottom">
			<div class="">
				<div class="row">
					<div class="col-12 pt-5">				
						<h1 class="text-left text-lg-center"><?php the_title(); ?></h1>
					</div>
				</div>
				<?php include_once('tags-bar.php'); ?>
      </div>
			
	</section>
    		
	<section class="bgCelOsc pb-5 intro border-b-b px-xl-5">
		<div class="container-fluid negativo">
			<div class="row justify-content-center"> 
				<?php 
					$loop = new WP_Query( array( 'post_type' => 'hojas', 'posts_per_page' => 10 ) ); 
					while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<!-- CARD -->
				<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
				<a href="<?php the_permalink() ?>" target="blank" class="card" style="background-image:url('uploads/cards/1.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
					<div class="card-body">
					<h4 class="card-title mb-3 h4 d-block"><?php the_title(); ?></h4>
						<div class="excerpt"> <?php the_excerpt() ?> </div>
					<div class="d-flex align-items-center justify-content-between">
						<p class="cardAuthor" href="">Por <?php $autores = get_post_meta( get_the_ID(), 'autor', true); echo($autores) ?></p>
						<p class="cardDate mb-0"><?php the_time('F j, Y'); ?></p>
					</div>
					</div>
				</a>					
				</div>
				<!-- /CARD -->
				<?php endwhile; ?>
				
			</div>
		</div>
	</section>
		<!--------------- DE TAGS ------------------------------>		
<?php  
        $url=$_SERVER['REQUEST_URI'];
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $selectedTag = $params; 
?>
<section class="bgCelOsc gradAnimado py-5 border-b-b px-xl-5 overHide">
		<div class="container-fluid  ">
			<div class="row">

            <div class="c-relacionadas">
        <?php
        $ok = false; 
        if ($selectedTag){
            $loop = new WP_Query( array( 
                    'post_type' => 'hojas',
                    'tag' => $selectedTag,
                    'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
            $loop = new WP_Query( array('post_type' => 'hojas'));
            $ok=true;
          }
          if($loop->have_posts() && $ok == true){
          ?>
          <div class="col-12">
            <h2 class="text-left text-lg-center mb-5"><?php foreach ($params as $param) { echo (ucwords($param)); } ?></h2>			
          </div>
          <?php
          }
          $minTitle = strtolower(get_the_title());
          $minSearch = strtolower($search);
          while ( $loop->have_posts() && $ok == true ) : $loop->the_post(); if ($search == null || str_contains($minTitle,$minSearch)): ?>
    <!-- CARD -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
          <a href="<?php the_permalink() ?> " target="blank" class="card" 
            style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-3 d-block"><?php the_title() ?></h4>
              </p>
              <div class="d-flex align-items-center justify-content-between">
                <p class="cardTag"><?php $categories = get_the_category();
                if ($categories) {
                  foreach($categories as $cat) {
                    echo ($cat->name);
                  }
                } ?></p>
                <p class="cardDate mb-0"><?php the_date() ?></p>
              </div>
            </div>
          </a>					
        </div>
    <!-- /CARD -->

    <?php endif; endwhile; ?>
 </div>
			</div>
		</div>
	</section>

	<?php include_once('menuBottom.php'); ?>

<?php get_footer(); ?>
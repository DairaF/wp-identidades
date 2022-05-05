<?php get_header(); ?>
<?php $tipoPost='jurisprudencia' ?>
<?php include_once('top-filtro-tags.php'); ?>
<section class="bggradLila gradAnimado intro pushBottom">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">				
						<h1 class="text-left text-lg-center">Experiencia normativa y práctica</h1>
					</div>
				</div>
				
				<?php include_once('tags-bar.php'); ?>
      </div>
			
	</section>
	
	<section class="bgLilaOsc pb-5 intro border-b-b px-xl-5">
		<div class="container-fluid negativo">
			<div class="row justify-content-center"> 

				<!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">				
          <a href="http://identidadesinformadas.fund.ar/identidadesdos/normativas/" class="card card-experiencias" style="background-image:url('uploads/cards/2.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-0 h4 d-block">Normativa</h4>
            </div>
          </a>					
        </div>
				<!-- /CARD --> 
				
				<!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
          <a href="http://identidadesinformadas.fund.ar/identidadesdos/jurisprudencias/" class="card card-experiencias" style="background-image:url('uploads/cards/1.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-0 h4 d-block">Jurisprudencia</h4>
            </div>
          </a>					
        </div>
				<!-- /CARD -->
				
				<!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">				
          <a href="http://identidadesinformadas.fund.ar/identidadesdos/aplicaciones-exitosas/" class="card card-experiencias" style="background-image:url('uploads/cards/2.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-0 h4 d-block">Aplicaciones exitosas</h4>
            </div>
          </a>					
        </div>
				<!-- /CARD --> 		
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
<section class="bggradLila gradAnimado py-5 border-b-b px-xl-5 overHide">
		<div class="container-fluid  ">
			<div class="row">

            <div class="c-relacionadas">
        <?php
        $ok = false; 
		$loop = new WP_Query( array('post_type' =>  array('normativa', 'jurisprudencia','aplicacion')));
        if ($selectedTag){
            $loop = new WP_Query( array( 
                    'post_type' => 'jurisprudencia',
                    'tag' => $selectedTag,
                    'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
			$loop = new WP_Query( array('post_type' =>  array('normativa', 'jurisprudencia','aplicacion')));            $ok=true;
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

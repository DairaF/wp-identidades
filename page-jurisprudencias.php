<?php get_header(); ?>
<?php $tipoPost='jurisprudencia' ?>
<?php include_once('top-filtro-tags.php'); ?>
	<section class="bggradRosa gradAnimado intro">
	
			<div class="container">
				<div class="row justify-content-lg-center">
					<div class="col-12 col-lg-10 col-xl-8 pt-4 pt-lg-5">				
 						<h1 class="text-left text-lg-center">Jurisprudencia</h1>
						<p class="text-left text-lg-center ">Fallos que avanzan en la garantía de derechos de las personas travestis, trans y no binarias. Selección sobre la base compilada por la Secretaría General de Capacitación y Jurisprudencia del Ministerio Público de la Defensa de la Nación. </p>
					</div>
				</div>
				<div class="row justify-content-lg-center">

          <div class="col-12 col-lg-8 col-xl-6 pt-4 pt-lg-5">				
            <ul class="tagContainer justify-content-lg-center">
              <li class="tag"><a id="identificacion" onClick="setTag('identificacion')" href="">Identificación</a></li>
              <li class="tag"><a id="salud" onClick="setTag('salud')" href="">Salud integral</a></li>
              <li class="tag"><a id="reparacion" onClick="setTag('reparacion')" href="">Reparación</a></li>
              <li class="tag"><a id="participacion" onClick="setTag('participacion')" href="">Participación</a></li>
              <li class="tag"><a id="violencias" onClick="setTag('violencias')" href="">Violencias</a></li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-8 col-xl-6 pb-5">	
            <form name="searchForm" action="" method="post">
              <div class="buscar-group">
                <input name="searchTerm" type="text" class="form-control formBuscar" placeholder="Buscar">
                  <button type="submit" class="btnBuscar" type="button">
                    <i class="fa fa-search"></i>
                  </button>
              </div>
            </form>	
          </div>
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
<section class="bggradRosa gradAnimado py-5 border-b-b px-xl-5 overHide">
		<div class="container-fluid  ">
			<div class="row">

             
        <?php
        $loop = new WP_Query( array('post_type' => 'aplicacion'));
        $ok = false; 
        if ($selectedTag){
            $loop = new WP_Query( array( 
                    'post_type' => 'jurisprudencia',
                    'tag' => $selectedTag,
                    'posts_per_page' => 1000 ,
				'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
            $loop = new WP_Query( array('post_type' => 'jurisprudencia'));
            $ok=true;
          }
          if($loop->have_posts() && $ok == true){
          ?>
          <div class="col-12">
            <h2 class="text-left text-lg-center mb-5">Fallos sobre: <?php foreach ($params as $param) { echo (ucwords($param)); } ?></h2>			
          </div>
					<div class="c-relacionadas">
          <?php
          }
          $minTitle = strtolower(get_the_title());
          $minSearch = strtolower($search);
          while ( $loop->have_posts() && $ok == true ) : $loop->the_post(); if ($search == null || str_contains($minTitle,$minSearch)): ?>
    <!-- CARD -->
    <div class="">
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
	<section class="bgRosaOsc py-5 border-b-b px-xl-5">
		<div class="container-fluid">
		<div class="row">
    <!-- ULTIMAS -->
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'jurisprudencia',  'posts_per_page' => 1000 ,
				'orderby'=> 'post_date' ) ); 

    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
          <a href="<?php the_permalink() ?> "  class="card" 
            style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-3 d-block"><?php the_title() ?></h4>
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
    
    <?php endwhile; ?>
<!-- ULTIMAS -->

			</div>
		</div>
	</section> 
 

<?php include_once('menuBottom.php'); ?>

<?php get_footer(); ?>
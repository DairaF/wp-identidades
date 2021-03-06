<?php get_header(); ?>
<?php $tipoPost='actualidad' ?>
<?php include_once('top-filtro-tags.php'); ?>
	<section class="bggradRosa gradAnimado intro">
	
			<div class="container">
				<div class="row justify-content-lg-center">
					<div class="col-12 col-lg-10 col-xl-8 pt-4 pt-lg-5">				
 						<h1 class="text-left text-lg-center">Actualidad</h1>
						<p class="text-left text-lg-center ">Noticias, novedades y notas relacionadas con el acceso a derechos de la población TTNB.</p>
					</div>
				</div>
				<?php include_once('tags-bar.php'); ?>
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
                    'post_type' => 'actualidad',
                    'tag' => $selectedTag,
                    'posts_per_page' => 1000 ,
				'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
            $loop = new WP_Query( array('post_type' => 'actualidad'));
            $ok=true;
          }
          if($loop->have_posts() && $ok == true){
          ?>
          <div class="col-12">
            <h2 class="text-left text-lg-center mb-5">Actualidad sobre: <?php echo($search); ?> <?php if (sizeof($selectedTag) >= 2 ){
              $size = sizeof($selectedTag);
              $counter = 0;
              foreach ($params as $param) {
                $counter ++;
                if($counter == $size){
                echo (ucwords($param) );}else{ echo (ucwords($param). " - ");} } }
                else{ 
                  foreach ($params as $param) { 
                    echo (ucwords($param));}} ?></h2>			
          </div>
					 <div class="c-relacionadas">
          <?php
          }
          
          $minSearch = strtolower($search);
          while ( $loop->have_posts() && $ok == true ) : $loop->the_post(); $minTitle = strtolower(get_the_title()); if ($search == null || str_contains($minTitle,$minSearch)): ?>
    <!-- CARD -->
    <div class="">
          <a href="<?php the_field('link_nota') ?> " target="_blank" class="card" 
            style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-3 d-block"><?php the_title() ?></h4>
              </p>
              <div class="d-flex align-items-center justify-content-between">
                <p class="cardTag rosaOsc"><?php $categories = get_the_category();
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
		<div class="container-fluid  ">
		<!-- 	<div class="row">
				<div class="col-12">
					<h2 class="text-left text-lg-center mb-5">Últimas actualidades</h2>			
				</div>
			</div> -->
		<div class="row justify-content-center"> 

    <!-- ULTIMAS -->
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'actualidad',  'posts_per_page' => 1000 ,
				'orderby'=> 'post_date' ) ); 

    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <!-- CARD -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 px-xl-4">
          <a target="_blank" href="<?php the_field('link_nota') ?> " class="card" 
            style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body">
              <h4 class="card-title mb-3 d-block"><?php the_title() ?></h4>
              <div class="d-flex align-items-center justify-content-between">
                <p class="cardTag rosaOsc"><?php $categories = get_the_category();
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
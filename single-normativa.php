<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<section class="intro bggradC gradAnimado ">	
    <div class="navigation-top bgCelOsc py-4 px-3 d-block d-lg-none">
        <a href="" class="">
            <h6 class=""><a class="btn-return" href="https://identidadesinformadas.fund.ar/experiencias-comparadas/normativas/" class="">Normativas</a></h6>
            <h6 class="mb-0"><strong><?php the_title(); ?></strong></h6>
        </a>
    </div> 
                                  

  <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-10 col-xl-8 mb-4">
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
                    <h4 class="d-none d-lg-block text-center" ><a href="">Normativas</a></h4>
                    <h1 class="text-left text-lg-center"><?php the_title() ?></h1>
                </div>
    </div>
  </div>
</section> 
    
<section class="bgCelOsc py-md-5 border-b-w ">
  <div class="container">
    <div class="row justify-content-between">					
                
	    <div class="col-12 col-lg-8 order-2 order-lg-1 dark-mobile py-5 py-md-0">
        <h6><a href="<?php the_field('link') ?>">Ver norma +</a></h6>
            <p><?php the_content() ?></p>
      </div>

    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php include_once('relacionadas.php'); ?>
<?php include_once('menuBottom.php'); ?>
  <?php get_footer(); ?>
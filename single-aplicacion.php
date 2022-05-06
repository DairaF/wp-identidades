<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
//variables custom
$abstract = get_post_meta( get_the_ID(), 'abstract', true);
?>
<section class="intro bggradC gradAnimado ">	
    <div class="navigation-top bgCelOsc py-4 px-3 d-block d-lg-none">
        <a href="" class="">
            <h6 class="">Aplicaciones Exitosas</h6>
            <h6 class="mb-0"><strong><?php the_title(); ?></strong></h6>
        </a>
    </div> 
                                  

  <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-10 col-xl-8 mb-4">
                    <ul class="tagContainer justify-content-lg-center">
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
                    </ul>
                </div>
                <div class="col-12 col-lg-10 col-xl-8 mb-4">
                    <h1 class="text-left text-lg-center"><?php the_title() ?></h1>
                    <h4 class="d-none d-lg-block text-center" >Aplicaciones Exitosas</h4>
                </div>
    </div>
  </div>
</section> 
    
<section class="bgCelOsc py-md-5 border-b-w ">
  <div class="container">
    <div class="row justify-content-between">					
                
	    <div class="col-12 col-lg-9 col-xl-9 order-2 order-lg-1 dark-mobile py-5 px-lg-3 mx-lg-3 py-md-0">
        <h3 class="mb-4">Abstract</h3>
          <p><?php echo($abstract); ?>
          </p>
      </div>
      <div class="col-12 col-lg-9 col-xl-9 order-2 order-lg-1 dark-mobile py-5 px-lg-3 mx-lg-3 py-md-0">
        <h3 class="mb-4"><?php the_title() ?></h3>
          </p>
							<p><?php the_content() ?></p>
      </div>

    </div>
  </div>
</section>

<section class="bgW pt-0 pt-lg-5 pb-0 pb-lg-5">			
        <div class="container ">
            <div class="row">   
    			<div class="col-12 col-lg-9 col-xl-9 offset-xl-1 px-0 px-lg-3 mx-0 mx-lg-3">
					<div class="tab_container tabs_light">								
						<div id="tab1" class="tab_content">
							<p><?php the_content() ?></p>
						</div>
					</div>
            	</div>
            </div>
  		</div>
</section> 

<?php endwhile; endif; ?>

<?php include_once('relacionadas.php'); ?>
<?php include_once('menuBottom.php'); ?>
  <?php get_footer(); ?>
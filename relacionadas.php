      <?php 
    $posttags = get_the_tags();
    $slugs=array();
    if ($posttags) {
      foreach($posttags as $tag) {
        $slug = $tag->slug . '';
        array_push($slugs, $slug);
      }
    }
    $selectedTag = $slugs;
    $loop = new WP_Query( array( 
              'post_type' => array('actualidad','normativa','jurisprudencia','aplicacion'), 
                
                'tag' => $selectedTag,
                'posts_per_page' => 1000 ,
				'orderby' => 'tag', 
                'order' => 'ASC'
                ) ); 

        if($selectedTag != null): ?>
<section class="bggrad4col py-5 border-b-b px-xl-5 border-t-b overHide">
		<div class="container-fluid  ">
			<div class="row">
				<div class="col-12">
					<h2 class="text-left text-lg-center mb-5">Recursos relacionados</h2>			
				</div>
		<div class="c-relacionadas">

      <?php  while ( $loop->have_posts() ) : $loop->the_post();?>
  <!-- CARD -->
  <div class="">
          <?php $categories = get_the_category(); 
            $categ; 
            $categName;
            if ($categories) {
              foreach($categories as $cat) {
                $categName = $cat->name;
                $categ = $cat->slug;
              }
            }
          ?>
          <a href="<?php if($categ='actualidad'){the_field('link_nota');}else{the_permalink();}?>" target="blank" class="card" style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body <?php 
                if($categ='hoja'){ echo('hoja');}
                else if($categ='aplicacion'){ echo('aplicacion');} 
                else if($categ='jurisprudencia'){ echo('jurisprudencia');} 
                else if($categ='normativa'){ echo('normativa');} 
                else if($categ='actualidad'){ echo('actualidad');} 
             ?>">
              <h4 class="card-title mb-3 d-block"><?php the_title(); ?></h4>
              <div class="d-flex align-items-center justify-content-between">
                <p class="cardTag"><?php
                echo($categName) ?></p>
                <p class="cardDate mb-0"><?php the_date(); ?></p>
              </div>
            </div>
          </a>					
        </div>
      <!-- /CARD -->
		
    <?php endwhile; ?>
    </div>
			</div>
		</div>
	</section>
    <?php endif; ?>

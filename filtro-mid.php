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

            <div class="c-relacionadas">
        <?php
        $ok = false; 
        if ($selectedTag){
            $loop = new WP_Query( array( 
                    'post_type' => $tipoPost,
                    'tag' => $selectedTag,
                    'posts_per_page' => 1000 ,
				'orderby' => 'tag', 
                    'order' => 'ASC'
                    ) ); 
            $ok=true;
          }
          else if($search){
            $loop = new WP_Query( array('post_type' => $tipoPost));
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
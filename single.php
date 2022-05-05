<?php get_header(); ?>

      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">
          
          

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Entrada -->
            <!-- NORMATIVA -->
              <div class="card-body">
                <h1><?php the_title(); ?></h1>

                <h2><?php the_title(); ?></h2>
                <p class="small mb-0">
                  <?php
                  $fecha_normativa = get_post_meta( get_the_ID(), 'fecha_normativa', true);
                  echo($fecha_normativa('Y'));
                  ?>
                </p>
                <?php the_content(); ?>
              </div>
            <!-- NORMATIVA -->
          <!-- Entrada -->
          <?php endwhile; endif; ?>

        </div>
        <!-- Entradas -->

        <!-- Aside -->
        <?php get_sidebar(); ?>
        <!-- Aside -->
      </div>
    </div>
    <!-- blog -->


    <?php get_footer(); ?>

<?php

// LOOP
$loop = new WP_Query( array( 
    'post_type' => array('post','post'), 
    'posts_per_page' => 10,
    'tag' => 'tag',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
) ); 

while ( $loop->have_posts() ) : $loop->the_post(); endwhile; 
 
//POSTEOS
the_permalink()
the_title()
the_content()
the_category(' / ')
the_tags('', ' / ', '')

the_field('fieldCustom')

if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-thumbnails', array(
      'class' => 'img-fluid mb-3'
    ));
}

//CUSTOM FIELD
get_post_meta( get_the_ID(), 'field_name', true)

//EXCLUIR RECOMENDACION POSTS
if ( function_exists( 'echo_crp' ) ) { echo_crp(); } 



 ?>
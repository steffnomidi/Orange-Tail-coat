<?php get_header(); ?>
<div class="blog">
  <?php


  //Protect against arbitrary paged values
  $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

    /* for pagonation */
  $args = array(
  	'posts_per_page' => 1,
  	'category_name' => 'blog',
  	'paged' => $paged,
  );
  $the_query = new WP_Query( $args );



  if (have_posts()):
     ?>
        <div class="container">

     <?php
    $count_post = count($the_query->posts);
    $iter = 1;
    while ($the_query->have_posts()) : $the_query->the_post();
    $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
    $feat_image_url = ( $feat_image[0] ? $feat_image[0] : "http://lorempixel.com/908/455/abstract/" );
    if ( $feat_image_url ) {
      $color = (get_field('title-content-color') ? get_field('title-content-color') : '#fff');
    } else {
      $color = '#222';
    }
    /* if shadow */
    if (get_field('shadow')) { $shadow_class = ' shadow'; } else {$shadow_class = "";}
      ?>
          <div class="blog-item post">
            <div class="image" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
            <div class="content">
              <a class="fullanchor" href="<?php the_permalink(); ?>"></a>
              <div class="child<?php echo $shadow_class; ?>">
                <a class="fullanchor" href="<?php the_permalink(); ?>"></a>
                <h2 style="color: <?php echo $color; ?>;"><?php the_title(); ?></h2>
                <a class="button-look" href="<?php the_permalink(); ?>">Просмотреть</a>
              </div>
              <div class="helper"></div>
            </div>
          </div>

      <?php
      if( $count_post != $iter++ ) {
         ?>
          <hr />
         <?php
      }
    endwhile;
    ?>


   </div><!-- /.container-->


</div>
     <?php


         /* pagination */
          $big = 999999999; // need an unlikely integer

          $paginate = paginate_links( array(
          	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          	'format' => '?paged=%#%',
          	'current' => max( 1, get_query_var('paged') ),
          	'total' => $the_query->max_num_pages,
           'type' => 'array'
          ) );

         $first_navigation = $paginate[0];
         $last_navigate = $paginate[count($paginate)-1];

          //echo $first_navigation[1] . ' - ' . $last_navigate[1];

          if($first_navigation[1] == 's') { array_unshift($paginate, '<span class="prev page-numbers"></span>'); }
          if($last_navigate[1] == 's') { array_push($paginate, '<span class="next page-numbers"></span>'); }
          //print_r($paginate);
          foreach($paginate as $nav_element):
            echo $nav_element;
          endforeach;


  endif;
  ?>

  <?php get_footer(); ?>

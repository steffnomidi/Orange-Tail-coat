<?php get_header(); ?>
<div class="blog">
  <?php
  if (have_posts()):
     ?>

        <div class="container">

     <?php
    $count_post = count($posts);
    $iter = 1;
    while (have_posts()) : the_post();
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

     <?php
  endif;
  ?>
</div>
<?php get_footer(); ?>

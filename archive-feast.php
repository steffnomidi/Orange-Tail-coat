<?php get_header(); ?>
<div class="grid">
  <?php

  /* calculate approximation for last grid items */

  $countposts = count($posts);
  $grid_posts_2 = floor($countposts/2)*2;
  $last_posts_2 = $countposts - $grid_posts_2;
  $grid_posts_3 = floor($countposts/3)*3;
  $last_posts_3 = $countposts - $grid_posts_3;
  $grid_posts_5 = floor($countposts/5)*5;
  $last_posts_5 = $countposts - $grid_posts_5;

  $iterpostcount = 0;

  $last_class_3 = $last_class_5 = " def";


  while (have_posts()) : the_post();
    $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
    $feat_image_url = $feat_image[0];

    $iterpostcount++;

    if($iterpostcount > $grid_posts_2) {
      if ( $last_posts_2 == 1 ) {$last_class_3 = ' width3_100'; }
    }

    if($iterpostcount > $grid_posts_3) {
      if ( $last_posts_3 == 1 ) {$last_class_3 = ' width3_100'; }
      if ( $last_posts_3 == 2 ) {$last_class_3 = ' width3_50'; }
    }

    if($iterpostcount > $grid_posts_5) {
      if ( $last_posts_5 == 1) {$last_class_3=''; $last_class_5 = ' width5_100'; }
      if ( $last_posts_5 == 3 ) {$last_class_3=''; $last_class_5 = ' width5_33'; }
      if ( $last_posts_5 == 4 ) {$last_class_3=''; $last_class_5 = ' width5_50'; }
    }

    if ($countposts == 1) {$last_class_3=' width3_100'; $last_class_5 = ' width5_100';}
    if ($countposts == 2) {$last_class_3=' width3_50'; $last_class_5 = ' width5_50';}
    if ($countposts == 3 and $iterpostcount == 1 ) {$last_class_3=' width3_100'; $last_class_5 = ' width5_100';}
    if ($countposts == 3 and $iterpostcount != 1 ) {$last_class_3=' width3_50'; $last_class_5 = ' width5_50';}
    if ($countposts == 4) {$last_class_3=' width3_50'; $last_class_5 = ' width5_50';}



    ?>
      <div class="grid-item feast post<?php echo $last_class_3.$last_class_5 ?>">
        <div class="image" style="background-image: url(<?php echo $feat_image_url; ?>)"></div>
        <div class="content">
          <a class="fullanchor" href="<?php the_permalink(); ?>"></a>
          <div class="child">
            <a class="fullanchor" href="<?php the_permalink(); ?>"></a>
            <h2><?php the_title(); ?></h2>
            <a class="button-look" href="<?php the_permalink(); ?>">Просмотреть</a>
          </div>
          <div class="helper"></div>
        </div>
      </div>
    <?php
  endwhile;
  ?>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="grid">
  <?php
  while (have_posts()) : the_post();
  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
  $feat_image_url = $feat_image[0];

    ?>
      <div class="grid-item feast post">
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

<?php get_header(); $frontid = get_option('page_on_front');?>
	<section>
		<div class="container">


			<div class="about text-center  ">

				<h2><?php the_title() ?></h2>
        <?php the_content(); ?>

				<div class="row row-inline">
          <?php
          query_posts( array(
            'post_type' => 'person',
            'posts_per_page' => -1
          ));
          while (have_posts()) : the_post();
            $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
            $feat_image_url = $feat_image[0];
            ?>
					<div class="col-sm-4 text-center person">

            <div class="image" style="background-image: url(<?php echo $feat_image_url; ?>)">
              <div class="content">

                <div class="child">
                  <div class="social-contacts">
                    <a href="<?php the_field('vk_link'); ?>" target="_blank" class="vk social"></a>
                    <a href="<?php the_field('fb_link'); ?>" target="_blank" class="fb social"></a>
                    <a href="<?php the_field('ig_link'); ?>" target="_blank" class="ig social"></a>
                  </div>
                </div>
                <div class="helper"></div>

              </div>
            </div>


            <div class="advance">
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
            </div>

					</div>
            <?php
          endwhile;
          ?>

				</div>

      </div>




		</div>
	</section>

<?php get_footer(); ?>

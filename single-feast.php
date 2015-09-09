<?php
	get_header();
	the_post();
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
	<section>

		<div class="title-container" style="background-image: url('<?php echo $feat_image_url; ?>');">
			<div class="container">
				<div class="trunk feast">
					<h1 class="child title<?php echo $shadow_class; ?>" style="color: <?php echo $color; ?>;">

						<?php if (get_field('feast_date')): ?>
							<span class="date" style="color: <?php echo $color; ?>;"><?php echo get_field('feast_date'); ?></span>
						<?php endif; ?>

						<?php the_title(); ?>

					</h1>
					<div class="helper"></div>
				</div>
			</div>
		</div>

		<div class="delimiter"></div>

		<div class="container">
			<div class="trunk feast">
	      <?php the_content(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>

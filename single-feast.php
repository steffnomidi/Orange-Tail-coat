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
	</section>


	<section>
		<div class="container">
			<div class="trunk feast">
	      <?php the_content(); ?>
			</div>
		</div>
	</section>

	<section>
		<nav>
			<div class="container">
				<div class="row feast_menu">

				<div class="next-post-container col-xs-4">
					<?php previous_post_link( '%link', '<i class="feast_menu_arrow_left">Предыдущий праздник</i>' ) ?>

				</div>



				<div class="links col-xs-4 text-center">
			<?php

			$feasts = get_posts(array(
				'post_type' => 'feast',
				'fields' => 'ids',
				'posts_per_page' => -1
			));
			$feasts_count = count($feasts);
			$current_feast_position = array_search( $post->ID, $feasts );
			$current_feast_position = $current_feast_position+1;
			foreach($feasts as $key=>$feast):
				if(isset($counter)) {$counter++;} else {$counter = 1;}
				//echo "\n<!-- counter: ".$counter."-->";

				if ( $counter == $current_feast_position )
				{ echo '<i id="feast-'.$feast.'" class="current" > '.$counter." </i>"; }
				if (
					($counter == 1 and $current_feast_position != 1)
					or $counter == $current_feast_position+1
					or $counter == $current_feast_position-1
					or ($counter == $feasts_count and $current_feast_position != $feasts_count)
					) { echo '<a href="'.get_permalink($feast).'"><i id="feast-'.$feast.'"> '.$counter." </i></a>"; }

				if (
				   $counter == $current_feast_position+2
				or $counter == $current_feast_position-2
				) {echo '<i> ... </i>'; }

			endforeach;
			 ?>
		 		</div>


				<div class="next-post-container col-xs-4 text-right">
					<?php next_post_link( '%link', '<i class="feast_menu_arrow_right">Следующий праздник</i>' ) ?>
				</div>

		 		</div>
		 	</div>

		</nav>
	</section>
<?php get_footer(); ?>

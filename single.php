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
				<div class="trunk">
					<h1 class="child title<?php echo $shadow_class; ?>" style="color: <?php echo $color; ?>;">

						<?php the_title(); ?>

						<span class="subtitle" style="color: <?php echo $color; ?>;"><?php echo $post->post_excerpt; ?></span>
					</h1>
					<div class="helper"></div>
				</div>
			</div>
		</div>

		<div class="delimiter"></div>

		<div class="container">
			<div class="trunk">

	      <?php the_content(); ?>

				<!-- Yandex Share -->
				<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="large" data-yashareQuickServices="vkontakte,facebook,gplus" data-yashareTheme="counter"></div>

			</div>
		</div>

		<?php
			$getposts = get_posts('category=blog');
			//if (count($getposts) > 5):
				?>

		<div class="delimiter"></div>

		<div class="container">
			<div class="also">

						<?php
						foreach($getposts as $one_post):
							if($post->ID != $one_post->ID ):

						?>
						<div class="item">
							<div class="child" style="width: 95%; ">
			      		<a href="/blog/<?php echo $one_post->post_name; ?>" class="title"><?php echo $one_post->post_title; ?></a>
							</div>
							<div class="helper"></div>
						</div>
						<?php
							endif; // ID != ID
						endforeach;
						?>
			</div>
		</div>

				<?php
			//endif; // count posts
		?>


	</section>
<?php get_footer(); ?>

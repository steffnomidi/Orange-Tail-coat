<?php get_header(); ?>
	<section>
		<?php if( get_field('superhead') ) { ?>superhead<?php } ?>
		<div class="container trunk">
			<h1><?php the_post(); the_title(); ?></h1>
      <?php the_content(); ?>
		</div>
	</section>
<?php get_footer(); ?>

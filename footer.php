<!-- modal Burger Menu -->
<div class="modal fade" id="burgerMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
				<span class="dismiss" data-dismiss="modal"></span>
				<?php wp_nav_menu( array(
				              'menu_class' => 'menu',
				              'menu' => 'Главное меню',
				              )
				             ); ?>
	    </div>
			<div class="closeblock" data-dismiss="modal">Закрыть</div>
    </div>
  </div>
</div>

<?php  $frontid = get_option('page_on_front'); ?>
		<div class="empty"></div>
	</div>
	<div class="footer">
		<footer>
			<div class="container">

				<div class="row hidden-xs">
					<div class="col-sm-4">© <?php bloginfo( 'name' ); ?>, <?php echo date('Y'); ?>.</div>
					<div class="col-sm-4 text-center social-links">
						<a href="<?php the_field('vk_link', $frontid); ?>"><i class="vk"></i></a>
						<a href="<?php the_field('fb_link', $frontid); ?>"><i class="fb"></i></a>
						<a href="<?php the_field('ig_link', $frontid); ?>"><i class="ig"></i></a>
					</div>
					<div class="col-sm-4 text-right made-with"><a href="http://in-cosmos.com/">Made with <i class="love"></i> in Cosmos</a></div>
				</div>

				<div class="row visible-xs">
					<!--div class="col-sm-12 text-center"><a href="/">© <?php bloginfo( 'name' ); ?>, <?php echo date('Y'); ?>.</a></div-->
					<div class="col-sm-12 text-center">
						<a href="<?php the_field('vk_link', $frontid); ?>"><i class="vk"></i></a>
						<a href="<?php the_field('fb_link', $frontid); ?>"><i class="fb"></i></a>
						<a href="<?php the_field('ig_link', $frontid); ?>"><i class="ig"></i></a>
					</div>
					<div class="col-sm-12 text-center made-with"><a href="http://in-cosmos.com/">Made with <i class="love"></i> in Cosmos</a></div>
				</div>

			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>


  </body>
</html>

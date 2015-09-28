<?php get_header(); $frontid = get_option('page_on_front');?>
	<section>
		<div class="container">


			<div class="contacts">
				<div class="row">

					<div class="col-sm-6 text-center left contact-form">
						<h2>Оставьте заявку<br />и мы сами вам перезвоним</h2>
						<?php echo do_shortcode( '[contact-form-7 id="4" title="Форма заказа обратной связи"]' ) ?>
					</div>

					<div class="col-sm-6 text-center contact-data">
						<div class="container-fluid">
							<h2>Свяжитесь с нами<br />удобным для вас способом</h2>
							<table class="table">
								<tr>

									<td class="phone">
										<a href="tel:<?php echo get_field('phone_link', $frontid); ?>">
											<?php echo get_field('phone_text', $frontid); ?>
										</a>
									</td>
								</tr>
								<tr>
									<td class="phone">
										<a href="tel:<?php echo get_field('phone_link_2', $frontid); ?>">
											<?php echo get_field('phone_text_2', $frontid); ?>
										</a>
									</td>
								</tr>
								<tr>
									<td class="email">
										<a href="mailto:<?php echo get_field('email', $frontid); ?>">
											<?php echo get_field('email', $frontid); ?>
										</a>
									</td>
								</tr>
								<tr>
									<td class="time">
										<?php echo get_field('graphic', $frontid); ?>
									</td>

								</tr>
							</table>
						</div>
					</div>

				</div>
			</div>



      <?php the_content(); ?>
		</div>
	</section>


	<!-- Form Ok modal -->
	<div class="modal fade" id="mainFormOk" tabindex="-1" role="dialog" aria-labelledby="mainFormOkLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
				<div class="closeblock" data-dismiss="modal">Закрыть</div>

	      <div class="modal-body">
					<p>Поздравляем!<br />Мы скоро вам перезвоним.</p>
	      </div>

	    </div>
	  </div>
	</div>
<?php get_footer(); ?>

<?php get_header('mainpage'); ?>
<div class="rasp300"></div>
<div class="middleblock">
	<div class="child">

		<section>
			<div class="">

				<div class="mainlogo"></div>
				<p>Организуем яркие праздники для ярких личностей!</p>
				<button class="playbutton" data-toggle="modal" data-target="#mainVideo">смотреть видео</button>

			</div>
		</section>

	</div>
	<div class="helper"></div>
</div>

<!-- Modals -->

<!-- Videoframe -->
<div class="modal fade" id="mainVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class="closeblock" data-dismiss="modal">Закрыть</div>

      <div class="modal-body videoframe">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/y95PhuJoj9I" frameborder="0" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>

<!-- Form Recall -->
<div class="modal fade" id="mainForm" tabindex="-1" role="dialog" aria-labelledby="mainFormLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
			<div class="closeblock" data-dismiss="modal">Закрыть</div>

      <div class="modal-body">
				<p>Оставьте заявку<br />и мы сами вам перезвоним</p>
				<?php echo do_shortcode('[contact-form-7 id="4" title="Форма заказа обратной связи"]'); ?>
      </div>

    </div>
  </div>
</div>

<!-- Form Ok -->
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

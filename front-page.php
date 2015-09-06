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

<!-- Modal -->
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

<?php get_footer(); ?>

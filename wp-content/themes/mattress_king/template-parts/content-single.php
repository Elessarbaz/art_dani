<h2 class="uk-text-center"><?=get_the_title()?></h2>
<div class="catalog-page uk-container uk-container-center">


	<div class="uk-grid">

		<!--НАЧАЛО фотослайдер-->
		<div class="uk-width-medium-4-10 photo-section">
			<div id="slideshow" data-uk-slideshow="{autoplayInterval:1000}">

				<div class="uk-slidenav-position uk-hidden-small">
					<ul class="uk-slideshow">
						<li><img src="<?=get_the_post_thumbnail_url()?>"></li>
						<?php foreach (pp_gallery_get() as $image): ?>
						<li><img src="<?=$image->url?>"></li>
						<?php endforeach; ?>
					</ul>
					<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
					<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				</div>
				<div id="slider" class="uk-slidenav-position" data-uk-slider="{center:true}">
					<div class="uk-slider-container">
						<ul class="uk-slider uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-grid-width-small-1-2">
							<li data-uk-slideshow-item="0">
								<img src="<?=get_the_post_thumbnail_url()?>">
							</li>
							<?php foreach (pp_gallery_get() as $key => $image): ?>
							<li data-uk-slideshow-item="<?=$key+1?>">
								<img src="<?=$image->url?>">
							</li>
							<?php endforeach; ?>
						</ul>
						<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
						<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
					</div>
				</div>
			</div>

		</div>
		<!--КОНЕЦ фотослайдер-->

		<div class="uk-width-medium-6-10 text-section">
			<h3>Описание товара</h3>
			<p>
			<?=do_shortcode(get_the_excerpt())?>
			</p>

			<!--НАЧАЛО горизонтальная тень-->
			<div class="uk-text-center">
				<img src="<?php bloginfo('template_directory') ?>/public/img/catalog-shadow.png" alt="Тень">
			</div>
			<!--КОНЕЦ горизонтальная тень-->

			<div class="uk-text-center">
				<!--НАЧАЛО Кнопка скачать прайс-->
				<a download="" href="<?=get_field('price')?>" class="button">Скачать прайс</a>
				<!--КОНЕЦ Кнопка скачать прайс-->
			</div>

		</div>
	</div>

	<!--НАЧАЛО текст в нижней части-->
	<div class="text-section-bottom">
		<article>
			<?=do_shortcode(get_the_content('')); ?>
		</article>
	</div>
	<!--КОНЕЦ текст в нижней части-->

</div>
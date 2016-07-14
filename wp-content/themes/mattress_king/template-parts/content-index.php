<!--НАЧАЛО Главный раздел-->
<style>
	@media (min-width: 768px) {
		.main-section {
			background: 50% 0/cover url('<?=get_the_post_thumbnail_url()?>');
			min-height: 100vh;
		}
</style>
<div class="main-section">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2 slogan-container">
				<p class="slogan"><?=get_field('slogan',4)?></p>
			</div>
			<div class="uk-width-medium-1-2 form-container">
				<form class="blink-mailer" action="">
					<img src="<?php bloginfo('template_directory') ?>/public/img/home_mail.png" alt="Письмо">
					<h3>Напишите нам</h3>
					<input type="hidden" required="required" name="title" value="Обратная связь" >
					<input type="text" required="required" name="Имя" placeholder="Имя">
					<input type="tel" required="required" name="Телефон" placeholder="Телефон">
					<textarea name="Сообщение" id="msg" placeholder="Сообщение"></textarea>
					<input type="submit" value="Отправить">
				</form>
				<form class="success-mail" >
					<p class="success-mail-text" >

					</p>

				</form>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ Главный раздел-->

<!--НАЧАЛО about-->
<?php $about=get_post(31); ?>
<div class="about uk-container uk-container-center" id="about">
	<div>
		<!--<div class="uk-width-medium-6-10">
			<img src="<?/*=get_the_post_thumbnail_url($about->ID)*/?>" alt="Матрац">
		</div>
		<div class="uk-width-medium-4-10 uk-text-center">
			<h2><?/*=get_the_title($about->ID)*/?></h2>-->
			<article>
			<?= do_shortcode($about->post_content,true) ?>
			</article>
<!--		</div>-->
	</div>
</div>
<!--КОНЕЦ about-->

<!--НАЧАЛО advantages-->
<div class="advantages" id="advantages">
	<div class="uk-container uk-container-center">
		<h2 class="uk-text-center">Наши приемущества</h2>
		<p class="slogan"><?=get_field('slogan',4)?></p>

		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin>

			<?php
			$args=array('category_name'=>'advantages','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>6 );
			$posts=get_posts($args);
			foreach ($posts as $post):
				setup_postdata($post);
			?>
			<li>
				<img src="<?=get_the_post_thumbnail_url()?>" alt="<?=the_title()?>">
				<div>
					<h4><?=the_title()?></h4>
					<p><?=get_the_content('')?></p>
				</div>
			</li>
			<?php endforeach; wp_reset_query(); ?>
		</ul>
	</div>
</div>
<!--КОНЕЦ advantages-->
<?php $args=array('category_name'=>'promotions','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 );
$posts=get_posts($args);
if($posts):
?>
<!--НАЧАЛО promotions-->
<div class="promotions" id="promotions">
	<div class="uk-container uk-container-center">
		<div class="uk-slidenav-position" data-uk-slideshow>
			<ul class="uk-slideshow uk-overlay-active">
				<?php

				foreach ($posts as $post):
				setup_postdata($post);
				?>
				<li>
					<img src="<?=get_the_post_thumbnail_url()?>">
					<div class="uk-overlay-panel uk-overlay-background uk-overlay-right uk-overlay-slide-right uk-width-1-0 uk-width-medium-7-10 uk-width-large-4-10">
						<h3><?=the_title()?></h3>
						<div class="rectangle">
							<p class="uk-hidden-small">
								<?=get_the_content('')?>
							</p>
							<p class="small">Акция действительна до <?=get_field('end-date',get_the_ID())?></p>
							<p class="small"><a href="<?=get_permalink()?>">Подробнее</a></p>
						</div>
					</div>
				</li>
				<?php endforeach; wp_reset_query(); ?>

			</ul>
			<a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			<a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>
		</div>
	</div>
</div>
<!--КОНЕЦ promotions-->
<?php endif; ?>
<!--НАЧАЛО goods-->
<div class="goods" id="goods">
	<div class="uk-container uk-container-center">
		<h2>Продукция</h2>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
					<?php
					$args=array('category_name'=>'goods','order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 );
					$posts=get_posts($args);
					foreach ($posts as $post):
					setup_postdata($post);
					?>
					<li>
						<div class="border">
							<img src="<?=get_the_post_thumbnail_url()?>">
							<h3><?=get_the_title()?></h3>
							<p>
								<?=get_the_content('')?>
							</p>
							<p><a href="<?=get_permalink()?>">Подробнее</a></p>
						</div>
					</li>
					<?php endforeach; wp_reset_query(); ?>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
		</div>
		<a href="/goods/" class="go-to-catalog">Перейти в каталог</a>
	</div>
</div>
<!--КОНЕЦ goods-->

<!--НАЧАЛО catalog-->
<div id="catalog">
	<h2 class="uk-text-center">Каталог</h2>
	<?php $catalog=get_post(72); ?>
	<div class="catalog" style="background-image: url('<?=get_the_post_thumbnail_url(72)?>')">
		<div class="uk-container uk-container-center">
			<a href="/goods/" class="go-to-catalog">Перейти в каталог</a>
			<div class="content-section">
				<div class="decor-text_and_price">
					<p class="decor-text">
						<?=get_field('text',72)?>
					</p>
					<p class="price">от <?=get_field('min-price',72)?></p>
				</div>

				<!--НАЧАЛО горизонтальная тень-->
				<div class="uk-text-center">
					<img src="<?php bloginfo('template_directory')?>/public/img/catalog-shadow.png" alt="Тень">
				</div>
				<!--КОНЕЦ горизонтальная тень-->

				<p>
					<?=$catalog->post_content?>
				</p>
				<div class="uk-grid">
					<?php foreach (pp_gallery_get(72) as $image): ?>
					<div class="uk-width-1-1 uk-width-medium-1-2">
						<img src="<?=$image->url?>">
						<p>
						<?=$image->description?>
						</p>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ catalog-->
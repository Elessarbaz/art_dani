
<!--НАЧАЛО слайдер-->
<div class="main-slider uk-slidenav-position" data-uk-slider="{autoplay:true, autoplayInterval: 4000}">

	<div class="uk-slider-container">
		<ul class="uk-slider uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-medium-1-1 images-grid">
			<?php $images=get_posts(array('category_name'=>'product','numberposts'=>6));
			foreach ($images as $image1){
			?>
			<li style="background-image: url('<?=get_the_post_thumbnail_url($image1->ID)?>')">
				<p><?=get_the_title($image1->ID)?></p>
			</li>
			<?php } wp_reset_query(); ?>
		</ul>
	</div>
	<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
	<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>

</div>
<!--КОНЕЦ слайдер-->

<!--НАЧАЛО хлебные крошки-->
<div class="uk-container uk-container-center">
	<?php pp_get_breadcrumb('uk-breadcrumb') ?>
</div>
<!--КОНЕЦ хлебные крошки-->
<?php $obj=get_queried_object();?>
<main class="uk-container uk-container-center">
	<div class="uk-grid">

		<div class="uk-width-medium-1-4">
			<!--НАЧАЛО нав-сайдбар-->
			<ul class="uk-nav uk-hidden-small uk-nav-parent-icon" data-uk-nav="{multiple:true}">
				<?php $menu=wp_get_nav_menu_items('main');
				foreach ($menu as $key=>$val)  : $class=''; if (!$val->menu_item_parent):
					$child=child($menu,$val);
					if($val->object_id==$obj->ID){ $class='uk-active';}
					if (!$child):
						?>
						<li class="<?=$class?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
					<?php else: ?>
						<li class="uk-parent <?=$class?>">
							<a href="#"><?=$val->title?></a>
							<ul class="uk-nav-sub">
								<?php foreach ($child as $key1=>$val1): ?>
									<li><a  href="<?=$val1->url?>"><?=$val1->title?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php endif; ?>
				<?php endif; endforeach; wp_reset_query() ?>
			</ul>
			<!--КОНЕЦ нав-сайдбар-->
		</div>

		<div class="uk-width-medium-3-4 contacts content-container">
			<h2>Контакты</h2>
			<div class="map">
				<script type="text/javascript" charset="utf-8" async
						src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=fyycaM9ARr4kPXttQAeX7dWrevcM_1oN&width=100%&height=290&lang=ru_RU&sourceType=constructor"></script>
			</div>

			<p>г.Алматы ул. Улица 1/1 , уг. ул. Улица
				Дом 11 офис 111</p>

			<p>
				<a href="tel:+77011111111">+7 701 111 11 11</a> <br>
				<a href="tel:+77022222222">+7 702 222 22 22</a> <br>
			</p>

			<p><a href="mailto:email@email.kz">email@email.kz</a></p>

			<h2><i class="uk-icon-truck"></i> Доставка</h2>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi, beatae corporis cum cumque delectus distinctio dolore earum eligendi eos est et eum eveniet explicabo harum ipsa iste iure laboriosam maiores maxime nam necessitatibus nisi odio officia optio perspiciatis praesentium quasi quibusdam quis, repudiandae rerum sunt velit voluptas voluptate.</p>

		</div>

	</div>
</main>
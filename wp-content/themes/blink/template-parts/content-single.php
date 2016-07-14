<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blink
 */
$obj=get_queried_object();
?>
<main class="cases-body uk-container uk-container-center">
	<ul class="uk-breadcrumb uk-flex uk-flex-right uk-hidden magictime" data-animate="spaceInRight" data-animate-out="spaceOutRight">
		<li><a data-link href="/">Главная</a></li>
		<li><a data-link href="/services/">Цены и услуги</a></li>
		<li class="uk-active"><span><?=get_the_title()?></span></li>
	</ul>
	<h1 class="uk-hidden magictime" data-animate="swashIn" data-animate-out="swashOut">Landing-page</h1>
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3 single-content">
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2 uk-hidden magictime" data-animate="spaceInLeft" data-animate-out="spaceOutLeft">
					<h3 ><?=get_field('excerpt-title')?></h3 >
					<article>
						<?=get_the_excerpt() ?>
					</article>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2 uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown" >
					<h3><?=get_field('content-title')?></h3>
					<article>
						<?=get_the_content()?>
					</article>
				</div>
			</div>
		</div>
		<?php $posts=get_posts(array('category_name'=>$obj->post_name,'numberposts'=>-1, 'orderby'=>'id','order'=>'ASC'));
		if ($posts):
		?>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 slider-content visible-hidden magictime" data-animate="spaceInRight" data-animate-out="spaceOutRight">
			<div class="slider">
				<div class="uk-slidenav-position" data-uk-slideshow>
					<ul class="uk-slideshow">
						<?php foreach ($posts as $key=>$post): setup_postdata($post); ?>
						<li>
							<figure class="uk-overlay uk-overlay-hover">
								<img src="<?=get_the_post_thumbnail_url()?>">
								<figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background">
									<h3><?=get_the_title()?></h3>
									<p>
										Тип: <?=$obj->post_name?>
										<a class="review-site" data-uk-lightbox title="<?=get_the_title()?>" href="<?=get_field('full-img')?>">
											<i class="uk-icon uk-icon-search"></i>
										</a>
										<br>
										Время: <?=get_field('production_time')?> <br>
										Стоимость: <?=get_field('price')?> <br>
										Сайт: <a target="_blank" href="<?=get_field('url')?>"><?=get_the_title()?></a>
									</p>
								</figcaption>
							</figure>
						</li>
						<?php endforeach; ?>
					</ul>
					<ul class="uk-dotnav uk-dotnav-contrast  uk-flex-center">
						<?php foreach ($posts as $key=>$post): ?>
						<li data-uk-slideshow-item="<?=$key?>"><a href=""></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</main>

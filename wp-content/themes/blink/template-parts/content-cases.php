<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blink
 */

?>

<main class="cases-body uk-container uk-container-center uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown">
	<h1 class="">Кейсы и портфолио</h1>
	<?php
	$args = array(
		'child_of'     => '',
		'parent'       => 3,
		'orderby'      => 'id',
		'order'        => 'ASC',
		'hide_empty'   => 1,
		'hierarchical' => 1,
		'exclude'      => '',
		'include'      => '',
		'number'       => 0,
		'taxonomy'     => 'category',
		'pad_counts'   => false,
		// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
	);
	$categories = get_categories( $args ); ?>
	<ul id="filter" class="uk-subnav">
		<li class="uk-active" data-uk-filter=""><a href="">Все</a></li>
		<?php foreach ($categories as $category ): ?>
		<li data-uk-filter="<?=$category->slug?>"><a href=""><?=$category->name?></a></li>
		<?php endforeach; ?>
	</ul>
	<div class="uk-grid grid-case" data-uk-grid="{controls: '#filter'}">
		<?php foreach ($categories as $category): ?>
			<?php $posts=get_posts(array('category_name'=>$category->slug,'numberposts'=>-1));
			foreach ($posts as $key=>$post): setup_postdata($post);
			?>
			<div data-uk-filter="<?=$category->slug?>" data-grid-prepared="true" class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<img src="<?=get_the_post_thumbnail_url()?>">
					<figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background">
						<div class="uk-grid">
							<div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-2">
								<h3><?=get_the_title()?></h3>
								<p>
									Тип: <?=$category->name?>
									<a class="review-site" data-uk-lightbox title="<?=get_the_title()?>" href="<?=get_field('full-img')?>">
										<i class="uk-icon uk-icon-search"></i>
									</a>
									<br>
									Время: <?=get_field('production_time')?> <br>
									Стоимость: <?=get_field('price')?> <br>
									Сайт: <a target="_blank" href="<?=get_field('url')?>"><?=get_the_title()?></a>
								</p>
							</div>
							<div class="uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-2 uk-visible-large">
								<h3>Описание</h3>
								<article>
									<?=get_the_content()?>
								</article>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>

		<?php endforeach; endforeach; wp_reset_query(); ?>
	</div>
</main>

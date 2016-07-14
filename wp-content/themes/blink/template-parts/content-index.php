<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blink
 */

?>

	<div class="main-page-body" >
		<header class="uk-container uk-container-center">
		</header>

		<main class="uk-container uk-container-center" >
			<div class="logo uk-text-center magictime uk-hidden" data-animate="boingInUp" data-animate-out="rotateUp">
				<a data-link href="/"><img src="<?=get_field('logo',4)?>" alt=""></a>
			</div>
			<div class="title-main uk-flex uk-flex-center uk-flex-column">
				<h1 class="magictime uk-hidden" data-animate="vanishIn" data-animate-out="vanishOut">Заказать сайт</h1>
				<h2 class="magictime uk-hidden" data-animate="vanishIn" data-animate-out="vanishOut">и получить</h2>
				<h3 class="magictime uk-hidden" data-animate="vanishIn" data-animate-out="vanishOut">
					<?=get_field('slogan',4) ?>
				</h3>
			</div>
			<div  class="uk-grid main-menu">
				<?php $menu=wp_get_nav_menu_items('main');
				foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent): if($val->object!='custom'): ?>
				<div  class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 uk-text-center uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown">
					<a data-link href="<?=$val->url?>" >
						<?php include (get_attached_file($val->thumbnail_id)); ?>
						<h3><?=$val->title?></h3>
					</a>
				</div>
				<?php else: ?>
				<div  class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 blink-cb-open-popup uk-text-center uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown">
									<a class="search-blink-cb-module-btn " href="#recall">
										<?php include (get_attached_file($val->thumbnail_id)); ?>
										<h3><?=$val->title?></h3>
									</a>
				</div>
				<?php endif; endif; } ?>
				<div class="uk-width-1-1 title-devise uk-text-center magictime uk-hidden" data-animate="uk-animation-slide-bottom" data-animate-out="spaceOutDown">
					<h3><?=get_field('motto',4)?></h3>
				</div>
			</div>
		</main>

		<footer>

		</footer>
	</div>

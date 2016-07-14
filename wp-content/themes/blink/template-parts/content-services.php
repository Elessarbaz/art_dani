<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blink
 */

?>

<main class="cases-body uk-container uk-container-center">
	<h1 class="uk-hidden magictime" data-animate="swashIn" data-animate-out="swashOut">Наши услуги</h1>
	<div class="uk-grid main-menu services-menu">
		<?php $posts=get_posts(array('category_name'=>'services','numberposts'=>-1, 'orderby'=>'id','order'=>'ASC'));
		foreach ($posts as $key=>$post): setup_postdata($post);
		?>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 uk-text-center uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown">
			<a data-link href="<?=get_permalink()?>">
				<?php include (get_attached_file(get_post_thumbnail_id($post->ID))); ?>
				<h3><?=get_the_title()?></h3>
			</a>
			<p>
				<?=get_field('description')?>
			</p>
		</div>
		<?php endforeach; wp_reset_query() ?>
		<div class="uk-width-1-1 title-devise uk-text-center uk-hidden magictime" data-animate="spaceInDown" data-animate-out="spaceOutDown">
			<h3><?=get_field('motto',4)?></h3>
		</div>
	</div>

</main>
<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mattress_king
 */
$obj=get_queried_object();
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>$obj->slug,'posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page_num*$page_post;
get_header(); ?>

	<h2 class="uk-text-center">Каталог</h2>
	<div class="catalog-page uk-container uk-container-center">

		<div class="uk-text-center">
			<!-- This is a button toggling the off-canvas sidebar -->
			<button class="uk-visible-small choose-category" data-uk-offcanvas="{target:'#catalogOffCanvas'}">Выбрать
				категорию
			</button>
		</div>
		<?php
		$args = array(
			'type'         => 'post',
			'child_of'     => '',
			'parent'       => 5,
			'orderby'      => 'name',
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
		$categories = get_categories( $args );
		?>
		<div class="uk-grid">
			<div class="uk-width-medium-1-4 filter uk-hidden-small">
				<div class="heading"><p>Продукция</p></div>
				<div class="uk-accordion" data-uk-accordion="{collapse: false}">
					<!--li с классом "active" - текущий(выделенный) товар-->
					<?php
					foreach ($categories as $category):
					$args=array('category_name'=>$category->slug,'order'=>'ASC', 'orderby'=>'id', 'numberposts'=>-1 );
					$posts=get_posts($args);
					?>
					<h3 class="uk-accordion-title"><?=$category->name?></h3>

					<div class="uk-accordion-content">
						<ul>
							<?php
							foreach ($posts as $post):
							setup_postdata($post);
							?>
							<li><a href="<?=get_permalink()?>"><?=get_the_title()?></a></li>
							<?php endforeach; wp_reset_query();?>
						</ul>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="uk-width-medium-3-4 product-list">
				<ul class="uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-1-1">
				<?php
				query_posts(array('category_name'=>$obj->slug,'posts_per_page'=>$page_post,'offset'=>$offset));

				if ( have_posts() ) : ?>
							<?php
							while ( have_posts() ) : the_post();
								$category=get_the_category();
								if($category[0]->term_id!=4) get_template_part( 'template-parts/content', 'archive' );
							endwhile;
						endif;
				?>
				</ul>
			</div>
		</div>


		<?php if($page_count>1):?>
			<!--НАЧАЛО пагинация-->
			<ul class="uk-pagination uk-pagination-right uk-container uk-container-center">
				<li><a href="<?=$query_url?>?page=0"><i class="uk-icon-angle-double-left"></i></a></li>
				<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='class="uk-active"';} ?>
					<li data-id="<?=$i?>" data-id1="<?=$page_num?>" <?=$class?> >
						<?php if ($i==$page_num):?><span><?php endif;?>
							<a href="<?=$query_url.'?page='.$i?>">
								<?=$i+1?>
								</a>
							<?php if ($i==$page_num):?></span><?php endif;?>
					</li>
				<?php endfor; ?>
				<li><a href="<?=$query_url?>?page=<?=$page_count-1?>"><i class="uk-icon-angle-double-right"></i></a></li>
			</ul>
		<?php endif; ?>

	</div>

	<div id="catalogOffCanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar filter on-off-canvas">
			<div class="heading on-off-canvas"><p>Акции</p></div>
			<div class="uk-accordion" data-uk-accordion="{collapse: false}">
				<!--li с классом "active" - текущий(выделенный) товар-->
				<h3 class="uk-accordion-title">Категория 1</h3>
				<div class="uk-accordion-content">
					<ul>
						<li><a href="#">Товар 1</a></li>
						<li  class="active"><a href="#">Товар 2</a></li>
						<li><a href="#">Товар 3</a></li>
						<li><a href="#">Товар 4</a></li>
					</ul>
				</div>

				<h3 class="uk-accordion-title">Категория 2</h3>
				<div class="uk-accordion-content">
					<ul>
						<li><a href="#">Товар 1</a></li>
						<li><a href="#">Товар 2</a></li>
						<li><a href="#">Товар 3</a></li>
						<li><a href="#">Товар 4</a></li>
					</ul>
				</div>

				<h3 class="uk-accordion-title">Категория 3</h3>
				<div class="uk-accordion-content">
					<ul>
						<li><a href="#">Товар 1</a></li>
						<li><a href="#">Товар 2</a></li>
						<li><a href="#">Товар 3</a></li>
						<li><a href="#">Товар 4</a></li>
					</ul>
				</div>

				<h3><a href="#">Катег. без дропдауна</a></h3>
				<h3><a href="#">Катег. без дропдауна 2</a></h3>

			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
get_footer();

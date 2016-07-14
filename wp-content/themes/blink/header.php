<?php $obj=get_queried_object(); ?>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<?php wp_head() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/magic.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/app.css">
</head>
<body>
<div class="main-page-body">
	<?php if (!is_front_page()): ?>
	<div id="my-id" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<div class="menu-alt">
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav">
						<li><a href="index.html">
								Главная</a></li>
						<li class="uk-active"><a href="cases.html">
								Портфолио</a></li>
						<img src="<?=get_field('logo',4)?>" alt="">
						<li><a href="services.html">
								Услуги</a></li>
						<li><a href="">
								Связь</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<header class="uk-container uk-container-center">
		<div class="uk-grid">
			<address class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-1 uk-hidden magictime" data-animate="spaceInUp" data-animate-out="rotateUp">
				<a href="tel:<?=get_field('phone-1',4)?>" ><?=get_field('phone-1',4)?></a>
				<a href="tel:<?=get_field('phone-1',4)?>" ><?=get_field('phone-1',4)?></a>
				<a href="mailto:<?=get_field('email',4)?>" ><?=get_field('email',4)?></a>
			</address>
		</div>
		<div class="nav-alt uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3 uk-text-center uk-hidden magictime" data-animate="vanishIn" data-animate-out="vanishOut">
				<a href="/" data-link>
					<img class="logo-alt" src="<?=get_field('logo',4)?>" alt="">
				</a>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3 menu-alt uk-visible-large full-main">
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav uk-flex uk-flex-space-around">
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent): if($val->object!='custom'):?>
						<li class="uk-hidden magictime" data-animate="spaceInUp" data-animate-out="rotateUp">
							<a  href="<?=$val->url?>" data-link class="<?php if ($obj->ID==$val->object_id) echo 'uk-active' ?>  uk-flex uk-flex-column uk-flex uk-flex-middle uk-flex-center">
								<?php include (get_attached_file($val->thumbnail_id)); ?>
								<?=$val->title?></a>
						</li>
						<?php else: ?>
						<li class="uk-hidden magictime blink-cb-open-popup search-blink-cb-module-btn" data-animate="spaceInUp" data-animate-out="rotateUp">
							<a href="<?=$val->url?>" class="uk-flex uk-flex-column uk-flex uk-flex-middle uk-flex-center">
								<?php include (get_attached_file($val->thumbnail_id)); ?>
								<?=$val->title?></a>
						</li>
						<?php endif; endif; } ?>
					</ul>
				</nav>
			</div>
		</div>
		<a href="#my-id" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>

	</header>
	<?php endif; ?>
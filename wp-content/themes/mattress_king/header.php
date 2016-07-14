<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/public/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/accordion.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<body>

<header id="home">
	<div class="decorative-line"></div>
	<div class="uk-container uk-container-center">
		<a href="/"><img src="<?=get_field('logo',4)?>" alt="Лого" class="header__logo"></a>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<span class="address"><?=get_field('short-address',4)?></span>
				<span><a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a></span>
				<span><a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a></span>
				<span><a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a></span>
			</div>

			<?php if(is_front_page()): ?>
			<nav class="uk-navbar"
				 data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
					<li><a href="<?=$val->url?>" <?php if ($val->object!='page'): ?> data-uk-smooth-scroll="{offset: 40}" <?php endif; ?>"><?=$val->title?></a></li>
					<?php endif; } ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>
			<?php $menu=wp_get_nav_menu_items('main');?> <!--<pre><?php /*print_r($menu); */?></pre>-->
			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<?php
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
							<li><a href="<?=$val->url?>" <?php if ($val->object!='page'): ?> data-uk-smooth-scroll="{offset: 40}" <?php endif; ?> ><?=$val->title?></a></li>
						<?php endif; } ?>
					</ul>
				</div>
			</div>
			<?php else: ?>
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
							<li><a href="/<?=$val->url?>"><?=$val->title?></a></li>
						<?php endif; } ?>
					</ul>
					<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
				</nav>

				<div id="my-id" class="uk-offcanvas">
					<div class="uk-offcanvas-bar">
						<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
							<?php $menu=wp_get_nav_menu_items('main');
							foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
								<li><a href="/<?=$val->url?>"><?=$val->title?></a></li>
							<?php endif; } ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</header>
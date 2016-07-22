<footer>
	<div class="footer-flex uk-container uk-container-center">
		<div class="logo-and-solgan-container">
			<a href="/"><img class="logo" src="<?=get_field('logo',4)?>" alt="Лого"></a>
			<p class="slogan"><?=get_field('slogan',4)?></p>
		</div>
		<div class="map">
			<?=get_field('map',4)?>
		</div>
		<div class="contacts">
			<h3>Наши контакты</h3>

			<p>
				<?=get_field('address',4)?>
			</p>

			<p>
				<a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a> <br>
				<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
			</p>

			<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>
		</div>
	</div>
</footer>

<!-- НАЧАЛО нав-off-canvas -->
<div id="navmenu-off-canvas" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}">
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
	</div>
</div>
<!-- КОНЕЦ нав-off-canvas -->


<script src="<?php bloginfo('template_directory')?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/lightbox.min.js"></script>
<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('.success-mail-text').html(success); $('.call_form-text').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>
<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
<?php wp_footer() ?>
</body>
</html>
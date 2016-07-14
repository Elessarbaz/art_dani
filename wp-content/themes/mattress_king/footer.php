
<footer>
	<div class="footer-flex uk-container uk-container-center">
		<a href="/"><img src="<?=get_field('logo-f',4)?>" alt="Лого"></a>
		<div class="map">
		<?=get_field('map',4)?>
		</div>
		<div class="contacts">
			<h3>Наши контакты</h3>

			<p><?=get_field('address',4)?></p>

			<p>	<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a> <br>
				<a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a> <br>
				<a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a></p>

			<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/accordion.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/scripts.js"></script>
<script src="https://bsh.su/resources/callback/js/mailer.js" ></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail').show(500);  }, function(error) {});
</script>
<script src="https://bsh.su/client/script/GET/"></script>

<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
<?php wp_footer() ?>
</body>
</html>
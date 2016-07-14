<h2 class="uk-text-center">Наши контакты</h2>
<div class="big-map">
	<?=get_field('map',4) ?>
</div>

<div class="uk-container uk-container-center contacts-page">
	<div class="uk-grid uk-grid-large">

		<!--НАЧАЛО колонна контактов-->
		<div class="uk-width-medium-3-10 contact-info-col">

			<p><?=get_field('address',4)?></p>

			<p>	<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a> <br>
				<a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a> <br>
				<a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a></p>

			<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?>u</a></p>

			<form class="blink-mailer" action="">
				<img src="<?php bloginfo('template_directory') ?>/public/img/home_mail.png" alt="Письмо">
				<h3>Напишите нам</h3>
				<input type="hidden" name="title" value="Обратная связь" >
				<input type="text" name="Имя" placeholder="Имя">
				<input type="tel" name="Телефон" placeholder="Телефон">
				<textarea name="Сообщение" id="msg" placeholder="Сообщение"></textarea>
				<input type="submit" value="Отправить">
			</form>
			<form class="success-mail" >
				<p class="success-mail-text" >

				</p>

			</form>
		</div>
		<!--КОНЕЦ колонна контактов-->

		<!--НАЧАЛО колонна доставка-->
		<div class="uk-width-medium-7-10 delivery-info-col">
			<article>
				<?php the_content() ?>
			</article>
		</div>
		<!--КОНЕЦ колонна доставка-->
	</div>
</div>
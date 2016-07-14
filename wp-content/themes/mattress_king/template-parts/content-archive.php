<li>
	<div class="border">
		<img src="<?=get_the_post_thumbnail_url()?>">
		<h3><?=get_the_title()?></h3>
		<p>
			<?=get_the_content('')?>
		</p>
		<p><a href="<?=get_permalink()?>">Подробнее</a></p>
	</div>
</li>
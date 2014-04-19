<?php snippet('header') ?>

	<article>
		<nav>
			<a href="<?php echo c::get('url'); ?>">Back to home</a>
		</nav>
		<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
	</article>

<?php snippet('footer') ?>
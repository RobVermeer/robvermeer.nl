<?php snippet('header') ?>
	<section class="content">
		<nav>
			<a href="<?php echo c::get('url'); ?>">Back to home</a>
		</nav>
		<article>
			<h1><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</article>
	</section>

<?php snippet('footer') ?>
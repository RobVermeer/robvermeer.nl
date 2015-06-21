<?php snippet('header') ?>

<?php snippet('leader') ?>

	<section class="content">
		<a href="#article" class="jump see-more"><span><i class="fa fa-arrow-circle-up"></i></span></a>
		<article id="article">
			<?php echo kirbytext($page->text()) ?>
		</article>

<?php snippet('footer') ?>
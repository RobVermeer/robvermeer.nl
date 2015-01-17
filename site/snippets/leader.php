	<header>
		<nav>
			<h1><a href="#article" class="jump"><?php echo html($site->title()) ?></a></h1>
			<h3><?php echo html($site->tagline()) ?></h3>
			<?php echo str::email($site->email(), "Contact", "Contact me", "btn") ?>
		</nav>
		<a href="#article" class="jump see-more"><i class="fa fa-arrow-circle-up"></i></a>
	</header>
	<div class="why-dont-you-hire-me"></div>
	
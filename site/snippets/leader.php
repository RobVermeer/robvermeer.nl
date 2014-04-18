	<header>
		<nav>
			<h1><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
			<h3><?php echo html($site->tagline()) ?></h3>
			<?php echo str::email($site->email(), "Contact", "Contact me", "btn") ?>
			
		</nav>
	</header>
	
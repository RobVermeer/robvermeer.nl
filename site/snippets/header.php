<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700'); ?>
  <?php echo css('assets/css/style.css'); ?>
  
  <link rel="shortcut icon" href="<?php echo url('assets/img/favicon.ico') ?>">
  
  <?php ga(); ?>

</head>

<body>

	<header>
		<nav>
			<h1><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
			<h3>Webdevelopment</h3>
			<?php echo str::email($site->email(), "Contact", "Contact me", "btn") ?>
		</nav>
	</header>
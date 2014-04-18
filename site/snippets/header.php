<!DOCTYPE html>
<html lang="en">
<head>
  
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php echo css('//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700'); ?>
	<?php echo css('assets/css/style.css'); ?>

	<link rel="shortcut icon" href="<?php echo url('assets/img/favicon.ico') ?>">

	<?php ga(); ?>

</head>

<body>

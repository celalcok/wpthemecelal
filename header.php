<?php
/**
 * Header file.
 * 
 * @package Wpcelal
 * 
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
	<meta charset="<?php bloginfo("charset") ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<style>
		.some{
			background-color: #eee;
		}
	</style>
</head>
<body  <?php body_class("some"); ?> >
	<?php wp_body_open()?>
	<header>
		Header
	</header>
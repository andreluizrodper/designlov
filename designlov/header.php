<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>

		<!-- Basic Page Needs
	  ================================================== -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ssj.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.1.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
		<?php
			wp_head();
		?>
	</head>
	<body <?php echo body_class(); ?>>
		<header class="panel full">
			<div class="wrapper">
				<?php get_search_form(); ?>
				<h1>
					<a href="<?php bloginfo('siteurl'); ?>">Designlov</a>
				</h1>
				<menu>
					<?php wp_list_categories(array('title_li' => '')) ?>
				</menu>
			</div>
		</header>
		<div class="panel full">
			<div class="wrapper">
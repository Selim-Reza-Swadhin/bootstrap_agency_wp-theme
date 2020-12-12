<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!--        <title>Agency - Start Bootstrap Theme</title>-->
	<!--        add_theme_support( 'title-tag');-->

	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?> /assets/img/favicon.ico" />
	<!-- Google fonts-->
	<!-- Core theme CSS (includes Bootstrap)-->
	<?php wp_head();?>
</head>
<body id="page-top" <?php body_class();?> >

<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
		<!--		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="--><?php //echo get_template_directory_uri();?><!-- /assets/img/navbar-logo.svg" alt="" /></a>-->
		<a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo('name');?></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars ml-1"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">

<!--			<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
			</ul>-->


            <!--wp dynamic menu-->
			<?php

			wp_nav_menu( array(
//	'theme_location'  => 'main-menu',
				'theme_location'  => 'main-menu',
				//'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				//'container'       => 'div',
				//'container_class' => 'collapse navbar-collapse',
				//'container_id'    => 'navbarResponsive',
				'menu_class'      => 'navbar-nav text-uppercase ml-auto',
				//'fallback_cb'     => 'Walker_Nav_Menuss::fallback',
				'walker'          => new Walker_Nav_Menuss(),//show inc/custom-walker-nav-menu.php
			) );

			?>

		</div>
	</div>
</nav>

<!-- Masthead-->

<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Welcome To Our Studio!</div>
		<div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
	</div>
</header>

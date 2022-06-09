<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	get_template_part( 'template-parts/header/head' );
	wp_head(); ?>
</head>

<body>

	<div id="page-overlay" class="page-overlay"></div>
	<?php
	get_template_part( 'template-parts/navigation/mobile-navigation' ); ?>

	<div id="page" class="site">

		<?php
		if(is_front_page()) : ?>
		<header class="header" id="main__header">
		<?php
		else : ?>
		<header class="header header-page" id="main__header">
		<?php
		endif; ?>
			<div class="header__nav">
				<div class="container">
					<a class="header__logo" href="/" title="Home">
						<?php
						$contactlogo = get_field('contactLogo', 'option');
						if ($contactlogo) : ?>
							<?php the_field('contactLogo', 'option'); ?></p>
						<?php
						endif; ?>
					</a>
					<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'main'
							) 
						); 
					?>
					<div id="nav--open" class="header__nav">☰</div>
				</div>
			</div>

			<div class="header__overlay"></div>
			<?php 
			if(is_front_page()) :
			the_post_thumbnail( 'hero', array( 'class' => 'header__img lazy' ) ); 
			elseif(is_single() || is_singular()) :
				the_post_thumbnail( 'hero-single', array( 'class' => 'header__img lazy' ) ); 
			else :
				the_post_thumbnail( 'hero-page', array( 'class' => 'header__img lazy' ) );
			endif;
			?>

			<?php
			if ( !is_front_page() ) : ?>
			<div class="header__content">
				<div class="container">
					<h1><?php the_title(); ?></h1>
					<?php get_template_part( 'template-parts/navigation/breadcrumb' ); ?>
				</div>
			</div>
			<?php
			endif; ?>

		</header>
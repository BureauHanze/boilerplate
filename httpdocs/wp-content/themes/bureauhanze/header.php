<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
	get_template_part( 'template-parts/header/head' );
	wp_head(); ?>
</head>

<body>

	<?php
	get_template_part( 'template-parts/navigation/mobile-navigation' ); ?>

	<div id="page" class="site">

		<header class="header" id="main__header">
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
					<div id="open_nav" class="header__nav">☰</div>
				</div>
			</div>

			<?php the_post_thumbnail( 'main-background', array( 'class' => 'lazy' ) ); ?>

			<div class="container">
				<div class="row">
					<div class="header__content">
						<?php
						if ( is_front_page() ) : ?>
						<h1>Site title</h1>
						<?php
						else : ?> 
						<h1><?php the_title(); ?></h1>
						<?php
						get_template_part( 'template-parts/navigation/breadcrumb' ); ?>
						<?php
						endif; ?>
					</div>
				</div>
			</div>
		</header>




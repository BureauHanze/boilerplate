<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/uye1uxs.css">
	<title><?php echo get_the_title($page->ID); ?> | Boilerplate.</title>
	<?php
	if ( get_field( 'header_google_analytics', 'option' ) ):?>
		<?php the_field( 'header_google_analytics', 'option' );
	endif; ?>

	<?php wp_head(); ?>
</head>

<body>
	<!-- Mobile Nav-->
	<?php
	get_template_part( 'template-parts/navigation/mobile-navigation' ); ?>

	<div id="page" class="site">

		<header class="header">
			<div class="header__nav">
				<div class="container">
					<a class="header__logo" href="/" title="Home"></a>
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




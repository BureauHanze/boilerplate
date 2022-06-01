<!-- Page Title -->
<?php
if (get_field('seoPageTitle', 'option')) : ?>
<title><?php the_field('seoPageTitle', 'option'); ?></title> 
<?php
else : ?>
<title><?php echo get_the_title($page->ID); ?> | <?php the_field('contactSlogan', 'option'); ?></title>
<?php
endif; ?>

<!-- Meta Description -->
<?php
if (get_field('seoPageMetaDescription', 'option')) : ?>
<meta name="description" content="<?php the_field('seoPageMetaDescription', 'option'); ?>">
<?php
else : ?>
<meta name="description" content="">
<?php
endif; ?>

<!-- Google Analytics code -->
<?php
if ( get_field( 'header_google_analytics', 'option' ) ):?>
    <?php the_field( 'header_google_analytics', 'option' );
endif; ?>

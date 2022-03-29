<?php
function add_favicon(){ ?>
<link rel="shortcut icon" href="<?php the_field('contactFavicon', 'option'); ?>"/>
<?php }
add_action('wp_head','add_favicon');
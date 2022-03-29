<?php
function add_favicon(){ 
$faviconcompany = get_field('contactFavicon', 'option'); 
?>

<!-- Basic favicon 16px x 16px -->
<link rel="shortcut icon" href="<?php echo ($faviconcompany['sizes']['favicon']); ?>"/>

<!-- Basic favicon (Android Chrome) 192px x 192px -->
<link rel="icon" type="image/png" href="<?php echo ($faviconcompany['sizes']['favicon-chrome']); ?>" sizes="192x192">

<!-- Basic favicon (Apple) 180px x 180px -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo ($faviconcompany['sizes']['favicon-apple']); ?>">
<?php }
add_action('wp_head','add_favicon');
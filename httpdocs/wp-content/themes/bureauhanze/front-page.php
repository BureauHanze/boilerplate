<?php 
get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php
    get_template_part( 'template-parts/sections/flex-content' ); 
    get_template_part( 'template-parts/sections/projects' ); 
    get_template_part( 'template-parts/socials/whatsapp-icon' ); 
    ?>
</main>

<?php
get_footer();

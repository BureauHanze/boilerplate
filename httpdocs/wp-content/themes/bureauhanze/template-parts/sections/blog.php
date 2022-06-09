<?php
if(is_front_page()) : ?>
<section class="blog">
    <div class="container">
        <div class="row">
            <h2>Blogberichten</h2>
        </div>
        <div class="row">
        <?php
        $args = array(  
            'post_type' => 'blog',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
            'orderby' => 'title', 
            'order' => 'DESC',
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'template-parts/cards/blog');
        endwhile;
        wp_reset_postdata(); 
        ?>
        </div>
    </div>
</section>
<?php
elseif(is_page('blog')) : ?>
    <section class="blog">
    <div class="container">
        <div class="row">
            <h2>Blogberichten</h2>
        </div>
        <div class="row">
        <?php
        $args = array(  
            'post_type' => 'blog',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title', 
            'order' => 'DESC',
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'template-parts/cards/blog');
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
    </div>
</section>
<?php
endif; ?>
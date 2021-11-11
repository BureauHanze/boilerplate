<section class="projects">
    <div class="container">


        <?php
        $args = array(  
            'post_type' => 'projecten',
            'post_status' => 'publish',
            'posts_per_page' => 2, 
            'orderby' => 'title', 
            'order' => 'ASC',
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'template-parts/cards/project');
        endwhile;
        wp_reset_postdata(); 
        ?>


    </div>
</section>
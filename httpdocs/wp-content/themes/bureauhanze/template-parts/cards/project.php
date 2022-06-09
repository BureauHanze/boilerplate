<article class="project">
    <div class="project__container">
        <?php the_post_thumbnail( 'card', array( 'class' => 'lazy' ) ); ?>
        <div class="project__content">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words( get_the_excerpt(), 10 ); ?></p>
            <a class="btn btn-link-icon" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php get_template_part( 'assets/svg/chevron' ); ?>Naar project</a>
        </div>
    </div>
</article>
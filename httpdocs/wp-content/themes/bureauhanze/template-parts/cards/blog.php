<article class="blog__card">
    <?php the_post_thumbnail( 'card-blog', array( 'class' => 'card__img lazy' ) ); ?>
    <div class="card__content">
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words( get_the_excerpt(), 10 ); ?></p>
        <a class="btn btn-link-icon" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php get_template_part( 'assets/svg/chevron' ); ?>Bekijk blog</a>
    </div>
</article>
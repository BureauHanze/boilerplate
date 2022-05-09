<?php
if( have_rows('section_flex-content') ): ?>
<section class="flex-content">
    <div class="container">
    <?php
    while ( have_rows('section_flex-content') ) : the_row(); 
    if( get_row_layout() == 'section_flex-content_row' ): ?>
        <div class="row" style="flex-direction: <?php the_sub_field('section_flex-content_order'); ?>">
            <div class="flex-content__image">
            <?php
            $image = get_sub_field('section_flex-content_image');
            $size = 'large';
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            endif; ?>
            </div>
            <div class="flex-content__paragraph">
                <?php
                if(get_sub_field('section_flex-content_text')) :
                    the_sub_field('section_flex-content_text');
                endif; ?>
            </div>
        </div>
        <?php
    endif;
    endwhile; ?>
    </div>
</section>
<?php
endif;
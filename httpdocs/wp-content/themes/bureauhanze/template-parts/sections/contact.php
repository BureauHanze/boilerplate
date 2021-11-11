<section class="contact">
    <div class="container">

            <div class="contact__container">
                <div class="contact__heading">
                    <h2><?php the_field('section_contact_heading-2'); ?></h2>
                    <div class="contact__buttons">
                        <?php
                        $contactphone = get_field('contactPhone', 'option');
                        if($contactphone):?>
                        <a class="main-navigation__phone contact-phone" href="<?php echo $contactphone['url']; ?>" target="<?php echo $contactphone['target']; ?>" title="<?php echo $contactphone['title']; ?>"><?php get_template_part( 'assets/svg/phone'); echo $contactphone['title']; ?></a>
                        <?php
                        endif; ?>

                        <?php
                        $contactmail = get_field('contactMail', 'option');
                        if($contactmail):?>
                        <a class="main-navigation__mail contact-mail" href="<?php echo $contactmail['url']; ?>" target="<?php echo $contactmail['target']; ?>" title="<?php echo $contactmail['title']; ?>"><?php get_template_part( 'assets/svg/envelope'); echo $contactmail['title']; ?></a>
                        <?php
                        endif; ?>
                    </div>
                </div>
                <div class="contact__form">
                    <h3><?php the_field('section_contact_heading-contact'); ?></h3>
                    <p><?php the_field('section_contact_paragraph-contact'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="9" title="Contact"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section> 
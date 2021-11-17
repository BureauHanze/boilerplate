<?php 

get_header(); ?>

<main id="main" class="site-main" role="main">

    <section class="cheatsheet__headings">
        <div class="container">
            <h1>Heading H1</h1>
            <h2>Heading H2</h2>
            <h3>Heading h3</h3>
            <h4>Heading H4</h4>
            <h5>Heading H5</h5>
            <h6>Heading H6</h6>
        </div>
    </section>

    <section class="cheatsheet__paragraph">
        <div class="container">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, mollitia. Culpa nam est iste fugiat magni quia dolorum laudantium nobis ab molestiae nulla facilis accusamus voluptatem exercitationem nisi itaque blanditiis, quaerat dolorem harum eaque iusto doloremque sapiente beatae? Aliquid voluptates voluptatibus sint expedita illo, quo suscipit consequatur voluptate tempora perferendis?</p>
        </div>
    </section>

    <section class="cheatsheet__ul-li">
        <div class="container">
            <ul>
                <li>List item</li>
                <li>List item</li>
                <li>List item</li>
                <li>List item</li>
            </ul>
            <ol>
                <li>List item</li>
                <li>List item</li>
                <li>List item</li>
                <li>List item</li>
            </ul>
        </div>
    </section>

    <section id="cheatsheet__buttons">
        <div class="container">
            <h2>Buttons</h2>
            <div class="buttons__container">
                <a class="btn btn-primary" href="#">Btn Primary</a>
                <a class="btn btn-primary-icon" href="#"><?php get_template_part( 'assets/svg/chevron' ); ?>Btn Primary</a>
                <a class="btn btn-secondary" href="#">Btn Secondary</a>
                <a class="btn btn-secondary-icon" href="#"><?php get_template_part( 'assets/svg/chevron' ); ?>Btn Secondary</a>
                <a class="btn btn-primary-outline" href="#">Btn Outline</a>
                <a class="btn btn-primary-outline-icon" href="#"><?php get_template_part( 'assets/svg/chevron' ); ?>Btn Outline</a>
                <a class="btn btn-link" href="#">Btn Link</a>
                <a class="btn btn-link-icon" href="#"><?php get_template_part( 'assets/svg/chevron' ); ?>Btn Link</a>
            </div>
        </div>
    </section>


</main>

<?php
get_footer();

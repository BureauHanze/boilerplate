<div class="sidebar sidebar-extended">
    <div class="container">

        <?php
        if ( is_singular("project") ) : ?>
        <div class="row">
            <div class="sidebar__highlights">
                <h3 class="highlights__heading">PROJECT HIGHLIGTS</h3>
                <p class="highlights__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur culpa minus quidem sed velit facere accusantium ex rerum eius suscipit.</p>
            </div>
        </div>
        <?php
        endif; ?> 

        <div class="row">
            <?php
            if ( is_front_page() ) : ?>
            <div class="sidebar__stats">
                <h3 class="stats__heading">1983</h3>
                <p class="stats__text">Year Established</p>
            </div>
            <div class="sidebar__stats">
                <h3 class="stats__heading">500+</h3>
                <p class="stats__text">Projects Completed</p>
            </div>
            <div class="sidebar__stats">
                <h3 class="stats__heading">2018</h3>
                <p class="stats__text">4U system packaging</p>
            </div>
            <div class="sidebar__stats">
                <h3 class="stats__heading">2020</h3>
                <p class="stats__text">3D closing system</p>
            </div>
            <?php
            endif; ?>

            <?php
            if ( is_page("longpack-machines") ) : ?>
            <div class="sidebar__stats">
                <h3 class="stats__heading">PROTECTED</h3>
                <p class="stats__text">ALL THE WAY</p>
            </div>
            <?php
            endif; ?>
        </div>
        <?php
        if ( is_singular("project") ) : ?>
        <div class="seperator"></div>
        <div class="sidebar__items">
            <div class="sidebar__item">
                <h3 class="sidebar-item__heading">WAAR</h3>
                <p class="sidebar-item__paragraph">Elburg, Netherlands.</p>
            </div>
            <div class="sidebar__item">
                <h3 class="sidebar-item__heading">Wanneer</h3>
                <p class="sidebar-item__paragraph">9 oktober 2021</p>
            </div>
        </div>
        <?php
        endif; ?> 
    </div>
</div> 
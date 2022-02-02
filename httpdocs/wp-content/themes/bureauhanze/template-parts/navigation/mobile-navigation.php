<div class="nav">
    <nav class="nav__content">
        <div class="container">
            <div class="nav__header">
                <button id="nav--close" class="close">&#10005;</button>
            </div>
            <nav class="nav__links">
                <?php
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main'
                    ) 
                ); 
                ?>
            </nav>
        </div>
    </nav>
</div>
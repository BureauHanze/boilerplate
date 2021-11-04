<div id="page-overlay" class="page-overlay"></div>

<div class="nav__container">
    <nav class="nav__content">
        <div class="container">
            <div class="nav__header">
                <button id="close_nav" class="close">×</button>
            </div>
            <div class="nav__links">
                <?php
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'main'
                    ) 
                ); 
                ?>
            </div>

        </div>
    </nav>
</div>
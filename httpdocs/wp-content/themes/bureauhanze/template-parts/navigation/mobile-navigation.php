<div id="page-overlay" class="page-overlay"></div>

<div class="nav">
    <nav class="nav__content">
        <div class="container">
            <div class="nav__header">
                <button id="nav--close" class="close">×</button>
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
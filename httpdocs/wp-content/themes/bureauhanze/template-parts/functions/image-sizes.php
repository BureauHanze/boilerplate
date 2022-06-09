<?php

// add_image_size ( string $name, int $width, int $height, bool|array $crop = false )
add_image_size( 'hero', 1920, 800, true  );
add_image_size( 'hero-page', 1920, 640, true  );
add_image_size( 'hero-sinlge', 1920, 640, true  );

// Cards
add_image_size( 'card', 640, 480, true  );

// Favicons (automatic generate)
add_image_size( 'favicon', 16, 16, false  );
add_image_size( 'favicon-chrome', 192, 192, false  );
add_image_size( 'favicon-apple', 180, 180, false  );
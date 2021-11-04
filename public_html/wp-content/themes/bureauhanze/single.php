<?php


get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php 
		if ( get_the_content() ) {
			get_template_part( 'template-parts/sections/content');
		} 

		if(is_singular('projecten')) :

			$images = get_field('projects_image_gallery');
			$size = 'full';
			if( $images ): ?>
			<section class="projecs-images">
				<div class="container">
					<div class="projecs-images__container">
						<?php foreach( $images as $image_id ): ?>
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
			<?php 
			endif;

			$projectembed = get_field('project_embed');
			if($projectembed) : ?>
			<section class="project-embed">
				<div class="container"> 
					<?php
					the_field('project_embed'); ?>
				</div>
			</section>
			<?php
			endif;

		endif;

		get_template_part( 'template-parts/sections/contact');
		
		get_sidebar(); ?>

<?php
get_footer();

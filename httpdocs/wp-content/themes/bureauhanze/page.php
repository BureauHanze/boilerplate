<?php
get_header(); ?>


<main id="main" class="site-main" role="main">
	<div class="page__wrapper">

		<?php if ( get_the_content() ) { ?>
		<div class="container">
			<div class="row">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
				endif;
				?>
			</div>
		</div>
		<?php } ?>

	</div> <!-- page wrapper -->
</main>






<?php
get_footer();


		<footer class="footer">
			<div class="container">

				<div class="footer__top">
					<div class="footer__logo">
						<?php
						$contactlogo = get_field('contactLogo', 'option');
						if ($contactlogo) : ?>
							<?php the_field('contactLogo', 'option'); ?></p>
						<?php
						endif; ?>
					</div>
					<div class="top__contact">
						<h4 class="footer__heading">Contact</h4>

						<?php
						$contactaddress = get_field('contactAddress', 'option');
						if ($contactaddress) : ?>
							<p><?php the_field('contactAddress', 'option'); ?></p>
						<?php
						endif; ?>

						<?php
						$contactpostal = get_field('contactPostal', 'option');
						if ($contactpostal) : ?>
							<p>
								<?php the_field('contactPostal', 'option');
								$contactplace = get_field('contactPlace', 'option');
								if ($contactplace) : ?>
									<?php the_field('contactPlace', 'option');
								endif; ?>
							</p>
						<?php
						endif; ?>

						<?php
						$contactcoutry = get_field('contactCountry', 'option');
						if ($contactcoutry) : ?>
							<p><?php the_field('contactCountry', 'option'); ?></p>
						<?php
						endif; ?>

						<?php
						$contactmail = get_field('contactMail', 'option');
						if($contactmail):?>
						<a class="main-navigation__mail contact-mail" href="<?php echo $contactmail['url']; ?>" target="<?php echo $contactmail['target']; ?>" title="<?php echo $contactmail['title']; ?>"><?php get_template_part( 'assets/svg/envelope'); echo $contactmail['title']; ?></a>
						<?php
						endif; ?>

						<?php
						$contactphone = get_field('contactPhone', 'option');
						if($contactphone):?>
						<a class="main-navigation__phone contact-phone" href="<?php echo $contactphone['url']; ?>" target="<?php echo $contactphone['target']; ?>" title="<?php echo $contactphone['title']; ?>"><?php get_template_part( 'assets/svg/phone'); echo $contactphone['title']; ?></a>
						<?php
						endif; ?>

					</div>
					<div class="top__content">
						<h4 class="footer__heading">
						<?php
						$footermainheading = get_field('footer_heading_main', 'option');
						if($footermainheading):?>
						<?php the_field('footer_heading_main', 'option'); ?>
						</h4>
						<?php
						else : ?>
						<p>Footer heading</p>
						<?php
						endif; ?>


						<?php
						$footerparagraph = get_field('footer_paragraph', 'option');
						if($footerparagraph):?>
						<p><?php the_field('footer_paragraph', 'option'); ?></p>
						<?php
						else : ?>
						<p>Nog geen tekst toegevoegd</p>
						<?php
						endif; ?>
					</div>
					<div class="top__links">
						<h4 class="footer__heading">Handige links</h4>
						<a class="btn btn-footer" href="/longpack-machines" title="Longpack Machines">Longpack Machines</a>
						<a class="btn btn-footer" href="/referenties" title="Referenties">Referenties</a>
						<a class="btn btn-footer" href="/Projecten" title="Projecten">Projecten</a>
						<a class="btn btn-footer" href="/longpack-machines" title="Longpack Machines">Over ons</a>
					</div>
				</div>
			</div>

			<div class="footer__bottom">
				<div class="container">
					<div class="bottom__copyright">
						<p>
							&copy; 		
							<?php
							$contactcompany = get_field('contactCompany', 'option');
							if ($contactcompany) : ?>
								<?php the_field('contactCompany', 'option');
							endif; ?> 
							<?php the_date('Y'); ?>
						</p>
					</div>
					<div class="bottom__links">
						<a href="/algemene-voorwaarden">Algemene voorwaarden</a><span>|</span>
						<a href="/privacy-statement">Privacy statement</a>
						<button id="scrollToTop" class="to-top" onclick="scrollToTop()"></button>
					</div>
				</div>
			</div>

		</footer><!-- #colophon -->

	</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

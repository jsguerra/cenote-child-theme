		</div><!-- .tg-container -->
	</div><!-- #content -->

	<?php
	// Show related post if enabled.
	if ( true === get_theme_mod( 'cenote_single_enable_related_post', true ) && is_single() ) {
		get_template_part( 'template-parts/related/related', 'post' );
	}
	?>
	<footer id="colophon" class="site-footer tg-site-footer <?php cenote_footer_class(); ?>">
		<div class="tg-footer-top">
			<div class="tg-container">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div><!-- .tg-footer-top -->

		<div class="tg-footer-bottom">
			<div class="tg-container">
				<div class="tg-footer-bottom-container tg-flex-container">
					<div class="tg-footer-bottom-left">
            <div class="site-info">
              <?php
                /* translators: 1: Current Year, 2: Blog Name 3: Theme Developer 4: WordPress. */
                printf( esc_html__( 'Copyright %1$s %2$s All Right Reserved.', 'cenote' ), esc_attr( date( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) );
              ?>
            </div><!-- .site-info -->
					</div><!-- .tg-footer-bottom-left -->
					<div class="tg-footer-bottom-right">
					</div><!-- .tg-footer-bottom-right-->
				</div><!-- .tg-footer-bootom-container-->
			</div>
		</div><!-- .tg-footer-bottom -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php
do_action( 'cenote_after_footer' );
wp_footer();
?>

</body>
</html>

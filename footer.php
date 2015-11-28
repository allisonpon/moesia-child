<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Moesia
 */
?>

  <?php tha_content_bottom(); ?>
  </div><!-- #content -->
  <?php tha_content_after(); ?>
  
  <?php tha_footer_before(); ?>
  <?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
    <?php get_sidebar('footer'); ?>
  <?php endif; ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_sidebar(); ?>
    <?php tha_footer_top(); ?>
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ruby-roo' ) ); ?>"><?php printf( __( 'Powered by %s', 'ruby-roo' ), 'WordPress' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( esc_html__( 'Made with &hearts; by %1$s', 'ruby-roo' ), 'Allison' ); ?>
    </div><!-- .site-info -->
    <?php tha_footer_bottom(); ?>
  </footer><!-- #colophon -->
  <?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moesia
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php moesia_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->

  <footer class="entry-footer">
    <?php
      /* translators: used between list items, there is a space after the comma */
      $category_list = get_the_category_list( __( ', ', 'moesia' ) );

      /* translators: used between list items, there is a space after the comma */
      $tag_list = get_the_tag_list( '', __( ', ', 'moesia' ) );

      if ( ! moesia_categorized_blog() ) {
        // This blog only has 1 category so we just need to worry about tags in the meta text
        if ( '' != $tag_list ) {
          $meta_text = '<i class="fa fa-tag"></i> %2$s' . '<i class="fa fa-link"></i>' . __( '<a href="%3$s" rel="bookmark"> permalink</a>.', 'moesia' );
        } else {
          $meta_text = '<span><i class="fa fa-link"></i>' . __( '<a href="%3$s" rel="bookmark"> permalink</a>', 'moesia' ) . '</span>';
        }

      } else {
        // But this blog has loads of categories so we should probably display them here
        if ( '' != $tag_list ) {
          $meta_text = '<span><i class="fa fa-folder"></i> %1$s</span>' . '<span><i class="fa fa-tag"></i> %2$s</span>' . '<span><i class="fa fa-link"></i>' . __( '<a href="%3$s" rel="bookmark"> permalink</a>', 'moesia' ) . '</span>';
        } else {
          $meta_text = '<span><i class="fa fa-folder"></i> %1$s</span>' . '<span><i class="fa fa-link"></i>' . __( '<a href="%3$s" rel="bookmark"> permalink</a>', 'moesia' ) . '</span>';
        }

      } // end check for categories on this blog

      printf(
        $meta_text,
        $category_list,
        $tag_list,
        get_permalink()
      );
    ?>

    <?php edit_post_link( __( 'Edit', 'moesia' ), '<span class="edit-link"><i class="fa fa-edit"></i>&nbsp;', '</span>' ); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
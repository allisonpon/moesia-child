<?php
/**
 * @package Moesia
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix big-image'); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-thumb">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
        <div class="thumb-icon"><i class="fa fa-globe"></i></div>
        <?php the_post_thumbnail('moesia-thumb'); ?>
      </a>
      <div class="entry-cat">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
          <?php
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list( __( ', ', 'moesia' ) );
            if ( $categories_list && moesia_categorized_blog() ) :
          ?>
          <div class="cat-links top-bar-match">
            <?php echo $categories_list; ?>
          </div>
          <?php endif; // End if categories ?>
        <?php endif; // End if 'post' == get_post_type() ?>
      </div><!-- .entry-footer -->
    </div>
  <?php endif; ?>

  <div class="post-content">
    <header class="entry-header">
      <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

      <?php if ( 'post' == get_post_type() ) : ?>
      <div class="entry-meta">
        <?php moesia_posted_on(); ?>
      </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-summary">
      <?php if ( (get_theme_mod('full_content') == 1) && is_home() ) : ?>
        <?php the_content(); ?>
      <?php else : ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
    </div><!-- .entry-content -->
  </div>

</article><!-- #post-## -->
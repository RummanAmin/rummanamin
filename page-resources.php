<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band main">
    <section class="layout">
      <ul class="list-grid">
        <?php get_template_part( 'content', 'resources' ); ?>
      </ul>
    </section>
  </div>

  <div class="band pagination">
    <section class="layout"><?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) : ?>
        <?php posts_nav_link(); ?>
      <?php endif; ?></section>
  </div>

<?php get_footer(); ?>

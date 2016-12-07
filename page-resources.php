<?php get_header(); ?>

  <?php get_template_part('content', 'blogintro'); ?>

  <div class="band poster">
    <section class="layout">
      <article>
        <?php $the_query = new WP_Query( 'category_name=resources&showposts=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
        <?php endwhile; wp_reset_postdata(); ?>
      </article>
    </section>
  </div>

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

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    'paged' => $paged,
    'ignore_sticky_posts' => 1,
    'post_type' => 'post'
  );

  query_posts($args);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <h5><?php the_category( ', ' ); ?> | <?php the_date(); ?></h5>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="button">Read more</a>
    </li>

  <?php endwhile; wp_reset_postdata(); else : ?>

  <div class="band main">
    <section class="layout">

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

    </section>
  </div>

<?php endif; ?>

<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$custom_query_args = array(
    'post_type' => 'project',
    'paged' => $paged,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date', // modified | title | name | ID | rand
    'showposts' => '3'
);
$custom_query = new WP_Query( $custom_query_args );

if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

    <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <article>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h5><?php the_tags(' '); ?></h5>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button">Read more</a>
      </article>
      <article>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('project-thumb');?></a>
      </article>
    </li>

    <?php endwhile; wp_reset_postdata(); ?>

    <div class="pagination">
      <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
        <nav class="prev-next-posts">
          <?php echo get_previous_posts_link( '&laquo; Previous Page' ); ?>
          <?php echo get_next_posts_link( 'Next Page &raquo;', $custom_query->max_num_pages ); ?>
        </nav>
      <?php endif; ?>
    </div>

<?php else: ?>

  <div class="band main">
    <section class="layout">

    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

    </section>
  </div>

<?php endif; ?>

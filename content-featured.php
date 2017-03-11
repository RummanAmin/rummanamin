<?php

$detect = new Mobile_Detect;

?>

<?php if ( !$detect->isMobile() ): ?>

<div class="band poster">
  <section class="layout">
    <article>
      <?php $the_query = new WP_Query( 'showposts=1&cat=-6' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
      <?php endwhile; wp_reset_postdata(); ?>
    </article>
  </section>
</div>

<?php endif; ?>

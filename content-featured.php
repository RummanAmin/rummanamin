<?php

$detect = new Mobile_Detect;

?>

<?php if ((!$detect->isMobile()) ): ?>


  <?php if (is_page( 16 )): ?>

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

  <?php else: ?>

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

<?php endif; ?>

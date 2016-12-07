<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band projects">
    <section class="layout">
      <ul class="list-grid">
        <?php $the_query = new WP_Query( 'showposts=3&post_type=project' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <li class="move-right">
            <article>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('project-thumb');?></a>
            </article>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <h5><?php the_tags(' '); ?></h5>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="button">Read more</a>
            </article>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <ul class="list-grid">
        <?php $the_query = new WP_Query( 'showposts=3' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5><?php the_category( ', ' ); ?> | <?php the_date(); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>


<?php get_footer(); ?>

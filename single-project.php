<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php get_template_part('content', 'intro'); ?>

  <div class="band main">
    <section class="layout">
      <article class="post-content">
        <div class="content-ad-top"><?php get_template_part('content', 'ad'); ?></div>
        <?php the_content(); ?>
        <div class="content-ad-bottom"><?php get_template_part('content', 'ad'); ?></div>
      </article>
    </section>
  </div>

  <div class="band related-projects">
    <section class="layout">
      <ul class="list-grid">
        <?php
          $args = array(
          'post_type' => 'project',
          'post__not_in' => array($post->ID),
          'orderby'   => 'rand',
          'posts_per_page' => 3
          );
          $query = new WP_Query( $args );
          while ($query->have_posts()) : $query->the_post();
        ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5><?php the_tags(' '); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>

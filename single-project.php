<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="band poster">
    <section class="layout">
      <article>
        <?php the_post_thumbnail();?>
      </article>
    </section>
  </div>

  <div class="band project-overview">
    <section class="layout">
      <article class="post-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
      <?php if( get_field('logo') ): ?>
        <article>
        	<img src="<?php the_field('logo'); ?>" />
        </article>
      <?php endif; ?>
    </section>
  </div>


  <div class="band main">
    <section class="layout">
      <article>
        <ul class="project-colours">
          <li style="background-color:<?php echo get_post_meta($post->ID, 'colour_1', true); ?>"></li>
          <li style="background-color:<?php echo get_post_meta($post->ID, 'colour_2', true); ?>"></li>
          <li style="background-color:<?php echo get_post_meta($post->ID, 'colour_3', true); ?>"></li>
          <li style="background-color:<?php echo get_post_meta($post->ID, 'colour_4', true); ?>"></li>
        </ul>
      </article>
    </section>
  </div>

  <div class="band project-shot" style="background-color:<?php echo get_post_meta($post->ID, 'colour_1', true); ?>">
    <section class="layout">
      <img src="<?php echo the_field('screenshot'); ?>" />
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

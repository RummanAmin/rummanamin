<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php get_template_part('content', 'background-intro'); ?>

  <div class="band main">
    <section class="layout">
      <div class="post-content move-right">

        <article class="post-split">
          <div id="author-box">
            <div class="author-image"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
            <div class="author-info">
              <p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>

              <?php if (!$detect->isMobile() || $detect->isTablet() ): ?>
                <p class="author-share"><a href="https://instagram.com/rumman.amin">Follow me on Instagram →</a></p>
              <?php endif; ?>
            </div>
          </div>
          <div class="post-info">
            <h5>By <?php the_author_link(''); ?> on <?php the_date('jS M o'); ?> from <?php the_category(' ')?></h5>
          </div>
        </article>

        <article class="post-split">
          <div id="post-main"><?php the_content(); ?></div>
          <div class="insert-post-ads">
            <?php get_template_part( 'content', 'ad' ); ?>
          </div>
          <?php get_template_part( 'content', 'share' ); ?>
          <?php get_template_part( 'content', 'newsletter' ); ?>


          <div class="post-comments">
            <h5>Comments</h5>

            <?php
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>
          </div>
        </article>

      </div>
    </section>
  </div>

  <div class="band related-projects">
    <section class="layout">
      <ul class="list-grid">
        <?php
          $args = array(
          'post_type' => 'post',
          'post__not_in' => array($post->ID),
          'posts_per_page' => 3
          );
          $query = new WP_Query( $args );
          while ($query->have_posts()) : $query->the_post();
        ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5><?php the_category(' '); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </section>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>

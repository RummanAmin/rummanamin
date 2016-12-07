<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php get_template_part('content', 'intro'); ?>

  <div class="band main">
    <section class="layout">
      <article class="post-content">
        <?php the_content(); ?>
        <div id="author-box">
          <div class="author-main">
            <article class="author-img">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
            </article>
            <article class="author-info">
              <h4><?php the_author(); ?></h4>
              <p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>
              <a href="/about">Read more</a>
            </article>
          </div>
        </div>
        <div class="tags">
          <p><span>Category:</span> <?php the_category(' '); ?></p>
          <p><span>Tags:</span> <?php the_tags( '', ', '); ?></p>
        </div>
        <div class="share-post">
          <h4>Share this Post</h4>
          <p>Thank you for visiting the BigrRedPod. Please help us by sharing this post with your friends!</p>
          <ul class="share-links">
            <li>
              <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=rumantweets&related=<?php echo urlencode("Digital Project Management, Web Design, Web Development"); ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="link-tw">Twitter</a>
            </li>
            <li>
              <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-fb">Facebook</a>
            </li>
            <li>
              <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-gp">Google +</a>
            </li>
            <li>
              <a target="_blank" href="https://www.tumblr.com/share?v=3&u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-tm">Tumblr</a>
            </li>
          </ul>
        </div>
        <div class="post-nav">
          <?php the_post_navigation( array (
            'prev_text' => __( '<span>Previous:</span> %title' ),
            'next_text' => __( '<span>Next:</span> %title' ),
            'screen_reader_text' => __( 'Navigation' ),
          )); ?>
        </div>
      </article>
    </section>
  </div>

  <?php
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>

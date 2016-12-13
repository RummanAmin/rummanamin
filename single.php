<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php get_template_part('content', 'intro'); ?>

  <div class="band main">
    <section class="layout">
      <article class="post-content">
        <?php the_content(); ?>
        <div id="inline-newsletter">
          <div class="inline-newsimage">
            <?php the_post_thumbnail();?>
          </div>
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="//rummanamin.us7.list-manage.com/subscribe/post?u=ba090bbe727834c5b13f46e0f&amp;id=f2c530e56d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              	<h4>Sign up for Updates</h4>
                <p class="newsletter-message">Subscribe to the Monthly Newsletter for latest posts, FREE Resources and updates on my eBook.</p>
                <div class="mc-field-group">
                	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                </label>
                	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
              	<div id="mce-responses" class="clear">
              		<div class="response" id="mce-error-response" style="display:none"></div>
              		<div class="response" id="mce-success-response" style="display:none"></div>
              	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ba090bbe727834c5b13f46e0f_f2c530e56d" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div>
          <!--End mc_embed_signup-->
        </div>
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

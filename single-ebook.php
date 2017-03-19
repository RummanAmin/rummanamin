<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="band intro">
      <section class="layout">
        <!-- <h1><?php the_title(); ?></h1>
        <h2><?php echo get_post_meta($post->ID, 'introduction', true); ?></h2>
        <a href="#download" class="button">Download</a> -->
        <img src="<?php the_field('cover'); ?>" class="book-cover" />
      </section>
    </div>

    <div class="band main">
      <section class="layout">
        <div class="post-content move-right">

          <article class="post-split">
            <div id="author-box">
              <div class="author-image"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
              <div class="author-info">
                <p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>

                <p class="author-share"><a href="https://instagram.com/rumman.amin">Follow me on Instagram →</a></p>
              </div>
            </div>
            <div class="post-info">
              <h5>By <?php the_author_link(''); ?> on <?php the_date('jS M o'); ?> from <?php the_category(' ')?></h5>
            </div>
          </article>

          <article class="post-split">
            <div id="post-main">
              <h2><?php echo get_post_meta($post->ID, 'introduction', true); ?></h2>
              <?php the_content(); ?>
            </div>
            <div class="insert-post-ads">
              <?php get_template_part( 'content', 'ad' ); ?>
            </div>
            <div class="share-post">
              <h4>Share this Post</h4>
              <p>Thank you for reading this post. Please help me by sharing it with your friends!</p>
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
            <div id="inline-newsletter">
              <img src="<?php the_field('cover'); ?>" class="book-cover" />
              <!-- Begin MailChimp Signup Form -->
              <div id="mc_embed_signup">
                <form action="//rummanamin.us7.list-manage.com/subscribe/post?u=ba090bbe727834c5b13f46e0f&amp;id=f2c530e56d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                  	<h4>Sign up for Updates</h4>
                    <p class="newsletter-message">Subscribe to the Monthly Newsletter for latest posts, FREE Resources and updates on my eBook.</p>
                    <div class="mc-field-group">
                    	<input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
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
          </article>

        </div>
      </section>
    </div>

    <div class="band related-projects">
      <section class="layout">
        <ul class="list-grid">
          <?php
            $args = array(
            'post_type' => 'ebook',
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

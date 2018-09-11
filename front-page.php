<?php get_header(); ?>

  <?php get_template_part('content', 'background-intro'); ?>

  <div class="band main first">
    <section class="layout">
      <ul class="list-grid">
        <?php
          $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2
          );
          $query = new WP_Query( $args );
          while ($query->have_posts()) : $query->the_post();
        ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5><?php the_category( ', ' ); ?> | <?php the_date(); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read more</a>
          </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <li>
          <?php if (!$detect->isMobile() || $detect->isTablet() ): ?>
            <ul class="simple-post-list">
            <?php
              $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'offset' => 2
              );
              $query = new WP_Query( $args );
              while ($query->have_posts()) : $query->the_post();
            ?>
              <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <h5 id="remove-header"><?php the_category( ', ' ); ?> | <?php the_date(); ?></h5>

              </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
        </li>
      </ul>
    </section>
  </div>

  <div class="band home-ebook">
    <section class="layout">
        <?php
        $args = array(
        'post_type' => 'ebook',
        'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        while ($query->have_posts()) : $query->the_post();
      ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <article>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h5><?php the_category( ', ' ); ?> | <?php the_date(); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Download</a>
          </article>

          <article>
            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('cover'); ?>" class="book-cover" /></a>
          </article>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>

  <div class="band floating-box">
    <section class="layout">
      <article>
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
      </article>
      <article></article>
    </section>
  </div>

  <div class="band projects">
    <section class="layout">
      <ul class="list-grid">
        <?php $the_query = new WP_Query( 'showposts=1&post_type=project&offset=2' ); ?>
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

<?php get_footer(); ?>

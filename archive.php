<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="band intro">
      <section class="layout">
        <h1><?php the_archive_title(); ?></h1>
        <h2><?php the_archive_description(); ?></h2>
      </section>
    </div>

		<div class="band main">
      <section class="layout">
				<article class="main-content">
				<ul class="list-grid">
	      	<?php while ( have_posts() ) : the_post(); ?>
						<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb');?></a>
				      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				      <h5><?php the_category( ', ' ); ?></h5>
				      <?php the_excerpt(); ?>
				      <a href="<?php the_permalink(); ?>" class="button">Read more</a>
				    </li>
        	<?php	endwhile; ?>
				</ul>
        <div id="inline-newsletter">
          <div class="inline-newsimage">
            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image10.jpg" alt="rummanamin">
          </div>
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="//rummanamin.us7.list-manage.com/subscribe/post?u=ba090bbe727834c5b13f46e0f&amp;id=f2c530e56d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <h4>Sign up for Updates</h4>
                <p class="newsletter-message">Subscribe to the Newsletter for Posts, Resources and Updates</p>
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
				</article>
				<article class="side-content">
					<div class="square-ad">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		         <!-- Default -->
		          <ins class="adsbygoogle"
		            style="display:block"
		            data-ad-client="ca-pub-7364953934710317"
		            data-ad-slot="5572598182"
		            data-ad-format="auto">
		          </ins>
		        <script>
		        (adsbygoogle = window.adsbygoogle || []).push({});
		        </script>
					</div>
					<?php get_sidebar(); ?>
          <h4 class="widget-title">Social Media</h4>
          <div class="social-links">
            <ul>
              <li><a href="https://www.instagram.com/bytebubble" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram.svg" alt="Instagram"></a></li>
              <li><a href="https://www.twitter.com/rumantweets" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter.svg" alt="Twitter"></a></li>
              <li><a href="https://www.facebook.com/ruman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook.svg" alt="Facebook"></a></li>
              <li><a href="https://uk.linkedin.com/in/rummanamin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linkedin.svg" alt="LinkedIn"></a></li>
            </ul>
          </div>
				</article>
			</section>
    </div>

  <?php wp_reset_postdata(); ?>
	<?php	else : ?>

		<div class="band intro">
      <section class="layout">
        <h1>Archive</h1>
        <h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'bigredpod' ); ?></h2>
      </section>
    </div>

    <div class="band main">
      <section class="layout">
        <article class="main-content">
          <p>Sorry, no posts matched your criteria. Please use to navigation on the right, <a href="/home">return home</a> or <a href="/contact">get in touch</a> if you have any questions.</p>
          <div id="inline-newsletter">
            <div class="inline-newsimage">
              <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image10.jpg" alt="rummanamin">
            </div>
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="//rummanamin.us7.list-manage.com/subscribe/post?u=ba090bbe727834c5b13f46e0f&amp;id=f2c530e56d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <h4>Sign up for Updates</h4>
                  <p class="newsletter-message">Subscribe to the Newsletter for Posts, Resources and Updates</p>
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
        </article>
        <article class="side-content">
					<div class="square-ad">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		         <!-- Default -->
		          <ins class="adsbygoogle"
		            style="display:block"
		            data-ad-client="ca-pub-7364953934710317"
		            data-ad-slot="5572598182"
		            data-ad-format="auto">
		          </ins>
		        <script>
		        (adsbygoogle = window.adsbygoogle || []).push({});
		        </script>
					</div>
          <?php get_sidebar(); ?>
          <h4 class="widget-title">Social Media</h4>
          <div class="social-links">
            <ul>
              <li><a href="https://www.instagram.com/bytebubble" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram.svg" alt="Instagram"></a></li>
              <li><a href="https://www.twitter.com/rumantweets" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter.svg" alt="Twitter"></a></li>
              <li><a href="https://www.facebook.com/ruman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook.svg" alt="Facebook"></a></li>
              <li><a href="https://uk.linkedin.com/in/rummanamin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linkedin.svg" alt="LinkedIn"></a></li>
            </ul>
          </div>
        </article>
      </section>
    </div>

	<?php endif; ?>

<?php get_footer(); ?>

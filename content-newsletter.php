<?php $detect = new Mobile_Detect; ?>

<?php if (is_singular( $post_types = 'ebook' )): ?>

  <div id="inline-newsletter">
    <?php if ((!$detect->isMobile()) ): ?>
      <img src="<?php the_field('cover'); ?>" class="book-cover" />
    <?php endif; ?>
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

<?php else: ?>

  <div id="inline-newsletter">
    <?php if ((!$detect->isMobile()) ): ?>
      <?php get_template_part( 'content', 'background' ); ?>
    <?php endif; ?>
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

<?php endif; ?>

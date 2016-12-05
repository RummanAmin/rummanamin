<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band main">
    <section class="layout">
      <article>
        <h4>Form</h4>
        <p>Please go through the form and try to complete all the fields with as much information as you can. This will help me give you the best options available.</p>
      </article>
      <article class="contact-info">
        <h4>Direct</h4>
        <p>Alternatively, you can use a more direct approach.</p>
        <ul>
          <li>E: <a href="mailto:info@rummanamin.co.uk?Subject=Hello">info@rummanamin.co.uk</a></li>
          <li>P: <a href="tel:07961916342" target="_self">+44 (0)79 619 16342</a></li>
        </ul>
      </article>
      <article>
        <h4>Social</h4>
        <p>Follow us on Social Media to get all our updates.</p>
        <div class="social-links">
          <ul>
            <li><a href="https://www.instagram.com/bytebubble"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram.svg" alt="Instagram"></a></li>
            <li><a href="https://www.twitter.com/rumantweets"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/ruman.amin"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://uk.linkedin.com/in/rummanamin"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linkedin.svg" alt="LinkedIn"></a></li>
          </ul>
        </div>
      </article>
    </section>
  </div>

  <div class="band extra">
    <section class="layout">
      <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
    </section>
  </div>

  <div class="instagram">
    <section>
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </section>
  </div>


<?php get_footer(); ?>

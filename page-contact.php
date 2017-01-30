<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band main">
    <section class="layout">
      <article>
        <h4>Form</h4>
        <p>Please try to complete all the fields with as much information as possible. This will help me give you the most accurate answers and offer the best options available.</p>
      </article>
      <article class="contact-info">
        <h4>Direct</h4>
        <p>Alternatively, you can use a more direct approach through email.</a></p>
        <!-- <p>Alternatively, you can use a more direct approach through email or <a href="http://pph.me/rummanamin" target="_blank">PeoplePerHour.</a></p> -->
        <ul>
          <li><a href="mailto:hello@rummanamin.co.uk?Subject=Hello">hello@rummanamin.co.uk</a></li>
          <!-- <li><a href="http://pph.me/rummanamin" target="_blank">pph.me/rummanamin</a></li> -->
        </ul>
      </article>
      <article>
        <h4>Social</h4>
        <p>Follow me on social media to get all the latest updates.</p>
        <div class="social-links">
          <ul>
            <li><a href="https://www.instagram.com/rumman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram.svg" alt="Instagram"></a></li>
            <li><a href="https://www.twitter.com/rumantweets" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/ruman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://uk.linkedin.com/in/rummanamin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linkedin.svg" alt="LinkedIn"></a></li>
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

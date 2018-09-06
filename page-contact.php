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
        <ul>
          <li><a href="mailto:hello@rummanamin.co.uk?Subject=Hello">hello@rummanamin.co.uk</a></li>
        </ul>
      </article>
      <article>
        <h4>Social</h4>
        <p>Follow me on social media to get all the latest updates.</p>
        <?php get_template_part( 'content', 'social' ); ?>
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

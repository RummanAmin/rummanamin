<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band second">
    <section class="layout">
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/pencil.svg" alt="">
        <h3>Easy to change</h3>
        <p>These documents are small, concise and available online, so changes are encouraged and easy to implement by anyone.</p>
      </article>
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/chat.svg" alt="">
        <h3>Promote discussions</h3>
        <p>At the core of every project is comms and these artefacts will create a catalyst for discussion between all stakeholders.</p>
      </article>
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/clipboard.svg" alt="">
        <h3>Cover all bases</h3>
        <p>Whether you're an Agency or a Freelancer, this pack contains all the documents you'll need to deliver a successful project.</p>
      </article>
    </section>
  </div>

  <div class="band third">
    <section class="layout">
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image08.jpg" alt="">
      </article>
      <article>
        <h3>What's included</h3>
        <p>These documents cover Project Management, Design, Analysis, Research, Legal and Finance - but avoid being complicated. We've added some instructions to help just in case.</p>
        <ul>
          <li>Project Overview</li>
          <li>Questionnaire</li>
          <li>User Stories</li>
          <li>Style Tile</li>
          <li>Wireframes</li>
          <li>Contract</li>
          <li>Invoice</li>
        </ul>
        <div class="download">
          <a href="http://ul.to/z36bgxu5" class="button">Download</a>
          <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=rumantweets; ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="button">Share</a>
        </div>
      </article>
    </section>
  </div>

  <div class="band fourth">
    <section class="layout move-right">
      <article>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/backgrounds/Image02.jpg" alt="">
      </article>
      <article>
        <h3>How we use it</h3>
        <p>We've been using these documents in an Agile development process for over 5 years now. It's important to note that this is done in an Iterative way. Documents are fluid and should evolve over time.</p>
        <p>We usually start with a conversation with the client and then ask them to complete the questionnaire. This usually gives us enough to put together a high level overview.</p>
        <p>Once approved, we break down the User Stories and concurrently work on Wireframes and Style Tile. The next logical step would be to create a prototype and build on that.</p>
        <div class="download">
          <a href="http://ul.to/z36bgxu5" class="button">Download</a>
          <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=rumantweets; ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="button">Share</a>
        </div>
      </article>
    </section>
  </div>

  <div class="band testimonials">
    <section class="layout">
      <article>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nemo.</blockquote>
      </article>
      <article>
        <blockquote>Laborum iste, modi impedit explicabo porro. Quos velit odio mollitia ad placeat.</blockquote>
      </article>
      <article>
        <blockquote>Libero illum quidem laudantium quos, nisi ab odio, expedita quasi voluptates no.</blockquote>
      </article>
      <article>
        <blockquote>Nobis culpa in voluptatibus at, quasi pariatur hic sit possimus. Iusto.</blockquote>
      </article>
    </section>
  </div>

<?php get_footer(); ?>

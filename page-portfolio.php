<?php get_header(); ?>

  <?php get_template_part('content', 'pageintro'); ?>

  <div class="band projects">
    <section class="layout">
      <ul class="list-grid">
        <?php get_template_part( 'content', 'portfolio' ); ?>
      </ul>
    </section>
  </div>
  
<?php get_footer(); ?>

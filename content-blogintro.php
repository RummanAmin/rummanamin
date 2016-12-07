<div class="band intro">
  <section class="layout">
    <h1><?php the_title(); ?></h1>
    <h2><?php echo get_post_meta($post->ID, 'introduction', true); ?></h2>
  </section>
</div>

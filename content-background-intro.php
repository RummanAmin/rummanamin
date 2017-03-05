<?php if (has_post_thumbnail( $post->ID ) ): ?>

 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 $image = $image[0]; ?>

 <?php else :

 $image = get_bloginfo( 'stylesheet_directory') . '/img/backgrounds/download2.jpg'; ?>

<?php endif; ?>


<div class="band background-intro" style="background-image: radial-gradient(circle at 44% 37%, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.4)), url('<?php echo $image; ?>')">
  <section class="layout">
    <article>
      <h1><?php the_title(); ?></h1>
      <h2><?php the_excerpt(); ?></h2>
    </article>
  </section>
</div>

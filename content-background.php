<?php if (has_post_thumbnail( $post->ID ) ): ?>

 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 $image = $image[0]; ?>

 <?php else :

 $image = get_bloginfo( 'stylesheet_directory') . '/img/backgrounds/download2.jpg'; ?>

<?php endif; ?>

<div class="inline-newsimage" style="background-image: url('<?php echo $image; ?>')" ></div>

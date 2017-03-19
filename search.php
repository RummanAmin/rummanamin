<?php get_header(); ?>

  <?php if ( have_posts() ) : ?>
      <div class="band intro">
        <section class="layout">
          <h2>Search results for '<?php the_search_query(); ?>'</h2>
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
            <?php get_template_part( 'content', 'newsletter' ); ?>
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
            <?php get_template_part( 'content', 'social' ); ?>
  				</article>
        </section>
      </div>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>

      <div class="band intro">
        <section class="layout">
          <h2>Search results for '<?php the_search_query(); ?>'</h2>
        </section>
      </div>

      <div class="band main">
      <section class="layout">
        <article class="main-content">
          <p>Sorry, no posts matched your criteria. Please use to navigation on the right, <a href="/home">return home</a> or <a href="/contact">get in touch</a> if you have any questions.</p>
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
          <?php get_template_part( 'content', 'social' ); ?>
				</article>
      </section>
    </div>

     <?php endif; ?>


<?php get_footer(); ?>

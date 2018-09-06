<?php get_header(); ?>

  <div class="band intro">
    <section class="layout">
      <h1>404</h1>
      <h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'bigredpod' ); ?></h2>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article class="main-content">
        <p>Sorry, no posts matched your criteria. Please use to navigation on the right, <a href="/home">return home</a> or <a href="/contact">get in touch</a> if you have any questions.</p>
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
        <?php get_template_part( 'content', 'newsletter' ); ?>
      </article>
    </section>
  </div>

<?php get_footer(); ?>

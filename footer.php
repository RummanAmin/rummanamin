      <div class="band bottom">
        <footer class="layout">
          <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.svg" alt="rummanamin"></a>

          <a href="mailto:hello@rummanamin.co.uk?Subject=Hello">hello@rummanamin.co.uk</a><br>
          <!-- <a href="http://pph.me/rummanamin" target="_blank">pph.me/rummanamin</a> -->

          <div class="social-links">
            <ul>
              <li><a href="https://www.instagram.com/rumman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/instagram.svg" alt="Instagram"></a></li>
              <li><a href="https://www.twitter.com/rumantweets" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/twitter.svg" alt="Twitter"></a></li>
              <li><a href="https://www.facebook.com/ruman.amin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/facebook.svg" alt="Facebook"></a></li>
              <li><a href="https://uk.linkedin.com/in/rummanamin" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/icons/linkedin.svg" alt="LinkedIn"></a></li>
            </ul>
          </div>

          <p class="copyright">Copyright &copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url() ) ?>">Rumman Amin.</a> All Rights Reserved.</p>
        </footer>
      </div>

    </main>

    <a href="#cd-nav" class="cd-nav-trigger">Menu
      <span class="cd-nav-icon"></span>

      <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
      </svg>
    </a>

    <div id="cd-nav" class="cd-nav">
      <div class="cd-navigation-wrapper">
        <div class="cd-half-block">
          <h2>Navigation</h2>
          <nav>
            <?php
            $defaults = array(
              'container' => '',
              'theme_location' => 'mobile-menu'
            );
            wp_nav_menu ( $defaults );
            ?>
          </nav>
          <div class="mobile-nav-ad">
            <?php get_template_part('content', 'ad'); ?>
          </div>
        </div><!-- .cd-half-block -->
      </div> <!-- .cd-navigation-wrapper -->
    </div> <!-- .cd-nav -->

    <a id="go-top"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/scroll-up.svg"></a>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74088797-3', 'auto');
      ga('send', 'pageview');

    </script>

    <?php wp_footer(); ?>
  </body>
</html>

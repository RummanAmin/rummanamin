<?php $detect = new Mobile_Detect; ?>

      <div class="band bottom">
        <footer class="layout">
          <article>
            <h4>Contact</h4>
            <strong>Email:</strong> <a href="mailto:hello@rummanamin.co.uk?Subject=Hello">hello@rummanamin.co.uk</a><br>
            <p id="copyright">Copyright &copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url() ) ?>">Rumman Amin.</a> All Rights Reserved.<br><a href="/terms-conditions" target="_blank">Terms & Conditions</a>. <a href="/cookies-policy" target="_blank">Cookies Policy</a>. <a href="/privacy-policy" target="_blank">Privacy Policy</a>.</p>
          </article>
          <article>
            <h4>Social</h4>
            <ul>
              <li><a href="https://www.instagram.com/rumman.amin" target="_blank">Instagram</a></li>
              <li><a href="https://medium.com/@rumman" target="_blank">Medium</a></li>
              <li><a href="https://uk.linkedin.com/in/rummanamin" target="_blank">LinkedIn</a></li>
              <li><a href="https://www.twitter.com/rumantweets" target="_blank">Twitter</a></li>
            </ul>
          </article>
          <article>
            <?php if (!$detect->isMobile() || $detect->isTablet() ): ?>
              <a href="<?php echo esc_url( home_url() ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.svg" alt="rummanamin" class="footer-logo"></a>
            <?php endif; ?>
          </article>
        </footer>
      </div>

    </main>

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

    <script type="text/javascript" src="//s.skimresources.com/js/105188X1562073.skimlinks.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>

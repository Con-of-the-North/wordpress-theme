<?php
/* Main Footer File */
?>

<footer class="page-footer cotn-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <img src="<?php bloginfo('template_url') ?>/images/large_logo.gif" alt="Compass Rose" class="compass-rose-bottom">
                <div class="footer-location grey-text text-lighten-4">
                    <h4>February 15-17, 2019</h4>
                    <h4>Friday Noon to 2 AM</h4>
                    <h4>Saturday 8 AM to 2 AM</h4>
                    <h4>Sunday 8 AM to 10 PM</h4>
                    <h4>Crowne Plaza Minneapolis West</h4>
                </div>
                <div class="social-links">
                  <a href="https://www.facebook.com/groups/4957238705/">
                    <img src="<?php bloginfo('template_url') ?>/images/flogo-Hex-RGB-MedGrey-58.svg" width="36" height="36" border="0" alt="Facebook">
                  </a>
                  <a href="http://twitter.com/conofthenorth/">
                    <img src="<?php bloginfo('template_url') ?>/images/Twitter_Logo_WhiteOnBlue.svg" width="36" height="36" border="0" alt="Twitter">
                  </a>
                </div>
              </div>
              <div class="col l4 offset-l2 s12">
                <?php
                	wp_nav_menu($arg = array (
                    	'menu_class' => 'main-footer-navigation',
                    	'theme_location' => 'footer'
                	));
            	?>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Con of the North All Rights Reserved
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>
</body>

</html>
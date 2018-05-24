<?php
/* Main Footer File */
?>

<footer class="page-footer cotn-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Con of the North</h5>
                <div class="grey-text text-lighten-4">
                    <p>February 16-18, 2018<br>
                    Friday Noon to 2 AM<br>
                    Saturday 8 AM to 2 AM<br>
                    Sunday 8 AM to 10 PM<br>
                    Crowne Plaza Minneapolis West</p>
                </div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
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
            © 2004-2017 Con of the North All Rights Reserved
            </div>
          </div>
        </footer>
        <?php wp_footer(); ?>
</body>

</html>
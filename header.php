<?php
/* Main Header Template File*/
?>
<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="fixed-menu-bar register-wrapper">
            <img src="<?php bloginfo('template_url') ?>/images/large_logo.gif" alt="Compass Rose" class="compass-rose">
            <div id="menu-icon" class="btn">Menu</div>
            <nav class="clearfix main-navigation-container mobile-menu">
                <?php
                    wp_nav_menu($arg = array (
                        'menu_class' => 'main-navigation',
                        'theme_location' => 'primary',
                        'container_id' => 'cotn-menu',
                        'walker' => new CSS_Menu_Walker()
                    ));
                ?>
            </nav>
            <a href="https://registration.conofthenorth.org" class="register-now btn">Register Now</a>
        </div>
    </header>


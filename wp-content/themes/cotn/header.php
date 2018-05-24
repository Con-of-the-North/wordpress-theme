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
            <img src="<?php bloginfo('template_url') ?>/images/compass.png" alt="Compass Rose" class="compass-rose">
            <span class="header-title">Con of the North</span>
            <?php
                wp_nav_menu($arg = array (
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary',
                    'container_id' => 'cotn-menu',
                    'walker' => new CSS_Menu_Walker()
                ));
            ?>
            <div class="register-now btn">Register Now</div>
        </div>
    </header>


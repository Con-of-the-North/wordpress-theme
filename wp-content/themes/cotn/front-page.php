<?php
/* Main Template File*/
    get_header();
?>

<main class="main-content">
    <div class="main-title">
        <img src="<?php bloginfo('template_url') ?>/images/cotn-smaller.png" alt="Board Game" class="board-game">
        <div class="title-wrapper center-text">
            <img src="<?php bloginfo('template_url') ?>/images/new_logo_2019.svg" alt="Compass Rose" class="title-image">
            <span class="title-text">Twin Cities Longest Running Games Convention.</span>
                <div>
                    <p>February 15-17, 2019<br>
                    Friday Noon to 2 AM<br>
                    Saturday 8 AM to 2 AM<br>
                    Sunday 8 AM to 10 PM<br>
                    Crowne Plaza Minneapolis West</p>
                </div>
            <div class="center-text">
                <div class="register-now btn">Register Now</div>
            </div>
        </div>
    </div>
    <div class="home-column-wrapper">
        <?php get_sidebar('home-left'); ?>
        <?php get_sidebar('home-right'); ?>
    </div>
</main>

<?php get_footer(); ?>
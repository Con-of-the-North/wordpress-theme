<?php
/* Main Template File*/
    get_header();
?>

<main class="main-content">
    <div class="main-title">
        <img src="<?php bloginfo('template_url') ?>/images/cotn-smaller.png" alt="Board Game" class="board-game">
        <span class="title-wrapper center-text">
            <span class="title-text">Twin Cities Longest Running Games Convention.</span>
                <div>
                    <p>February 16-18, 2018<br>
                    Friday Noon to 2 AM<br>
                    Saturday 8 AM to 2 AM<br>
                    Sunday 8 AM to 10 PM<br>
                    Crowne Plaza Minneapolis West</p>
                </div>
            <div class="center-text">
                <div class="register-now btn">Register Now</div>
            </div>
        </span>
    </div>
    <?php get_sidebar('home-left'); ?>
    <?php get_sidebar('home-right'); ?>
</main>

<?php get_footer(); ?>
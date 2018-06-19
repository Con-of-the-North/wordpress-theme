<?php
/* Main Template File*/
    get_header();
?>


<div class="main-content-width-wrapper">
    <main class="main-content">
        <h1><?php echo get_the_title()  ?></h1>

          <?php
            // Start the loop
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                        the_content();
                endwhile;
            endif;
          ?> 
        </main>
    </div>
    
<?php get_footer(); ?>
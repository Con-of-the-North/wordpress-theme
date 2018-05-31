
<?php
/* The template for the Home Left Section */
?>

<?php if(is_active_sidebar('home-left')) : ?>
	<div class="home-left-section">
		<?php dynamic_sidebar('home-left'); ?>
	</div>
<?php endif; ?>
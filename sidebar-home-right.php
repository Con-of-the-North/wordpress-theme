
<?php
/* The template for the Home right Section */
?>

<?php if(is_active_sidebar('home-right')) : ?>
	<div class="home-right-section">
		<?php dynamic_sidebar('home-right'); ?>
	</div>
<?php endif; ?>
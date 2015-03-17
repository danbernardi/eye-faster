<?php
/*
Template Name: Full Width
*/


include('header.php'); ?>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
				<section class="content">
						
					<?php 
						// Include the page content template.
						the_content();

						// End the loop.
						endwhile; ?>
			</section>
	

<?php include('footer.php'); ?>
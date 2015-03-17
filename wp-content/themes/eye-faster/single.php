<?php include('header.php'); ?>

	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
		$thumb_url = $thumb_url_array[0];
	?>
				<div data-parallax="scroll" <?php if( has_post_thumbnail() ) { echo 'data-image-src="'.$thumb_url.'"'; } else { echo 'data-image-src="/img/slide03.jpg"'; } ?> class="pagetitle">
					<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>
					<div class="row"><h1><?php the_title(); ?></h1></div>
				</div>
				<section class="content row withSidebar">
					<article class="contentbox">
						<?php 
							// enable breadcrumbs
							if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<div class="breadcrumbs">','</div>');
							} 
							
							// the loop
							while ( have_posts() ) : the_post(); 
						?>
						
						<div class="post">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?> 
						</div>
						<?php comments_template('comments.php'); ?>

						<?php endwhile; ?>
						
				</article>

				<aside>
					<?php dynamic_sidebar( 'blog_sidebar' ); ?>
				</aside>
				
			</section>
	

<?php include('footer.php'); ?>
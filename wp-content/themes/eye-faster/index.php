<?php include('header.php'); ?>

	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
		$thumb_url = $thumb_url_array[0];
	?>
				<div data-parallax="scroll" <?php if( has_post_thumbnail() ) { echo 'data-image-src="'.$thumb_url.'"'; } else { echo 'data-image-src="/img/slide03.jpg"'; } ?> class="pagetitle">
					<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>
					<div class="row"><h1>Blog</h1></div>
				</div>
				<section class="content row withSidebar">
					<article class="contentbox">
						<?php 
							// enable breadcrumbs
							if ( function_exists('yoast_breadcrumb') ) {
								yoast_breadcrumb('<div class="breadcrumbs">','</div>');
							} 

							// the loop
							if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						?>
						
						<div class="post">
							<h4 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
							<a class="btn" href="<?php the_permalink(); ?>">Read More</a>
						</div>

						<?php endwhile; ?>
						
						<?php sfhr_numeric_posts_nav(); ?>


						<?php else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
						
				</article>

				<aside>
					<?php dynamic_sidebar( 'blog_sidebar' ); ?>
				</aside>
				
			</section>
	

<?php include('footer.php'); ?>
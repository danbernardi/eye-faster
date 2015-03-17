<?php include('header.php'); ?>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
			$thumb_url = $thumb_url_array[0];
			
			// get meta data
			$address = get_post_meta( get_the_ID(), '_sfhr_st_address', true );
			$city_zip = get_post_meta( get_the_ID(), '_sfhr_city_zip', true );
			$yelp_page = get_post_meta( get_the_ID(), '_sfhr_yelp_page', true );
			$current_listing_link = get_post_meta( get_the_ID(), '_sfhr_active_listings', true );
			$sold_listing_link = get_post_meta( get_the_ID(), '_sfhr_sold_listings', true );
			$google_embed = get_post_meta( get_the_ID(), '_sfhr_google_embed', true );
			
			$disableSidebar = get_post_meta( get_the_ID(), '_sfhr_disable_sidebar', true );
			$entries = get_post_meta( get_the_ID(), '_sfhr_am_repeat_group', true );
	?>
				<div data-parallax="scroll" <?php if( has_post_thumbnail() ) { echo 'data-image-src="'.$thumb_url.'"'; } else { echo 'data-image-src="/img/slide03.jpg"'; } ?> class="pagetitle">
					<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>
					<div class="row"><h1><?php the_title(); ?></h1></div>
				</div>
				<section class="content row <?php if( !$disableSidebar == 'on' ) { echo 'withSidebar'; } ?>">
					<article class="contentbox">
												
						<?php 
							$terms = get_the_terms( $post->ID, 'neighborhood' );
							if ( !empty( $terms ) ){
								// get the first term
								$term = array_shift( $terms );	
								$curr_neighborhood = $term->slug;
								$curr_neighborhood_title = $term->name;				
						?>
						<div class="stAddress">
							<h5><?php echo $address; ?></h5>	
							<h6><?php echo $city_zip; ?></h6>
						</div>
						<div class="breadcrumbs">
							<span>
								<span><a href="<?php echo get_site_url(); ?>">Home</a></span> » 
								<span><a href="<?php echo get_page_link(13); ?>">Neighborhoods</a></span> » 
								<span><a href="<?php echo get_post_type_archive_link( 'neighborhood' ).$curr_neighborhood.'/' ?>"><?php echo $curr_neighborhood_title; ?></a></span> » 
								<span><span class="breadcrumb_last"><?php echo the_title(); ?></span></span>
							</span>
						</div>
						<div class="tabs">
							<ul class="tabsnav">
								<li><a href="#overview"><i class="fa fa-file-text-o"></i>Overview</a></li>
								<li><a href="#amenities"><i class="fa fa-star"></i>Featured Amenities</a></li>
								<li><a href="#gallery"><i class="fa fa-picture-o"></i>Image Gallery</a></li>
								<?php
									if (!strlen($yelp_page) == 0) {
										echo '<li class="yelp"><a href="'.$yelp_page.'" target="_blank">View this building on <i class="fa fa-yelp"></i> Yelp</a></li>';
									}
								?>
							</ul>

							<div class="tab" id="overview">
								<?php the_content(); ?>
								<?php 
									if (!strlen($google_embed) == 0) {
										echo '<div class="googlemap"><iframe src="'.$google_embed.'" width="100%" height="300"></iframe></div>';
									}
								?>
							</div>
							<div class="tab" id="amenities">
								<div class="amenities cols3">
								<?php
									foreach ( (array) $entries as $key => $entry ) {

										$img = $caption = '';

										if ( isset( $entry['am_image'] ) ) {
											$img = wp_get_attachment_image( $entry['am_image'], 'b-thumb', 0 );
										}
										if ( isset( $entry['am_caption'] ) ) {
											$caption = esc_html( $entry['am_caption'] );
										} ?>
										
											<div class="col">
												<div class="am-img"><img src="/img/nb-standin.jpg"></div>
												<h6><?php echo $caption; ?></h6>
											</div>
									<?php } ?>
								</div>
							</div>
							<div class="tab" id="gallery">
								<?php
									function sfhr_image_gallery( $file_list_meta_key, $img_size = 'medium' ) {

										// Get the list of files
										$files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

										echo '<div class="slick">';
										// Loop through them and output an image
										foreach ( (array) $files as $attachment_id => $attachment_url ) {
											echo '<div>';
											echo wp_get_attachment_image( $attachment_id, $img_size );
											echo '</div>';
										}
										echo '</div>';
										
										
									}
									echo sfhr_image_gallery( '_sfhr_gallery', 'small' );
								 ?>
							</div>
						</div>
						
						<div class="divider"></div>
						<div class="listings-cta">
							<a class="current" href="<?php echo $current_listing_link; ?>">View Listings</a>
							<a class="sold" href="<?php echo $sold_listing_link; ?>">View Recently Sold</a>
						</div>
						
				</article>
					<aside>
						<div class="widget">
							<h6>All Buildings in this Neighborhood</h6>
							<?php echo do_shortcode('[building_sidenav neighborhood="'.$curr_neighborhood.'"]'); ?>
						</div>
						<?php } ?>
					</aside>
					
					<?php endwhile; // end the loop ?>
				
			</section>
	

<?php include('footer.php'); ?>
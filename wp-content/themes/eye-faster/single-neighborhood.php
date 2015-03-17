<?php include('header.php'); ?>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
			$thumb_url = $thumb_url_array[0];
			
			// get meta data
			$google_embed = get_post_meta( get_the_ID(), '_sfhr_google_embed', true );
			$neighborhood_id = get_post_meta( get_the_ID(), '_sfhr_neighborhood_id', true );
			$res_entries = get_post_meta( get_the_ID(), '_sfhr_res_repeat_group', true );
			$sig_entries = get_post_meta( get_the_ID(), '_sfhr_sig_repeat_group', true );
			$res_disable = get_post_meta( get_the_ID(), '_sfhr_res_disable', true );
			$sig_disable = get_post_meta( get_the_ID(), '_sfhr_sig_disable', true );
	?>
				<div data-parallax="scroll" <?php if( has_post_thumbnail() ) { echo 'data-image-src="'.$thumb_url.'"'; } else { echo 'data-image-src="/img/slide03.jpg"'; } ?> class="pagetitle">
					<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>
					<div class="row"><h1><?php the_title(); ?></h1></div>
				</div>
				<section class="content row withSidebar">
					<article class="contentbox">
						<div class="breadcrumbs">
							<span>
								<span><a href="<?php echo get_site_url(); ?>">Home</a></span> » 
								<span><a href="<?php echo get_page_link(13); ?>">Neighborhoods</a></span> » 
								<span><span class="breadcrumb_last"><?php echo the_title(); ?></span></span>
							</span>
						</div>
								
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
						<?php 
							if (!strlen($google_embed) == 0) {
								echo '<div class="googlemap"><iframe src="'.$google_embed.'" width="100%" height="300"></iframe></div>';
							}
						?>
						<div class="divider"></div>
						
						<?php if( !$res_disable == 'on' ) { ?>
							<p class="meta-info"><strong><i class="fa fa-cutlery fa-fw"></i> Restaurants / Bars:</strong>
							<?php
								foreach ( (array) $res_entries as $r_key => $r_entry ) {
									$r_name = $r_url = '';
									if ( isset( $r_entry['res_name'] ) ) {
										$r_name = esc_html( $r_entry['res_name'] );
									}
									if ( isset( $r_entry['res_url'] ) ) {
										$r_url = esc_html( $r_entry['res_url'] );
									} ?>

									<a href="<?php echo $r_url; ?>" title="<?php echo $r_name; ?>" target="_blank"><?php echo $r_name; ?></a>
								<?php } ?>
							</p>
						<?php } ?>
						
						<?php if( !$sig_disable == 'on' ) { ?>
							<p class="meta-info"><strong><i class="fa fa-bank fa-fw"></i> Sights / Culture:</strong>
							<?php
								foreach ( (array) $sig_entries as $s_key => $s_entry ) {
									$s_name = $s_url = '';
									if ( isset( $s_entry['sig_name'] ) ) {
										$s_name = esc_html( $s_entry['sig_name'] );
									}
									if ( isset( $s_entry['sig_url'] ) ) {
										$s_url = esc_html( $s_entry['sig_url'] );
									} ?>

									<a href="<?php echo $s_url; ?>" title="<?php echo $s_name; ?>" target="_blank"><?php echo $s_name; ?></a>
								<?php } ?>
							</p>
						<?php } ?>
						
							<div class="divider"></div>
						
						<?php echo do_shortcode('[list_buildings neighborhood="'.$neighborhood_id.'"]'); ?>
						
						
				</article>
					<aside>
						<div class="widget">
							<h6>Select a Neighborhood</h6>
							<?php echo do_shortcode('[neighborhood_sidenav]'); ?>
							<?php dynamic_sidebar('default_sidebar'); ?>
						</div>
					</aside>
					
					<?php endwhile; // end the loop ?>
				
			</section>
	

<?php include('footer.php'); ?>
<?php include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addTopNav = get_post_meta( get_the_ID(), '_zd_add_topnav', true ); 
    $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
    $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
  ?>
    
    <?php if( $addTopNav == 'on' ) { ?>
        <section class="subnav">
            <?php dynamic_sidebar('top_subnav'); ?>
        </section>
    <?php } ?>
    
    <?php if( !$disablePageTitle == 'on' ) { ?>
        <section class="pagetitle"></section>
    <?php }			
    
				the_content();
        endwhile; 
    ?>
	
<?php if( strlen($f_cta_text) != 0 ) { ?>
  <!-- contact cta section -->
  <section class="contact-cta">
    <h4><?php echo $f_cta_text; ?></h4>
    <a class="btn contactscroll" href="<?php echo get_site_url(); ?>/#connect"><?php _e('Contact Us', 'zd'); ?></a>
  </section>
<?php } ?>

<?php include('footer.php'); ?>
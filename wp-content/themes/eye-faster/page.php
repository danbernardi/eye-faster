<?php include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disableTopPadding = get_post_meta( get_the_ID(), '_zd_disable_top_padding', true );
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addSidebar = get_post_meta( get_the_ID(), '_zd_add_sidebar', true ); ?>
    <section class="subnav">
        <?php dynamic_sidebar('sidenav'); ?>
    </section>
    
    
				<?php if( !$disablePageTitle == 'on' ) { ?>
            <section class="pagetitle"></section>
        <?php }
        
							// Include the page content template.
							the_content();

							endwhile; 
						?>
	

<?php include('footer.php'); ?>
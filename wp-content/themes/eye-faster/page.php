<?php include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addTopNav = get_post_meta( get_the_ID(), '_zd_add_topnav', true ); ?>
    
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
	

<?php include('footer.php'); ?>
<?php
/*
Template Name: Home
*/
include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addTopNav = get_post_meta( get_the_ID(), '_zd_add_topnav', true ); 
  ?>
    
    <div class="flag home"></div>
    <!-- hero section -->
    <section class="hero">
      <h1><span>We use mobile <span class="blue">eye-tracking</span> to analyze the world from</span><br>
      <strong>the shoppers</strong> point of view<br></h1>
      <span class="video"><a class="lb-btn" href="#" data-target="youtube"><i class="fa fa-play"></i></a><br>
      How it works</span>
      <div class="left">
        <a href="#">Market Research Companies<br>
        <span>Click Here</span></a>
      </div>
      <div class="right">
        <a href="#">Brands &amp; Retailers<br>
        <span>Click Here</span></a>
      </div>
    </section>
    
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
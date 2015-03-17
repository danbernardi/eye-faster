<?php include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disableTopPadding = get_post_meta( get_the_ID(), '_zd_disable_top_padding', true );
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addSidebar = get_post_meta( get_the_ID(), '_zd_add_sidebar', true ); ?>
    
				<?php if( !$disablePageTitle == 'on' ) { ?>
            <section class="pagetitle">
                <div class="ztitle row"><h4><?php the_title(); ?></h4></div>
            </section>
        <?php } ?>
				
    <section class="content<?php if( !$addSidebar == 'on' ) { echo ' row'; } ?><?php if( $disableTopPadding == 'on' ) { echo ' nopadding'; } ?>">
						<?php if( $addSidebar == 'on' ) { ?>
                <div class="row smallaside">
                <div class="contentleft row">
				<?php } ?>
						
						<?php 
							// Include the page content template.
							the_content();

							endwhile; 
						?>
				
        <?php if( $addSidebar == 'on' ) { ?>
                </div>
                <aside>
                    <?php dynamic_sidebar( 'default_sidebar' ); ?>
                </aside>
            </div>
				<?php } ?>
    </section>
	

<?php include('footer.php'); ?>
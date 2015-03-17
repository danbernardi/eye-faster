<?php

/* ------------------------------------------------
 * Custom Loops Calls
 * ------------------------------------------------*/

// list testimonials
function zd_testimonials( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		'category' => '',
	), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="testimonialgroup">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
            <?php $testeeTitle = get_post_meta( get_the_ID(), '_zd_jobtitle', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('testimonial'); ?>>
                	<?php the_content(); ?>
                	<div class="testee">
                	    <h6><?php the_title(); ?></h6>
                	    <span><?php echo $testeeTitle; ?></span>
                	</div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_testimonials', 'zd_testimonials' );


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/

// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array( 'list_testimonials' ));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>
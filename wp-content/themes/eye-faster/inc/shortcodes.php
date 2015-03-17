<?php

/* ------------------------------------------------
 * Home page shortcodes
 * ------------------------------------------------*/

// list buildings
function zd_list_success_stories( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		'category' => '',
	), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'success_stories',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
			array(
				'taxonomy' => 'success_category',
				'field'    => 'slug',
				'terms'    => $category,
			)
    	),
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
add_shortcode( 'list_success_stories', 'zd_list_success_stories' );


function zd_ztitle( $atts, $content = null ) {
    $output = '';
    
    extract( shortcode_atts( array(
        'id' => '',
    ), $atts ) );
    
    $output .= '<div class="anchor" id="'.$id.'"></div>';
    $output .= '<div class="ztitle"><h5>';
    $output .= do_shortcode( $content );
    $output .= '</div>';
    
    return $output;
}
add_shortcode( 'ztitle', 'zd_ztitle' );


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/

// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array('list_success_stories', 'ztitle'));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>
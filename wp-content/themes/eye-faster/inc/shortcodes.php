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


// list team members
function zd_team_members( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <section class="leadership">
          <div class="anchor" id="leadership"></div>
          <h3 class="label">The Leadership</h3>

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
            <?php $jobTitle = get_post_meta( get_the_ID(), '_zd_jobtitle', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('leader'); ?>>
              <a href="#">
                <?php if( has_post_thumbnail() ) {
                		echo the_post_thumbnail();
                    } else { ?>
                      <img src="/img/team-standin.png"> 
                <?php } ?>
                <h5><?php the_title(); ?></h5>
                <?php if( $jobTitle != 0 ) { ?>
                  <h6><?php echo $jobTitle; ?></h6>
                <?php } ?>
              </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </section>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_team_members', 'zd_team_members' );


// list services & solutions
function zd_list_services( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
      'category' => 'services',
    ), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => $category,
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
            
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $icon = get_post_meta( get_the_ID(), '_zd_icon', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
                <i class="fa <?php echo $icon; ?>"></i>
                <h6><?php the_title(); ?></h6>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Learn More</a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_services', 'zd_list_services' );


// list videos
function zd_list_videos( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'videos',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
            <div class="cols3">
            
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $embedURL = get_post_meta( get_the_ID(), '_zd_embed_url', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('col lb'); ?>>
                <a href="#" data-target="vgallery">
                  <div class="thumb"><img src="/img/videogallery/standin01.jpg"></div>
                  <h6><?php the_title(); ?></h6>
                  <p><?php the_excerpt(); ?></p>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_videos', 'zd_list_videos' );


/* ------------------------------------------------
 * Layout
 * ------------------------------------------------*/
 
// full width sections
function zd_section( $atts, $content = null ) {
    $output = '';
    
    extract( shortcode_atts( array(
		  'id' => '',
		  'thinrow' => 'no'
    ), $atts ) );
    
    if($thinrow == 'yes') {
      $row = 'row700';
    } else {
      $row = 'row';
    }
    
    $output .= '<section class="'.$id.'">';
    $output .= '<div class="'.$row.'">';
    $output .= do_shortcode( $content );
    $output .= '</div></section>';
    
    return $output;
}
add_shortcode( 'section', 'zd_section' );

// title labels
function zd_label( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		  'id' => '',
		  'title' => '',
    ), $atts ) );
    
    $output .= '<div class="anchor" id="'.$id.'"></div>';
    if(strlen($title) != 0) {
      $output .= '<h3 class="label">'.$title.'</h3>';
    }
    
    return $output;
}
add_shortcode( 'label', 'zd_label' );

// divider
function zd_divider( $atts ) {
    $output = '';
    
    $output .= '<div class="divider"></div>';
    
    return $output;
}
add_shortcode( 'divider', 'zd_divider' );



// list_clients
function zd_list_clients( $atts ) {
    
    extract( shortcode_atts( array(
		  'title' => 'A few of our clients',
    ), $atts ) );
    ?>
    
    <?php
      ob_start();
      $query = new WP_Query( array(
          'post_type' => 'clients',
          'posts_per_page' => -1,
          'order' => 'ASC',
      ) );
      if ( $query->have_posts() ) { ?>
        
        <div class="clients">
        <h5><?php echo $title; ?></h5>
        <div class="slick">
        <?php 
          while ( $query->have_posts() ) : $query->the_post();
          $image = get_post_meta( get_the_ID(), '_zd_client_img', true );
        ?>

        <div>
          <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
        </div>
    <?php
        endwhile; wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
      }
    ?>
    
    </div></div>

<?php }
add_shortcode( 'list_clients', 'zd_list_clients' );
/*
<div class="clients">
		<h5>A few of our clients</h5>
		<div class="slick">
			<div><img src="img/clients/walgreens.png"></div>
			<div><img src="img/clients/walmart.png"></div>
			<div><img src="img/clients/wilson.png"></div>
			<div><img src="img/clients/microsoft.png"></div>
			<div><img src="img/clients/bedbathbeyond.png"></div>
			<div><img src="img/clients/target.png"></div>
			<div><img src="img/clients/walgreens.png"></div>
			<div><img src="img/clients/walmart.png"></div>
			<div><img src="img/clients/wilson.png"></div>
			<div><img src="img/clients/microsoft.png"></div>
			<div><img src="img/clients/bedbathbeyond.png"></div>
			<div><img src="img/clients/target.png"></div>
		</div>
	</div>
*/


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/
 
 function zd_footer_cta( $atts, $content = null ) {
    $output = '';
    
    $output .= '<section class="contact-cta">';
    $output .= '<h4>'.$content.'</h4>';
    $output .= '<a class="btn contactscroll" href="'.home_url().'#contact">Contact Us</a></section>';
    
    return $output;
}
add_shortcode( 'call_to_action', 'zd_footer_cta' );

/*
<!-- contact cta section -->
<section class="contact-cta">
	<h4>Nullam quis risus eget urna mollis ornare vel eu leo risus eget urna!</h4>
	<a class="btn contactscroll" href="index.php#connect">Contact Us</a>
</section>
*/



// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array( 'list_testimonials', 'section', 'list_team_members', 'list_services', 'label', 'divider', 'call_to_action', 'list_clients' ));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>
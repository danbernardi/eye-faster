<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blogroll">
    <div class="anchor" id="blog"></div>
    <div class="post">
      <h5 class="label"><i class="fa fa-trophy"></i>Blog</h5>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
        $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
      ?>

      <article>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
        <a class="btn" href="<?php the_permalink(); ?>"><i class="fa fa-play"></i><?php _e('Read More', 'zd'); ?></a>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
      <div class="pagination">
        <?php zd_numeric_posts_nav(); ?>
      </div>

    </div>

    <aside class="sidebar">
      <h5 class="label"><i class="fa fa-toggle-left"></i><?php _e('Recent Posts', 'zd'); ?></h5>
      <?php echo do_shortcode('[recent_blog_posts]'); ?>
      
    </aside>
    <div class="clear"></div>
  </section>

<?php if( $f_cta_enable == 'on') { ?>
  <!-- contact cta section -->
  <section class="contact-cta">
    <h4><?php _e('Get in touch with us today to learn how we can help you.', 'zd'); ?></h4>
    <a class="btn contactscroll" href="<?php echo get_site_url(); ?>/#connect"><?php _e('Contact Us', 'zd'); ?></a>
  </section>
<?php } ?>
<?php include('footer.php'); ?>
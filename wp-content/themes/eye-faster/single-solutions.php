<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blog">
    <div class="anchor" id="blog"></div>
    <div class="row700">      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
        $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
      ?>

      <article>
        <h2><?php the_title(); ?></h2>
        <span class="author"><?php _e('Posted by ', 'zd') . the_author(); ?></span> <?php _e('on ', 'zd') . '<span class="date">' .  the_date() . '</span>'; ?>
        <div class="socialshare">
          <ul>
            <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source="><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        
        <p><?php the_content(); ?></p>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

      <div class="divider"></div>
      <?php comments_template('comments.php'); ?>
      
    </div>
    <div class="clear"></div>
  </section>

  <!-- contact cta section -->
  <section class="contact-cta">
    <h4><?php e_('Can we help you come up with a solution to your in store research needs?', 'zd'); </h4>
    <a class="btn contactscroll" href="<?php echo get_site_url(); ?>/#connect"><?php _e('Contact Us', 'zd'); ?></a>
  </section>
  
<?php include('footer.php'); ?>
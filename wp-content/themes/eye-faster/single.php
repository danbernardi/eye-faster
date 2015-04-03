<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blog">
    <div class="anchor" id="blog"></div>
    <div class="row700">      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    
      <?php comments_template('comments.php'); ?>
      
    </div>
    <div class="clear"></div>
  </section>

<?php include('footer.php'); ?>
<footer>
	<div class="blogroll">
		<div class="row">
			
			<?php	// footer blog roll
        $query = new WP_Query( array(
            'posts_per_page' => 9,
            'order' => 'ASC',
        ) );
        if ( $query->have_posts() ) { ?>
            <div class="ztitle row"><h4><?php _e('From the Blog', 'zd'); ?></h4></div>
            <div class="slickcenter">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a class="postbox" href="<?php the_permalink(); ?>">
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('M d'); ?></time>
                      <h6><?php the_title(); ?></h6>
                      <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php } ?>
        
		</div>
	</div>
	
	<div class="footercta">
		<div class="row">
			<span><?php echo of_get_option( 'zd_cta_text' ); ?></span>
			<a class="btn" href="#">Join Today</a>
		</div>
	</div>
	
	<div class="topfooter">
		<div class="row cols4">
			<div class="col footer-block-1">
				<?php dynamic_sidebar( 'footer_block_1' ); ?>
			</div>
			<div class="col footer-block-2">
				<?php dynamic_sidebar( 'footer_block_2' ); ?>
			</div>
			<div class="col footer-block-3">
				<?php dynamic_sidebar( 'footer_block_3' ); ?>
			</div>
			<div class="col footer-block-4">
				<?php dynamic_sidebar( 'footer_block_4' ); ?>
			</div>
		</div>
	</div>
	
	<div class="bottomfooter">
		<div class="row disclosure">
			<?php echo apply_filters('the_content', of_get_option( 'zd_disclosure' )); ?>
		</div>
		<div class="copy">
        <div class="row">
            <?php echo of_get_option( 'zd_copyright'); ?>
        </div>
		</div>
	</div>
</footer>
</section>

<!-- lightbox -->
<div id="lightboxgroup">
	<div id="poverlay"></div>
	<div class="contactbox lightbox" id="contact">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Have Questions or need help?</h5>
		<p>Contact an account manager now, we are here <strong>9:00</strong> to <strong>5:00</strong> PST to assist your investment needs.</p>
		<form>
			<div class="inputfields">
				<input type="text" placeholder="Enter your full name">
				<input type="email" placeholder="Enter your email address">
				<input type="text" placeholder="Enter your phone number">
				<textarea placeholder="Enter a message"></textarea>
			</div>
			<div class="inputsubmit">
				<input type="submit" value="Send">
			</div>
		</form>
	</div>
	
	<div class="investmentlb lightbox" id="jeffersonAve">
		<div class="close"><i class="fa fa-times"></i></div>
		<div class="investment">
			<div class="info">
				<img src="img/investments/invesment01.jpg">
				<h6>3317 / 3319 S. Jefferson Ave</h6>
				<span class="state">Missouri | Rental Property</span>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor porta leo. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor porta leo non metus auctor sed posuere consectetur est.</p>
				<a class="btn" href="listing.php">View Full Listing</a>
			</div>
			<div class="fields">
				<ul class="meta">
					<li class="title">Scroll to view details<span><i class="fa fa-caret-down"></i></span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
					<li>Loan Type<span>Interest plus Pay Down</span></li>
					<li>Total Raise Amount<span>$50,000.00</span></li>
					<li>Annualized Return<span>7%</span></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="memberlb lightbox" id="eMederos">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Eric Mederos</h5>
		<h6>CEO / Founder</h6>
		<p>Eric Mederos is from a traditional real estate family. After some time as a Real Estate Investor, he started a mortgage company in 2002. Moved into private banking in 2005, Eric then had to learn every detail about underwriting and properly servicing loans. In that time he oversaw the deployment and underwriting of over $120 Million in real estate transactions and investments.</p>
		
		<p>In 2009, Eric transitioned to distressed properties and began his campaign of Socially Conscience Investing. Eric takes great pride in VinMak Asset Management Group’s specialty of preserving home ownership.</p>
		
		<p>More recently, Eric has started speaking at national investor summits. Eric’s focus is real estate investing, crowd source funding, and the joys of working with high-end investors.</p>
	</div>
	<div class="memberlb lightbox" id="nCamara">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Nathalie Camara</h5>
		<h6>Director of Operations</h6>
		<p>With over 16 years of experience in banking industry, Nathalie Camara oversees the VinMak Asset Management Group real estate portfolio and manages both the Asset Managers and the Portfolio &amp; Transaction Coordinators.</p>
		
		<p>After receiving her degree from San Diego State University, Nathalie received her finance training as a loan officer for Residential Pacific Mortgage. She holds securities licenses Series 6 and Series 63 and excels at developing relationships, uncovering needs, and finding solutions specializing in the growth of companies.</p>
		
		<p>Married with five children, Nathalie maintains active involvement in her community of Brentwood, CA. She is passionate about serving others and participates in several family/community focused associations.</p>
	</div>
	<div class="memberlb lightbox" id="jMarion">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Jerry Marion</h5>
		<h6>Asset Manager</h6>
		<p>Jerry Marion’s background includes seven years of Finance Mortgage and four years of managing Life Insurance sales for companies including Select Quote and New Your Life.</p>
		
		<p>Jerry’s primary function at VinMak Asset Management Group is managing the company’s relationships with borrowers. In that role, his number one goal is making sure people who want to stay in their homes can. Rather than foreclosing on borrowers, Jerry works outside of the traditional banking box to build trust and putting together re-payment plans that allows homeowners to keep their homes.</p>
		
		<p>Married with two daughters, Jerry loves surrounding himself with children and expands on his relationship building skills coaching 10-12 year old baseball.</p>
	</div>
	<div class="memberlb lightbox" id="hEhling">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Helen Ehling</h5>
		<h6>Asset Manager</h6>
		<p>Helen Ehling brings her ten years of experience at a mortgage bank working with loan agents to gather all the necessary information for underwriting. At VinMak, Helen works with borrowers whose accounts have returned to good standing to re-finance their mortgage out of the VinMak Asset Management Group portfolio and into a traditional loan.</p>
		
		<p>As a single mom, Helen’s personal life focuses on family.</p>
	</div>
	<div class="memberlb lightbox" id="gTriggas">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Gus Triggas</h5>
		<h6>Chief Compliance Officer</h6>
		<p>Gus has been in the mortgage banking industry for the past 32 years, of which the last 14 years he has owned his lending branch located in Walnut Creek, CA. During this time he has personally funded more than 1 billion dollars in mortgage loans on top of overseeing his branch production of nearly 5 billion dollars and as many as 60 employees. As a banker/broker he has a long history in the industry with experience in processing, underwriting, document drawing and funding for all loans including direct to Fannie Mae and FHA. The experience Gus brings to VinMak Lending Group ensures we are always introducing strategic modification and lending programs to enable our Asset Managers to offer programs based on our borrowers individual needs and situations all while staying in strict compliance.</p>
		
		<p>Gus also serves on the Finance Board and Board of Directors for the Greek Orthodox Cathedral in Oakland California. Prior to that he served as the Chairman of the Festival of Greece which generated in excess of $400,00 per year and is currently the Co-Chair of the John Andronico Memorial Golf Tournament that also raises money for its charities.</p>
		
		<p>Gus has lived in the bay his entire life where him and his wife of 24 years have raised their 3 children. While not at the office Gus enjoys hunting and boating with his family.</p>
	</div>
	<div class="memberlb lightbox" id="bHumphrey">
		<div class="close"><i class="fa fa-times"></i></div>
		<h5>Brian Humphrey</h5>
		<h6>Chief Lending Officer</h6>
		<p>Brian began his mortgage banking career in 1990 as a Top Producer for Home Savings of America and in 2000 started his own mortgage banking branch. During this time he has personally funded more than 1.5  billion dollars in mortgage loans on top of overseeing his branch production of nearly 5 billion dollars and as many as 60 employees. Brian's passion for his clients and the mortgage banking industry has made him one of the most highly respected mortgage advisors in the Walnut Creek 680 corridor. The experience Brian brings to VinMak Lending Group allows us to operate an innovative national lending platform for the sole purpose of creating and utilizing lending programs for  homeowners who have experienced a hardship in their finances. Without these type of lending programs our homeowners would be stuck in higher interest rate home loans with no ability to refinance into conventional programs.</p>
		
		<p>Prior to his mortgage career Brian worked for E&amp;J Gallo Winery and  lived in Barbados where he was responsible for all sales and marketing programs across 14 different countries within the Caribbean. Brian attributes his ability to relate to any borrowers diverse and extensive needs to these types of exposures.
A native of Northern California, Brian was born in San Francisco, and is a Graduate of California State University at Chico. Brian now resides in Walnut Creek with his wife, daughter and two sons. In addition to spending his free time with his family; Brian enjoys golfing, boating, coaching baseball and softball as well as entertaining family and friends.</p>
	</div>
</div>

<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>
</body>
</html>
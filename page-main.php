<?php 
/*
Template Name: Main Page
*/
get_header(); ?>

<h2 class="callout clear alignleft">Clare Housing provides...
	<div id="rotators">
        <strong>Dignity</strong>
        <strong>Compassion</strong>
        <strong>Care</strong>
        <strong>Safety</strong>
        <strong>Kindness</strong>
        <strong>Home</strong>
        <strong style="font-size: 30px;">A place to call home</strong>
  	</div>  
</h2>


<div class="social-feed">
<div id="fb-root"></div>
	<h3>Social Media Feed</h3>
    <?php // fb_feed(); ?>
    <!--
    <div class="fb-like-box" data-href="http://www.facebook.com/pages/Clare-Housing/118471574857255" data-width="292" data-height="200" data-show-faces="false" data-stream="true" data-header="false"></div>
    -->

</div>

<section class="row">
	
    <div class="third">
    	<h3 class="orange"><a href="<?php echo home_url(); ?>/stories" title="Our Stories">Living with HIV/AIDS</a></h3>
        <a href="<?php echo home_url(); ?>/stories" title="Our Stories"><img src="<?php echo bloginfo('template_url'); ?>/images/living.jpg" /></a>
        <p class="big"><a href="<?php echo home_url(); ?>/stories" title="Our Stories">Our stories</a></p>
        <p>Clare Housing provides affordable housing, supporting services and compassionate care to 150 HIV positive individuals, including 10 families. <strong>Their stories are each unique and memorable.</strong></p>
    </div>
    
    <div class="third">
    	<h3 class="red"><a href="<?php echo home_url(); ?>/support/journey-home-tour" title="Journey Home Tours">Journey Home Tours</a></h3>
        <a href="<?php echo home_url(); ?>/support/journey-home-tour" title="Journey Home Tours"><img src="<?php echo bloginfo('template_url'); ?>/images/journey.jpg" /></a>
        <p class="big"><a href="<?php echo home_url(); ?>/support/journey-home-tour" title="Journey Home Tours">Have you been on a Journey Home Tour?</a></p>
        <p>Join us on a <strong>free guided one-hour tour</strong> and learn how affordable housing and supportive services improves the quality of life for people living with HIV/AIDS in the Twin Cities.</p>
    </div>
        
    <div class="third">
		<h3 class="maroon"><a href="<?php echo home_url(); ?>/front-door" title="The Front Door">The Front Door</a></h3>
        <a href="<?php echo home_url(); ?>/front-door" title="The Front Door"><img src="<?php echo bloginfo('template_url'); ?>/images/blog.jpg" /></a>
        <p class="big"><a href="<?php echo home_url(); ?>/front-door">Welcome to Clare Housing's Blog</a></p> 
        <p>Here we will post stories and reflections happening daily at Clare Housing. We hope to provide you with a glimpse of the work we do and the impact made in lives of people living here at Clare Housing.</p>
    </div>
    
    <div class="third">
    	<h3 class="green"><a href="<?php echo home_url(); ?>/clarion-newsletter" title="Clarion Newsletter">Clarion Newsletter</a></h3>
        <a href="<?php echo home_url(); ?>/clarion-newsletter" title="Clarion Newsletter"><img src="<?php echo bloginfo('template_url'); ?>/images/clarion.jpg" /></a>
        <p class="big"><a href="<?php echo home_url(); ?>/clarion-newsletter" title="Clarion Newsletter">A bulletin for the friends and supporters of Clare Housing</a></p>
        <p>Learn more about Clare Housing by reading our latest publications. If you would like to be added to Clare Housing's mailing list, please email Debbie at <a href="mailto:debbie.wyman@clarehousing.org?subject=Clarion%20Newsletter">debbie.wyman@clarehousing.org</a>.</p>
    </div>
    
    <div class="third">
    	<h3 class="orange"><a href="<?php echo home_url(); ?>/get-involved" title="Support Our Work">Support Our Work</a></h3>
        <a href="<?php echo home_url(); ?>/get-involved" title="Support Our Work"><img src="<?php echo bloginfo('template_url'); ?>/images/support.jpg" /></a>
        <p class="big"><a href="<?php echo home_url(); ?>/get-involved" title="Get Involved">Get involved</a></p>
  		<p>Clare Housing welcomes the community to get involved and help make a difference. Join us!</p>
    </div>
    
    <div class="third">
    	<h3 class="brown"><a href="<?php echo home_url(); ?>/news" title="News and Events">News and Events</a></h3>
        <a href="<?php echo home_url(); ?>/news" title="News and Events"><img src="<?php echo bloginfo('template_url'); ?>/images/news.jpg" /></a>
        <?php query_posts('posts_per_page=1'); while ( have_posts() ) : the_post(); ?>
            <p class="big"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            <p>Read Clare Housing's latest announcements, articles, and other related information.</p>
        <?php endwhile; wp_reset_query(); ?>    
    </div>

</section>

<?php get_footer(); ?>
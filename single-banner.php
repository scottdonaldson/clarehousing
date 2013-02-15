<?php get_header(); ?>

<h2 class="callout clear alignleft">Clare Housing provides...
	<div id="rotators">
        <strong>Dignity</strong>
        <strong>Compassion</strong>
        <strong>Care</strong>
        <strong>Safety</strong>
        <strong>Kindness</strong>
        <strong>Home</strong>
        <strong>A place to call home</strong>
  	</div>  
</h2>


<div class="social-feed">
<div id="fb-root"></div>
	<h3>Social Media Feed</h3>
    <?php fb_feed(); ?>
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
    	<h3 class="red"><a href="<?php echo home_url(); ?>/support/j
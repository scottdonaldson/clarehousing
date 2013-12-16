<div class="banner">
    
	<?php
		$url = get_bloginfo('template_url');
		
		// Blog archive or single post
		if ( is_page(29) || is_singular('front-door') ) {
	        echo '<img src="'.$url.'/images/FrontDoor-banner.png" />';

		// Public policy
		} elseif ( 
			is_page(1111) ||
			'1111' == $post->post_parent ) {

			echo '<img src="http://www.clarehousing.org/wp-content/uploads/2013/12/Mn-capitol.jpg" />';

		// Clarion newsletter
		} elseif (
			is_page('clarion-newsletter') || 
			'236' == $post->post_parent || 		// if parent is newsletter
			'744' == $post->post_parent ) {		// if parent is Winter 2012 page
			
			echo '<img src="'.$url.'/images/clarion_masthead.jpg" />';

		} else {  
			query_posts('post_type=banner&posts_per_page=1&orderby=rand');
		    while (have_posts()) : the_post();                
        	
			echo get_the_post_thumbnail();
			
			endwhile;
			wp_reset_query();
		} 
	?>
</div>
<?php get_header(); 
	  the_post(); ?>
      
<article <?php post_class(); ?>>      
    
    <h2 class="callout clear"><?php the_field('callout'); ?></h2>
    
    <div class="entry-content three-fourths">
        <h1 class="entry-title orange">Meet <?php the_title(); ?></h1>
        <div class="indented">
        	<div class="featured-image alignright">
				<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail(); } ?>
            </div>    
	    	<?php the_content(); ?>
    	</div>
    </div> 
    
    <div class="fourth leftnav">
        	<ul>
            	<li id="resident"><strong><a href="<?php echo home_url(); ?>/stories" title="Our Stories">Our Stories</a></strong></li>
                <?php $args = array(
					'post_type' => 'profile',
					'role' => 'resident',
					'posts_per_page' => 25
				);
				query_posts($args);
				while ( have_posts() ) : the_post(); ?>
                
                <li class="resident"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>'s Story</a></li>
                
				<?php endwhile; wp_reset_query(); ?>
            	
                <li id="donor-volunteer"><strong><a href="<?php echo home_url(); ?>/stories/donor-volunteer" title="Donor and Volunteer Profiles">Donor &amp; Volunteer Profiles</a></strong></li>
                
				<?php $args = array(
				'post_type' => 'profile',
				'role' => 'donor,volunteer',
				'posts_per_page' => 25);
				query_posts($args);
				while (have_posts()) : the_post(); ?>
                
                <li class="donor-volunteer"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                
                <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
         
</article>
<?php get_footer(); ?>
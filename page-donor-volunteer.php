<?php 
/*
Template Name: Donor/Volunteer Profile
*/
get_header();
the_post(); ?>
      
<h2 class="callout clear"><?php the_field('callout'); ?></h2>      
      
<article <?php post_class('three-fourths'); ?>>      
    
    <div class="entry-content clear">
    	<?php $args = array(
				'post_type' => 'profile',
				'role' => 'donor,volunteer',
				'posts_per_page' => 25,
			);
			query_posts($args);
			while ( have_posts() ) : the_post(); ?>
            <h2 class="entry-title listed"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      
                    <div class="entry-summary indented clearfix">      			
                    	<div class="featured-image alignleft">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if (has_post_thumbnail()) { echo get_the_post_thumbnail(); } ?>
                            </a>
    					</div>    
                        <?php the_excerpt(); ?>                         
                    </div>    
                
            <?php endwhile; ?>
            <?php rewind_posts(); ?>
    </div>      
</article>

<div class="fourth clearfix leftnav">
		<ul>
        	<li>
            	<a href="<?php echo home_url(); ?>/support/donor-volunteer" title="Donor and Volunteer Profiles">
                	<strong>Donor &amp; Volunteer Profiles</strong>
                </a>
          	</li>
            <?php while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; 
		wp_reset_query(); ?>
      	</ul>

</div>
     
<?php get_footer(); ?>
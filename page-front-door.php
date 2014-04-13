<?php 
/*
Template Name: Front Door Blog
*/

get_header(); 
the_post(); ?>
      
<div id="top-grad"></div>

<article <?php post_class(); ?>>      
    
    <h2 class="callout clear"><?php the_field('callout'); ?></h2>

    <div class="fifth sidebar">
    	<?php get_sidebar('front-door'); ?>
    </div>
    
	<div class="entry-content three-fifths">
    	<h2 class="entry-title listed clear maroon">Welcome to Clare Housing's Blog</h2>
        <div class="entry-summary">
            <p>Here we will post stories and reflections happening at Clare Housing.</p>
            <p>We hope to provide you with a glimpse of the work we do and the impact made in lives of people living here at Clare Housing.</p>
            <p>Thank you for reading the Front Door Blog!</p>
        </div>
        
    <?php query_posts('post_type=front-door&posts_per_page=10'); 
		while ( have_posts() ) : the_post(); ?>
	    <h2 class="entry-title listed clear maroon"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>&nbsp;&mdash;&nbsp;<small class="entry-date"><?php echo get_the_date(); ?></small></h2>
        <div class="entry-summary clearfix"> 
        	<div class="entry-meta alignleft">
        	<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_image(); ?></a>
                <?php the_author_posts_link(); ?>
        	</div>
              	 
	    	<?php the_excerpt(); ?>
		</div>	
	<?php endwhile; 
		  echo '<strong>'.$next.'</strong>';
		  rewind_posts(); ?>
        
    </div>   

    <div class="fifth leftnav">
    	<ul>
        <li><a href="<?php echo home_url(); ?>/front-door" title="More from the Front Door"><strong>The Front Door</strong></a></li>
        <?php
			echo '<ul>'; ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
				
				<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?>
            
            </ul>
            
        <?php wp_reset_query(); ?>
        </ul>
    </div>
       
</article>

<?php get_footer(); ?>
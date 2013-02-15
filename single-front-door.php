<?php 
get_header();  
the_post(); 
?>
	<div id="top-grad"></div>
	<article <?php post_class(); ?>>      
    
    <h2 class="callout clear"><?php the_field('callout'); ?></h2>
    
    <div class="fifth sidebar">
    	<?php get_sidebar('front-door'); ?>
    </div>  
    
    <div class="entry-content three-fifths">
	    <h1 class="entry-title clear maroon"><?php the_title(); ?>&nbsp;&mdash;&nbsp;<small class="entry-date"><?php echo get_the_date(); ?></small></h1>
        <div class="entry-meta alignleft">
        	
				<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_image(); ?></a>
                <?php the_author_posts_link(); ?>
            
        </div>    
    	<?php the_content(); ?>
    </div> 
    
    <div class="fifth leftnav">
    	<ul>
        <li><a href="<?php echo home_url(); ?>/front-door" title="More from the Front Door"><strong>The Front Door</strong></a></li>
        <?php query_posts('post_type=front-door&posts_per_page=10'); while ( have_posts() ) : the_post(); ?>
       		<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>   
     
</article>

<?php get_footer(); ?>
<?php 
/*
Template Name: News & Events
*/

get_header(); 
the_post(); ?>
      
<article <?php post_class(); ?>>      
    <h1 class="entry-title visuallyhidden"><?php the_title(); ?></h1>
    
    <h2 class="callout clear"><?php the_field('callout'); ?></h2>
    
    <div class="row">
        
        <div class="entry-content three-fourths">
        	<?php query_posts('posts_per_page=10'); 
			
				  $prev = get_previous_posts_link('Newer &uarr;',0); 
				  $next = get_next_posts_link('Older &darr;',0); 
			
				  while ( have_posts() ) : the_post(); 
				  
				  $date = get_the_date();
				?>
                    <h2 class="entry-title listed">
                    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    	&nbsp;&mdash;&nbsp;<small class="entry-date"><?php echo $date; ?></small>
                    </h2>
                    <div class="entry-summary">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="featured-image alignleft">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </a>
                            </div>                       
						<?php } the_excerpt(); ?>
    				</div>            
                <?php endwhile; 
				echo '<strong>'.$next.'</strong>'; ?>
            <?php rewind_posts(); ?>
        </div>
        
        <div class="fourth leftnav">
        	<ul>
            	<li style="text-align:center;"><?php echo $prev; ?></li>
            <?php while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                
                <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            	<li style="text-align:center;"><?php echo $next; ?></li>
            </ul>
        </div>
              
	</div>
</article>
<?php get_footer(); ?>
<?php 
get_header();  
the_post(); ?>
      
<article <?php post_class(); ?>>      
    
    <h2 class="callout clear"><?php the_field('callout'); ?></h2>
    
    <div class="fourth leftnav">
    	<ul>
        <li><a href="<?php echo home_url(); ?>/news" title="News &amp; Events"><strong>Recent News</strong></a></li>
        <?php query_posts('cat=news-events&posts_per_page=10'); while ( have_posts() ) : the_post(); ?>
       		<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>
    
    <div class="entry-content three-fourths">
	    <h1 class="entry-title clear"><?php the_title(); ?>&nbsp;&mdash;&nbsp;<small class="entry-date"><?php echo get_the_date(); ?></small></h1>    
    	<div class="entry-content indented">
			<?php the_content(); ?>
        </div>
    </div>       
</article>

<?php get_footer(); ?>
<?php 
/*
Template Name: Clarion Newsletter
*/
get_header(); 
the_post();?>
      
<h2 class="callout clear"><?php the_field('callout'); ?></h2>    
      
<article <?php post_class(); ?>>      
    <h1 class="entry-title red"><?php the_title(); ?></h1>
    
    <div class="entry-content">
    	<?php the_content(); ?>
    </div>      
</article>

<article>
    <h2 class="entry-title red">Other Publications</h2>
    
    <div class="entry-content indented">
        <?php the_field('other_publications'); ?>
    </div>
</article>

<?php get_footer(); ?>
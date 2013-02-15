<?php 
/*
Template Name: Clarion Issue
*/
get_header(); 
the_post(); ?>
      
<h2 class="callout clear"><?php the_field('callout'); ?></h2>      
      
<article <?php post_class('three-fourths'); ?>>      
    <h1 class="entry-title red"><?php the_title(); ?></h1>
    
    <div class="entry-content indented">
    	<?php 
    	if (get_field('entries')) { 
			while (has_sub_field('entries')) { ?>
				<div class="entry">
					<a href="<?php the_sub_field('link'); ?>">
						<img src="<?php the_sub_field('thumbnail'); ?>">
						<p><strong><?php the_sub_field('title'); ?></strong></p>
					</a>
				</div>
			<?php }
		}
    	the_content(); ?>
    </div>      
</article>

<div class="fourth clearfix leftnav">
	<?php the_field('clarion_sidebar', 'options'); ?>
</div>

<style>
	.entry {
		height: 120px;
		padding: 20px 0 0 120px;
		position: relative;
	}
	.entry img {
		position: absolute;
		height: 100px;
		width: 100px;
		top: 0;
		left: 0;
	}

	@media only screen and (max-width: 519px) {
		.entry img {
			height: 100px;
			width: 100px;
		}
	}
</style>

<?php get_footer(); ?>
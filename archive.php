<?php get_header(); ?>

<div class="row">

	<h1 class="callout red">
		<?php 
		if ( is_day() ) :
			printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' );
		elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date('F Y') . '</span>' );
		elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date('Y') . '</span>' );
		else : 
			_e( 'Blog Archives' );
		endif; ?>
    </h1>

	<div class="entry-content three-fourths">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>&nbsp;&mdash;&nbsp;<small class="entry-date"><?php echo get_the_date(); ?></small></h2>
        <div class="entry-summary indented clearfix">
        	<div class="entry-meta alignleft">
        	<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_image(); ?></a>
                <?php the_author_posts_link(); ?>
        	</div>
        	<?php the_excerpt(); ?>
        </div>
        
        <?php endwhile; ?>
        
        <?php endif; ?>
        
    </div>
    
    <div class="fourth leftnav">
        <ul>
            <li><strong><a href="<?php echo home_url(); ?>/news">Recent News</a></strong></li>
        <?php 
		query_posts('posts_per_page=5');
		while ( have_posts() ) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                
            <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>

</div><!-- .row -->

<?php get_footer(); ?>
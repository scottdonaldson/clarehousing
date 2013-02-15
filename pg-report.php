<?php 
/*
Template Name: Community Report
*/
setlocale(LC_MONETARY, 'en_US');
function comm_report_css() { ?>
	<style>
		.entry-title {
			color: #85281e !important;
			font-size: 24px;
			margin-bottom: 40px;
		}
		.left {
			float: left;
			padding-right: 2%;
			width: 50%;
		}
		.right {
			float: right;
			padding-left: 2%;
			width: 50%;
		}
		table {
			width: 100%;
		}
		table td {
			background: #e0e0e0;
			border-bottom: 3px solid #F3F1EF;
			border-right: 3px solid #F3F1EF;
			padding: 5px;
		}
		table td:last-child { padding-right: 10px; text-align: right; vertical-align: bottom; width: 35%; }
		table td:first-child { text-align: left; }
		.pie {
			margin-bottom: 30px;
		}
		.chart {
			float: left;
			width: 30%;
		}
		.chart canvas {
			height: auto !important;
			max-width: 100% !important;
		}
		.tooltip {
			background: #333;
			border: 0 none;
			font-family: 'Open Sans',Helvetica,Arial,sans-serif;
			font-size: 16px;
			left: -6px;
			padding: 10px;
			position: relative;
			top: -6px;
			width: 150px;
		}
		.legend {
			float: left;
			width: 70%;
		}
		.legend section {
			float: left;
			margin-bottom: 20px;
			padding-left: 20px;
			width: 50%;
		}
		.legend section:nth-child(2n+1) {
			clear: left;
		}
		.color {
			clear: left;
			float: left;
			height: 20px;
			margin-right: 2%;
			width: 8%;
		}

		.color-1 { background: #85281e; }
		.color-2 { background: #af3327; }
		.color-3 { background: #945b0b; }
		.color-4 { background: #cd6f19; }
		.color-5 { background: #ffd668; }
		.color-6 { background: #fffac2; }
		.color-7 { background: #c3b9af; }
		.legend p {
			float: right;
			margin: 0;
			padding-right: 20px;
			width: 90%;
		}

		@media screen and (max-width: 800px) {
			.chart {
				width: 50%;
			}
			.legend {
				width: 50%;
			}
			.legend section {
				font-size: 12px;
				margin-bottom: 5px;
				padding: 0;
				width: 100%;
			}
			.color { display: none; }
			.color ~ p { color: #fff; padding: 5px; }
			.color-1  ~ p { background: #85281e; }
			.color-2  ~ p { background: #af3327; }
			.color-3  ~ p { background: #945b0b; }
			.color-4  ~ p { background: #cd6f19; }
			.color-5  ~ p { background: #ffd668; color: #85281e; }
			.color-6  ~ p { background: #fffac2; color: #85281e; }
			.color-7  ~ p { background: #c3b9af; color: #85281e; }
		}
		@media screen and (max-width: 680px) {
			.left, .right {
				padding: 0;
				margin-bottom: 20px;
				width: 100%;
			}
		}

	</style>
<?php }
add_action('wp_head','comm_report_css');
function comm_report_js() {
	$template_url = get_bloginfo('template_url');
	echo '<script src="'.$template_url.'/js/jquery.sparkline.js"></script>'; ?>
	<script>
	jQuery(document).ready(function($){
		$('.chart').each(function(){
			$this = $(this);
			var values = [];
			$this.find('.value').each(function(){
				values.push($(this).text());
			});
			$this.sparkline(values,
				{
					type: 'pie',
					height: '200',
					width: '100%',
					sliceColors: [
						'#85281e',
						'#af3327',
						'#945b0b',
						'#cd6f19',
						'#ffd668',
						'#fffac2',
						'#c3b9af'
					],
					tooltipFormat: $.spformat('${{value}}','tooltip'),
				});
		});
	});
	</script>
<?php }
add_action('wp_footer','comm_report_js');
get_header(); 
the_post(); ?>
      
<h2 class="callout clear"><?php the_field('callout'); ?></h2>      
      
<article <?php post_class(); ?>>      
    <h1 class="entry-title green"><?php the_title(); ?></h1>
    
    <div class="entry-content indented">
    	<?php the_content(); ?>

    	<div class="pies">
    		<?php 
    		$pie = get_field('pie');

    		if ($pie) {
    			foreach ($pie as $pie) {
    				echo '<div class="pie clearfix">';
    				$i = 0;
    				echo '<h2 class="red">'.$pie['title'].'</h2>';
    				if ($pie['items']) {
    					echo '<div class="chart">Loading...';
    					foreach ($pie['items'] as $item) {
    						$i++;
    						echo '<span class="hidden name">'.$item['name'].'</span>';
    						echo '<span class="hidden value">'.$item['amount'].'</span>';
    					}
    					echo '</div><!-- .chart -->';
    					echo '<div class="legend">';
    					$i = 0;
    					foreach ($pie['items'] as $item) {
    						$i++;
    						echo '<section class="clearfix"><div class="color color-'.$i.'"></div>';
    						echo '<p>'.$item['name'].': '.money_format('%.0n',$item['amount']).'</p></section>';
    					}
    					echo '</div><!-- .legend -->';
    				}
    				echo '</div><!-- .pie -->';
    			}
    		}

    		?>
    	</div>

    	<div class="left">
    		<?php the_field('left'); ?>
    	</div>
    	<div class="right">
    		<?php the_field('right'); ?>
    	</div>
    </div> 
</article>

<?php get_footer(); ?>
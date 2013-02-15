	</div><!-- #main -->

</div><!-- #container -->

<footer class="contentbox clearfix">

	<aside class="social">
		<a class="twitter" href="http://www.twitter.com/clarehousing" target="_blank" title="Clare Housing on Twitter"></a>
      	<a class="facebook" href="http://www.facebook.com/pages/Clare-Housing/118471574857255" target="_blank" title="Clare Housing on Facebook"></a>
    </aside>
	
	<p>&copy; <?php echo date('Y'); ?> Clare Housing.<span class="spacer"> </span>929 Central Avenue NE, Minneapolis, MN 55413.<span class="spacer"> </span>(612) 236-9515.</p>
    <small>
		<?php $args = array(
		'menu' => 'Footer Menu'
		);
		
		wp_nav_menu($args); ?>
    </small>
</footer>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script> 
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>  
	<script src="<?php echo bloginfo('template_url'); ?>/js/clare.js"></script>
    
    <script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-31422245-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

<?php wp_footer(); ?>
</body>

</html>
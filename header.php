<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <title><?php wp_title(); ?> </title>
  <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/reset.css"> 
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/flexslider.css">  
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/clare.css">      
        
    
    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->  
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
  
  <?php wp_head(); ?>  	
</head>

<body <?php body_class(); ?>>

<header class="contentbox">
	<aside class="social">

        <a class="twitter" href="http://www.twitter.com/clarehousing" target="_blank" title="Clare Housing on Twitter"></a>
      	<a class="facebook" href="http://www.facebook.com/pages/Clare-Housing/118471574857255" target="_blank" title="Clare Housing on Facebook"></a>
        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FClare-Housing%2F118471574857255&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=lucida+grande&amp;height=21&amp;appId=408442112506862" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
        
    </aside>
        
    <a href="<?php echo home_url(); ?>">
		<img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" id="logo" alt="Clare Housing - Partners in AIDS Care" />
    </a>
        
    <?php get_template_part('banner'); ?>

	<nav id="menu" class="clearfix maroon"><?php wp_nav_menu('Primary Menu'); ?></nav>
</header>

<div id="container" class="clearfix contentbox">
    
    <div id="main" role="main" class="clearfix gradient">
<!DOCTYPE html>
<html lang="en">
<head>
<!--在线客服css样式-->
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "宋体";}
/* suspend */
.suspend{width:40px;height:198px;position:fixed;top:200px;right:0;overflow:hidden;z-index:9999;}
.suspend dl{width:120px;height:198px;border-radius:25px 0 0 25px;padding-left:40px;box-shadow:0 0 5px #e4e8ec;}
.suspend dl dt{width:40px;height:198px;background:url(images/suspend.png);position:absolute;top:0;left:0;cursor:pointer;}
.suspend dl dd.suspendQQ{width:120px;height:85px;background:#ffffff;}
.suspend dl dd.suspendQQ a{width:120px;height:85px;display:block;background:url(http://demo.lanrenzhijia.com/2014/service0823/images/suspend.png) -40px 0;overflow:hidden;}
.suspend dl dd.suspendTel{width:120px;height:112px;background:#ffffff;border-top:1px solid #e4e8ec;}
.suspend dl dd.suspendTel a{width:120px;height:112px;display:block;background:url(http://demo.lanrenzhijia.com/2014/service0823/images/suspend.png) -40px -86px;overflow:hidden;}
* html .suspend{position:absolute;left:expression(eval(document.documentElement.scrollRight));top:expression(eval(document.documentElement.scrollTop+200))}
</style>
<!--在线客服代码开始-->
<div class="suspend">
	<dl>
		<dt class="IE6PNG"></dt>
		<dd class="suspendQQ"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=224409900&site=qq&menu=yes"></a></dd>
		<dd class="suspendTel"><a href="javascript:void(0);"></a></dd>
	</dl>
</div>
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script type="text/javascript">           
$(function(){
	$(".suspend").mouseover(function() {
        $(this).stop();
        $(this).animate({width: 160}, 400);
    });
    $(".suspend").mouseout(function() {
        $(this).stop();
        $(this).animate({width: 40}, 400);
    });
});
</script>
<!--在线客服代码结束-->
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900' rel='stylesheet' type='text/css'>
	
	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<!--	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/retina-1.1.0.min.js"></script>
	<!--// 2 below for slider -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slippry.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slippry.css">
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<?php $shortname = "design_studio"; ?>
	
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>			
</head>
<body <?php body_class($class); ?>>
<header id="header">
	<div class="container">
		<div class="logo_cont">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" class="logo" alt="logo" /></a>
			<?php } else { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="logo" /></a>
			<?php } ?>					
		</div><!--//logo_cont-->
		
		<div class="clear"></div>
	</div><!--//container-->
	
	<div class="header_bottom">
	
		<div class="container">
			<div class="header_menu">
				<!--<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">CATEGORY</a>
						<ul>
							<li><a href="#">Design</a></li>
							<li><a href="#">Architecture</a></li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Architecture</a></li>
							<li><a href="#">Photography</a></li>						
						</ul>
					</li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>-->
				<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=main_header_menu'); ?>
			</div><!--//header_menu-->	
			
			<div class="right">
			
				<div class="header_social">
					<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_picasa_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="picasa" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
					<?php } ?>
					<?php if(get_option($shortname.'_flickr_link','') != '') { ?>
						<a href="<?php echo get_option($shortname.'_flickr_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="youtube" /></a>
					<?php } ?>				
					<div class="clear"></div>
				</div><!--//header_social-->			
				
				<div class="header_search">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input type="text" placeholder="Search" name="s" id="s" />
					<INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.jpg" BORDER="0" ALT="Submit Form">
					</form>
				</div><!--//header_search-->
				
				<div class="clear"></div>
			
			</div><!--//right-->
			
			<div class="clear"></div>
		</div><!--//container-->
		
	</div><!--//header_bottom-->	
	
</header><!--//header-->
<div class="header_spacing"></div>
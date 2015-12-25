<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>David Chen's Sketches</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Favicons -->
		<link rel="shortcut icon" href="./img/favicon.ico">
		<link rel="apple-touch-icon-precomposed" href="./img/favicon.ico">
		
		<!-- Google fonts styles -->
		<link rel="stylesheet" id="google-fonts-Roboto-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">
		<link rel="stylesheet" id="google-fonts-Playfair+Display-css" href="http://fonts.googleapis.com/css?family=Playfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">

		<!-- Aside styles -->
		<link rel="stylesheet" id="bootstrap-css" href="./styles/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" id="font-awesome-css" href="./styles/font-awesome.min.css" type="text/css" media="screen">
		<link rel="stylesheet" id="pagebuild-css" href="./styles/pagebuild.css" type="text/css" media="screen">
		<link rel="stylesheet" id="ux-aside-css" href="./styles/style.css" type="text/css" media="screen">
		<link rel="stylesheet" id="icons-css" href="./styles/icons.css" type="text/css" media="screen">
		<link rel="stylesheet" id="ux-interface-galleria-classic-css" href="./js/galleria/themes/classic/galleria.classic.css?ver=1.3.5" type="text/css" media="screen">
		<!-- Jquery Lib version 1.11.0 -->
		<script type="text/javascript" src="./js/jquery.min.js"></script>
		
		<!-- IE hack -->
		<!--[if lte IE 9]>
		<link rel='stylesheet' id='cssie'  href='./styles/ie.css' type='text/css' media='screen' />
		<![endif]-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="./js/ie.js"></script>
		<link rel='stylesheet' id='cssie8'  href='./styles/ie8.css' type='text/css' media='screen' />
		<![endif]-->
		<!--[if lte IE 7]>
		<div style="width: 100%;" class="messagebox_orange">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
		<![endif]-->
	</head>
	<body class="home page page-id-122 page-template-default  responsive-ux boxed-line aside-layout-ux" style="height: auto;">
		<!-- Page Loading -->
		<div class="page-loading visible">
			<div class="page-loading-inn">
				<div class="page-loading-transform">
					<div class="ux-loading"></div>
					<div class="ux-loading-transform">
						<div class="loading-dot1">&nbsp;</div>
						<div class="loading-dot2">&nbsp;</div>
					</div>
					<div class="site-loading-logo centered-ux">My Sketches</div>
				</div>
			</div>
		</div>

		<!-- Jplayer -->
		<div id="jquery_jplayer" class="jp-jplayer"></div>
		
		<!--Mobild Header meta-->
		<div id="mobile-header-meta">
			<!--Social icons-->
			<?php include 'include/socialnetworks.html'; ?>

			<div class="mobile-meta-con">
				<div class="copyright">Copyright David Chen, CW Soft</div>
			</div>
			<!--End header-info-mobile-->

		</div>
		<!--End mobile-header-meta-->
		<div id="wrap">
			<!--Sidaber-->
			<?php include 'aside.php'; ?>
			<!--Header-->
			<header id="header" class="">
				<h1 id="logo-mobile"><a href="index.php" title="Aside Responsive HTML Theme">Aside</a></h1>
			</header>
			<!--End Header-->
			
			<div id="main-wrap">
				<div id="main" style="-webkit-transform-origin: 50% 665px;">
					<div id="content">
						<div id="post-151" class="post-151 post type-post status-publish format-gallery has-post-thumbnail hentry category-blog category-illustration category-portfolio category-uncategorized tag-digital-art tag-illustration-2">
							<div id="content_wrap" class="">
								<div class="row-fluid gallery-wrap gallery-wrap-fullwidth ">
									<div class="gallery-images-wrap ">
										<div class="row-fluid ">
											<?php include 'posts/' . $_GET['link'] . '.html'; ?>
											<section class="related-post-wrap clearfix"><div class="row-fluid"></div></section>
											<!--End related-post-erap-->
										</div>
										<!--end row-fluid-->
									</div>
									<!--end gallery-images-wrap -->
								</div>
								<!--end row-fluid gallery-wrap-->
							</div>
							<!--end content_wrap-->
						</div>
						<!--end post-->
					</div>
					<!--end content-->
				</div>
				<!--End #main-->        
			</div>
			<!--End #main-wrap-->
			<div id="hot-close-sidebar-touch"></div>
		</div><!--End #wrap-->    
		<div id="float-bar" class="hidden-phone">
			<div class="float-bar-inn-wrap">
				<div class="float-bar-inn">
					<!--Social network share icon-->
					<div class="float-bar-social-share">
						<button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/share.php?u=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>

						<button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/share?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>

						<button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/share?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>

						<button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/pin/create/bookmarklet/?url=http://ximudesign.com/aside/&amp;is_video=false&amp;media=','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>

						<button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/share.php?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>

						<button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>

					</div>
				</div>
				<!--End float inn wrap-->
			</div><!--End float inn-->
			<div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
		</div>
		<!--End #float bar-->
	
		<script type="text/javascript" src="./js/bootstrap.js"></script>
		<script type="text/javascript" src="./js/galleria/galleria-1.3.5.js?ver=1.3.5"></script>
		<script type="text/javascript" src="./js/galleria/themes/classic/galleria.classic.min.js?ver=1.3.5"></script>
		<script type="text/javascript" src="./js/waypoints.min.js"></script>
		<script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="./js/jquery.gray.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
		<script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
		<script type="text/javascript" src="./js/custom.theme.js"></script>
		<script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
	</body>
</html>
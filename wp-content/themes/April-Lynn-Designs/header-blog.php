<!DOCTYPE html>
<html>
<head>
	<title>April Lynn Designs</title>
	<meta name="viewport" content="initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,500,700,400,300' rel='stylesheet' type='text/css'>
  
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
    <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>

   <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>


	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			
			
			
			<aside class="right-off-canvas-menu canvas">
						<ul class="off-canvas-list text-center">
											<li><label>Main Menu</label></li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/invitation-studio/">Gallery</a>
												<ul class="submenu">
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/invitation-studio/">Invitation Studio</a></li>
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/design-studio/">Design Studio</a></li>
												</ul>
											</li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>info/">Info</a>
												<ul class="submenu">
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>process/">Process</a></li>
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>investment/">Investment</a></li>
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">FAQ</a></li>
													<li><a target="_blank" href="https://www.dropbox.com/s/rbndijw5es00rva/Invitation%20Wording%20Samples.pdf">Invitation Wording</a></li>
													<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>pros-we-love/">Pros We Love!</a></li>
												</ul>
											</li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">About</a>
													<ul class="submenu">
														<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-april/">About April</a></li>
														<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>press/">Press</a></li>
														<li><a target="_blank" href="http://www.weddingwire.com/reviews/april-lynn-designs-langhorne/270ccc3d8d785166.html">Reviews</a></li>
													</ul>
											</li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">Contact</a></li>
											<li><a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">Blog</a></li>
						</ul>
						<h4 style="width: 60%; display: table; margin: 20px auto;" class="h4 ribbon"><span class="left-ribbon"></span><a href="#" class="right-off-canvas-toggle">close menu</a><span class="right-ribbon"></span></h4>
						
			</aside>
	<div class="home page-wrapper">
		
		<header>
			<div class="row">
				<div id="blog-header-wrap">
				<div class="small-18 small-centered medium-uncentered medium-13 columns">
					<nav id="blog-nav" class="hide-for-small-only ribbon">
						<span class="left-ribbon"></span>
						<!--<ul class="">
											<li><a class="main-link" href="">Home</a></li>
											<li><a class="main-link" href="">Gallery</a>
												<ul class="submenu">
													<li><a href="">Invitation Studio</a></li>
													<li><a href="">Design Studio</a></li>
												</ul>
											</li>
											<li><a class="main-link" href="">Info</a>
												<ul class="submenu">
													<li><a href="">Process</a></li>
													<li><a href="">Investment</a></li>
													<li><a href="">FAQ</a></li>
													<li><a href="">Invitation Wording</a></li>
													<li><a href="">Pros We Love!</a></li>
												</ul>
											</li>
											<li><a class="main-link" href="">About</a>
													<ul class="submenu">
														<li><a href="">About April</a></li>
														<li><a href="">Press</a></li>
														<li><a href="">Reviews</a></li>
													</ul>
											</li>
											<li><a class="main-link" href="">Blog</a></li>
											<li><a class="main-link" href="">Contact</a></li>
											<li><a class="main-link" href="">Shop</a></li>
						</ul>-->
						<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
					</nav>					<div class="mobile-menu show-for-small-only">
											</div>
				</div>
				<div class="small-18 small-centered medium-uncentered medium-5 columns">					
					<div id="logo-wrapper">
						<a class="hide-for-small-only" href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" "April Lynn Designs" /></a>
						<a class="mobile-logo show-for-small-only" href="/"><img src="<?php bloginfo('template_url'); ?>/images/mobile-logo.png" "April Lynn Designs" /></a>
					</div>
					<div class="show-for-small-only small-17 medium-6 small-centered columns">
						<h4 class="h4 ribbon"><span class="left-ribbon"></span><a href="#" class="right-off-canvas-toggle">main menu</a><span class="right-ribbon"></span></h4>

					</div>
					<div class="show-for-small-only small-17 medium-6 small-centered columns">
						<ul class="small-block-grid-6">
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook" /></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter" /></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/pinterest.png" alt="pinterest" /></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" alt="instagram" /></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/rss.png" alt="rss" /></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/gplus.png" alt="gplus" /></a></li>
						</ul>
					</div>

				</div>
				</div>
			</div>
		</header>
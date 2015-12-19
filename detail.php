<?php 

include('function.php');
include('article.php');

$idz=$_GET['t'];

$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);


$fp = count($data);
for($x = 0; $x < $fp; $x++){
$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/
$id = $prod[0];
$title = $prod[1]; // คอลั่ม 1;
$img = $prod[2]; // คอลั่ม 2;
$prod_link = $prod[3]; // คอลั่ม3;
$var1 = $prod[4];
//$var2 = $prod[5];
//$var3 = $prod[6];
if($idz!=$id){
}else{
$getlandz = glob('include/*.txt');

shuffle($getlandz);

			foreach($getlandz as $lpp){

				$land = $lpp;

				}
$content=file_get_contents($land); 
$content = str_replace(array('{title}','{img}','{url}','{prefix}','{suffix}','{article}','{var1}','{var2}','{var3}'), array($prod[1],$prod[2],$prod[3],$prefix,$suffix,$article,$prod[4]), $content);
$content = spin($content);
$titlekeyword=$prod[1];
$idlink=$prod[0];
$titleurl=slug($titlekeyword);

}
}

$timedate=date("Y-m-dTH:i:s+00:00");
$timehaha=date("Y/m/d : H:i:s");

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title><?=$prefix;?> <?=$titlekeyword;?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://<?=$urlwebsite;?>/sitemap.xml">
<!--[if lt IE 9]>
<script src="https://s0.wp.com/wp-content/themes/pub/twentytwelve/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?=$keyword;?> Feed" href="http://<?=$urlwebsite;?>/rss.xml" />

<script type="text/javascript">
/* <![CDATA[ */
function addLoadEvent(func){var oldonload=window.onload;if(typeof window.onload!='function'){window.onload=func;}else{window.onload=function(){oldonload();func();}}}
/* ]]> */
</script>
<link rel='stylesheet' id='all-css-0' href='https://s1.wp.com/_static/??-eJx9kNsKwjAMhl/IWsQDeiE+y9bFLrNpypJRfHuj4AllN+FP832kxNfiAmeFrJ4mV9IUMYsXwgTXMvIAQb+7ZRBZ+P9awguIH0BLEy7u0f3gbeL4FjhG6HhSd+aUuPqKXYTZHZjPmFGvrzAHS8+jBu7sV0Z5SWix5+pegzk78Aj2TqXRO0HQYQMJyLA5jcruad1jb7f4PcMHX4vRrm3LCCLOKuFETntb9PBOdFxt1pvt7rBfb4cbh5ikAQ==' type='text/css' media='all' />
<link rel='stylesheet' id='twentytwelve-fonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='all-css-2' href='https://s2.wp.com/wp-content/themes/pub/twentytwelve/style.css?m=1431379442g' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentytwelve-ie-css'  href='https://s0.wp.com/wp-content/themes/pub/twentytwelve/css/ie.css?m=1423935238g&#038;ver=20121010' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='all-css-4' href='https://s0.wp.com/_static/??-eJx9j9EKgzAMRX9oXXDK5svYt2iJNZI2xUbFv1+HYzjGfLncG855CCzRWAmKQUF79JggTi3okg9rTp4Rkq6MZolW/NmmdIKd4ycTeXIUEqCXgbbcMIIgSplMn3LkOxTDYhslCV/DdNzQeKSO2LK4XB1kajePJAodBdL1398/7pvrK3AsbcMv4OHvRVVeb3V5qYvhCVGdfUc=' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var LoggedOutFollow = {"invalid_email":"Your subscription did not succeed, please try again with a valid email address."};
/* ]]> */
</script>
<script type='text/javascript' src='https://s1.wp.com/_static/??-eJyFkGsKAjEMhC9kt+zDn+JZ9pEtqW1Tm9aip7fCiohVIZCQfAwzkdkLdLNJC7DUpc4JwnVrjead/AUIiyqMERqL7gnP5CK4+GAtTWhAJIYwqrIrQitVOE8cLTAXqHJ9t4TugpD/YhqiH+eTCMB4+1CdDCnhTVLoWJZZwUIpipWMoSwzLgpiLTz7V87vX9uooz20Q9/v227oBn0HlAKG0w=='></script>
<link rel='stylesheet' id='all-css-0' href='https://s2.wp.com/wp-content/mu-plugins/highlander-comments/style.css?m=1377793621g' type='text/css' media='all' />
<!--[if lt IE 8]>
<link rel='stylesheet' id='highlander-comments-ie7-css'  href='https://s2.wp.com/wp-content/mu-plugins/highlander-comments/style-ie7.css?m=1351637563g&#038;ver=20110606' type='text/css' media='all' />
<![endif]-->
<link href='http://<?=$urlwebsite;?>/topic/<?=$idlink;?>/<?=$titleurl;?>.html' rel='canonical'/>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://<?=$urlwebsite;?>" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s1.wp.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress.com" />
<link rel='shortlink' href='http://wp.me/6tkav' />

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$keyword;?>" />
<meta property="og:url" content="http://<?=$urlwebsite;?>" />
<meta property="og:site_name" content="<?=$keyword;?>" />
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:site" content="@wordpressdotcom" />
<meta property="fb:app_id" content="249643311490" />
<link rel="shortcut icon" type="image/x-icon" href="https://s2.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="https://s2.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="apple-touch-icon-precomposed" href="https://s0.wp.com/i/webclip.png" />
<link rel='openid.delegate' href='http://<?=$urlwebsite;?>' />
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
			}
		</style>
		<meta name="application-name" content="<?=$keyword;?>" /><meta name="msapplication-window" content="width=device-width;height=device-height" /><meta name="msapplication-task" content="name=Subscribe;action-uri=https://imn63896cdnqa.wordpress.com/feed/;icon-uri=https://s2.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=Sign up for a free blog;action-uri=http://wordpress.com/signup/;icon-uri=https://s2.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Support;action-uri=http://support.wordpress.com/;icon-uri=https://s2.wp.com/i/favicon.ico" /><meta name="msapplication-task" content="name=WordPress.com Forums;action-uri=http://forums.wordpress.com/;icon-uri=https://s2.wp.com/i/favicon.ico" /><meta name="title" content="imn63896cdnqa on WordPress.com" />
<style type="text/css" id="syntaxhighlighteranchor"></style>

</head>

<body class="home blog mp6 customizer-styles-applied custom-font-enabled single-author highlander-enabled highlander-light infinite-scroll neverending">
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="http://<?=$urlwebsite;?>" title="<?=$keyword;?>" rel="home"><?=$keyword;?></a></h1>
			<h2 class="site-description"><?=$keyword;?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle">Menu</button>
			<a class="assistive-text" href="#content" title="Skip to content">Skip to content</a>
			<div class="nav-menu">
				<ul>
					<li class="current_page_item"><a href="http://<?=$urlwebsite;?>">Home</a></li>
					<li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/all.html">Posts List</a></li>
					<li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/sitemap.xml">Sitemap</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

	<div id="main" class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
		
										
	<article id="post-2" class="post-2 post type-post status-publish format-standard hentry">
				<header class="entry-header">
			
						<h1 class="entry-title">
				<a href="http://<?=$urlwebsite;?>/topic/<?=$idlink;?>/<?=$titleurl;?>.html" rel="bookmark"><?=$titlekeyword;?></a>
			</h1>
										<div class="comments-link">
					<a href="http://<?=$urlwebsite;?>/topic/<?=$idlink;?>/<?=$titleurl;?>.html"><span class="leave-reply">Leave a reply</span></a>				</div><!-- .comments-link -->
					</header><!-- .entry-header -->

				<div class="entry-content">
			<p>
<?

echo $content;


echo '<h3><b>โรงแรมในญี่ปุ่นอื่นๆ ที่น่าสนใจ</b></h3>';
require_once("relateter.php");
	?>
			</p>
					</div><!-- .entry-content -->
		
		<footer class="entry-meta">
			This entry was posted in <?=$keyword;?> on <a href="http://<?=$urlwebsite;?>" rel="bookmark"><time class="entry-date" datetime="<?=$timedate;?>"><?=$timehaha;?></time></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" href="http://<?=$urlwebsite;?>" title="View all posts by KuroNeko" rel="author">KuroNeko</a></span></span>.								</footer><!-- .entry-meta -->
	</article><!-- #post -->
			
			
		
		</div><!-- #content -->
	</div><!-- #primary -->


			<div id="secondary" class="widget-area" role="complementary">
				<aside id="recent-posts-3" class="widget widget_recent_entries">		
					<h3 class="widget-title" style="font: bold 14px Arial,Tahoma,Helvetica,FreeSans,sans-serif;
	color: #F00;">เช็คห้องว่างโรงแรมที่นี่	</h3>
				    <script type="text/javascript">
       agoda_ad_client = "1740100_50132";
       agoda_ad_width = 300;
       agoda_ad_height = 250;
    </script>
    <script type="text/javascript" src="//banner.agoda.com/js/show_ads.js"></script>

				</aside>
				
				<aside id="archives-3" class="widget widget_archive">
						<h3 class="widget-title" style="font: bold 14px Arial,Tahoma,Helvetica,FreeSans,sans-serif; color: #F00;">ตั๋วเครื่องบินราคาถูก</h3>
						<a href="http://www.jetradar.co.th/?marker=91851">
<img style="visibility: visible;" alt="ตั๋วเครื่องบินไปญี่ปุ่นราคาถูก" id="Image4_img" src="http://<?=$urlwebsite;?>/img/300x250-e3a86e20e02dbcbea4ea54d935a4698f.gif" >
</a>
				</aside>
				
				<aside id="archives-3" class="widget widget_archive">
					<h3 class="widget-title" style="font: bold 14px Arial,Tahoma,Helvetica,FreeSans,sans-serif; color: #F00;">ข่าวสารล่าสุด</h3>	
					<? include('tag.php'); ?>
				</aside>		
		</div><!-- #secondary -->
		</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a href="https://wordpress.com/themes/twentytwelve/" title="Learn more about this theme">The Twenty Twelve Theme</a>.			<a href="https://wordpress.com/?ref=footer_blog">Blog at WordPress.com</a>.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

		<script type="text/javascript">
		//<![CDATA[
		var infiniteScroll = {"settings":{"id":"content","ajaxurl":"https:\/\/imn63896cdnqa.wordpress.com\/?infinity=scrolling","type":"scroll","wrapper":true,"wrapper_class":"infinite-wrap","footer":"page","click_handle":"1","text":"Older posts","totop":"Scroll back to top","currentday":"15.07.15","order":"DESC","scripts":[],"styles":[],"google_analytics":false,"offset":0,"history":{"host":"imn63896cdnqa.wordpress.com","path":"\/page\/%d\/","use_trailing_slashes":true,"parameters":""},"query_args":{"error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","static":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"comments_popup":"","meta_key":"","meta_value":"","preview":"","s":"","sentence":"","fields":"","menu_order":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"posts_per_page":7,"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":false,"update_post_term_cache":true,"update_post_meta_cache":true,"post_type":"","nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"},"last_post_date":"2015-07-15 07:22:09","stats":"blog=95647059&v=wpcom&tz=0&user_id=0&subd=imn63896cdnqa&x_pagetype=infinite"}};
		//]]>
		</script>
		<!-- wpcom_wp_footer -->
<script type='text/javascript' src='//0.gravatar.com/js/gprofiles.js?ver=201529x'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":"f6149ff1fefa284bb94e0d5e8a6cbd44"};
/* ]]> */
</script>
<script type='text/javascript' src='https://s2.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1380573781g'></script>

	<script>
		//initialize and attach hovercards to all gravatars
		jQuery( document ).ready( function( $ ) {

			if (typeof Gravatar === "undefined"){
				return;
			}

			if ( typeof Gravatar.init !== "function" ) {
				return;
			}			

			Gravatar.profile_cb = function( hash, id ) {
				WPGroHo.syncProfileData( hash, id );
			};
			Gravatar.my_hash = WPGroHo.my_hash;
			Gravatar.init( 'body', '#wp-admin-bar-my-account' );
		});
	</script>

		<div style="display:none">
	</div>
<script type='text/javascript'>
/* <![CDATA[ */
var HighlanderComments = {"loggingInText":"Logging In\u2026","submittingText":"Posting Comment\u2026","postCommentText":"Post Comment","connectingToText":"Connecting to %s","commentingAsText":"%1$s: You are commenting using your %2$s account.","logoutText":"Log Out","loginText":"Log In","connectURL":"https:\/\/imn63896cdnqa.wordpress.com\/public.api\/connect\/?action=request","logoutURL":"https:\/\/imn63896cdnqa.wordpress.com\/wp-login.php?action=logout&_wpnonce=29872ea12e","homeURL":"https:\/\/imn63896cdnqa.wordpress.com\/","postID":"2","gravDefault":"identicon","enterACommentError":"Please enter a comment","enterEmailError":"Please enter your email address here","invalidEmailError":"Invalid email address","enterAuthorError":"Please enter your name here","gravatarFromEmail":"This picture will show whenever you leave a comment. Click to customize it.","logInToExternalAccount":"Log in to use details from one of these accounts.","change":"Change","changeAccount":"Change Account","comment_registration":"0","userIsLoggedIn":"","isJetpack":"0","text_direction":"ltr"};
/* ]]> */
</script>
<script type='text/javascript' src='https://s2.wp.com/_static/??/wp-content/js/jquery/jquery.autoresize.js,/wp-content/mu-plugins/highlander-comments/script.js?m=1424115551j'></script>
		<div id="infinite-footer">
			<div class="container">
				<div class="blog-info">
					<a id="infinity-blog-title" href="http://<?=$urlwebsite;?>" rel="home">
						<?=$keyword;?></a>
				</div>
				<div class="blog-credits">
					Copyright</span> &copy; 2014 <a href="http://<?=$urlwebsite;?>"><?=$urlwebsite;?></a> | <a href="http://<?=$urlwebsite;?>/all.html">All Page</a> | <a href="http://<?=$urlwebsite;?>/sitemap.xml">Sitemap</a></br><? include("footer.php");?></div>
			</div>
		</div><!-- #infinite-footer -->
<link rel='stylesheet' id='all-css-0' href='https://s1.wp.com/wp-content/mu-plugins/carousel/jetpack-carousel.css?m=1431128867g' type='text/css' media='all' />
<!--[if lte IE 8]>
<link rel='stylesheet' id='jetpack-carousel-ie8fix-css'  href='https://s1.wp.com/wp-content/mu-plugins/carousel/jetpack-carousel-ie8fix.css?m=1412618825g&#038;ver=20121024' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='all-css-2' href='https://s2.wp.com/wp-content/mu-plugins/tiled-gallery/tiled-gallery.css?m=1401143454g' type='text/css' media='all' />

</body>
</html>
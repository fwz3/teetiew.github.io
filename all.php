<?php 

include('function.php');


$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);

shuffle($data); // Rand Show;
$limit = 1000;
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
<title>All <?=$keyword;?></title>
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
<link href='http://<?=$urlwebsite;?>/all.html' rel='canonical'/>
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
			<div class="nav-menu"><ul><li class="current_page_item"><a href="http://<?=$urlwebsite;?>">Home</a></li><li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/all.html">Posts List</a></li><li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/sitemap.xml">Sitemap</a></li></ul></div>
		</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

	<div id="main" class="wrapper">
	<div id="primary" class="site-content">
		<div id="content" role="main">
		
										
	<article id="post-2" class="post-2 post type-post status-publish format-standard hentry">
				<header class="entry-header">
			
						<h1 class="entry-title">
				<a href="http://<?=$urlwebsite;?>" rel="bookmark"><?=$keyword;?></a>
			</h1>
										<div class="comments-link">
					<a href="http://<?=$urlwebsite;?>"><span class="leave-reply">Leave a reply</span></a>				</div><!-- .comments-link -->
					</header><!-- .entry-header -->

				<div class="entry-content">
			<p>
<?



		echo '<ul>';

	for($x = 0; $x < $limit; $x++){
$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$title = $prod[1]; // คอลั่ม 1;

$img = $prod[2]; // คอลั่ม 2;

$prod_link = $prod[3]; // คอลั่ม3;

$titleurl=slug($title);
echo '<li><a href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html">'.$prod[1].'</a>';
echo '</li>';


}

echo '</ul>';

?>
			</p>
					</div><!-- .entry-content -->
		
		<footer class="entry-meta">
			This entry was posted in <?=$keyword;?> on <a href="http://<?=$urlwebsite;?>" rel="bookmark"><time class="entry-date" datetime="<?=$timedate;?>"><?=$timehaha;?></time></a><span class="by-author"> by <span class="author vcard"><a class="url fn n" href="http://<?=$urlwebsite;?>" title="View all posts by KuroNeko" rel="author">KuroNeko</a></span></span>.								</footer><!-- .entry-meta -->
	</article><!-- #post -->
			
			
		
		</div><!-- #content -->
	</div><!-- #primary -->


			<div id="secondary" class="widget-area" role="complementary">
						<aside id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form></aside>		<aside id="recent-posts-3" class="widget widget_recent_entries">		<h3 class="widget-title">Recent Posts</h3>		<?

	include('tag.php');

	?>
		</aside>		</div><!-- #secondary -->
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
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackSlideshowSettings = {"spinner":"https:\/\/s1.wp.com\/wp-content\/mu-plugins\/shortcodes\/img\/slideshow-loader.gif","blog_id":"95647059","blog_subdomain":"imn63896cdnqa","user_id":"0"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var JetpackEmojiSettings = {"base_url":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/emoji\/twemoji\/"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"en","ajaxurl":"https:\/\/imn63896cdnqa.wordpress.com\/wp-admin\/admin-ajax.php","nonce":"a4c05d48ec","display_exif":"1","display_geo":"1","background_color":"black","comment":"Comment","post_comment":"Post Comment","write_comment":"Write a Comment...","loading_comments":"Loading Comments...","download_original":"View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Please be sure to submit some text with your comment.","no_comment_email":"Please provide an email address to comment.","no_comment_author":"Please provide your name to comment.","comment_post_error":"Sorry, but there was an error posting your comment. Please try again later.","comment_approved":"Your comment was approved.","comment_unapproved":"Your comment is in moderation.","camera":"Camera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/imn63896cdnqa.wordpress.com\/wp-login.php?redirect_to=https%3A%2F%2Fimn63896cdnqa.wordpress.com%2F2015%2F07%2F15%2Fhello-world%2F","local_comments_commenting_as":"<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>","reblog":"Reblog","reblogged":"Reblogged","reblog_add_thoughts":"Add your thoughts here... (optional)","reblogging":"Reblogging...","post_reblog":"Post Reblog","stats_query_args":"blog=95647059&v=wpcom&tz=0&user_id=0&subd=imn63896cdnqa","is_public":"1"};
var jetpackCarouselStrings = {"widths":[370,700,1000,1200,1400,2000],"is_logged_in":"","lang":"en","ajaxurl":"https:\/\/imn63896cdnqa.wordpress.com\/wp-admin\/admin-ajax.php","nonce":"a4c05d48ec","display_exif":"1","display_geo":"1","background_color":"black","comment":"Comment","post_comment":"Post Comment","write_comment":"Write a Comment...","loading_comments":"Loading Comments...","download_original":"View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>","no_comment_text":"Please be sure to submit some text with your comment.","no_comment_email":"Please provide an email address to comment.","no_comment_author":"Please provide your name to comment.","comment_post_error":"Sorry, but there was an error posting your comment. Please try again later.","comment_approved":"Your comment was approved.","comment_unapproved":"Your comment is in moderation.","camera":"Camera","aperture":"Aperture","shutter_speed":"Shutter Speed","focal_length":"Focal Length","comment_registration":"0","require_name_email":"1","login_url":"https:\/\/imn63896cdnqa.wordpress.com\/wp-login.php?redirect_to=https%3A%2F%2Fimn63896cdnqa.wordpress.com%2F2015%2F07%2F15%2Fhello-world%2F","local_comments_commenting_as":"<fieldset><label for=\"email\">Email (Required)<\/label> <input type=\"text\" name=\"email\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-email-field\" \/><\/fieldset><fieldset><label for=\"author\">Name (Required)<\/label> <input type=\"text\" name=\"author\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-author-field\" \/><\/fieldset><fieldset><label for=\"url\">Website<\/label> <input type=\"text\" name=\"url\" class=\"jp-carousel-comment-form-field jp-carousel-comment-form-text-field\" id=\"jp-carousel-comment-form-url-field\" \/><\/fieldset>","reblog":"Reblog","reblogged":"Reblogged","reblog_add_thoughts":"Add your thoughts here... (optional)","reblogging":"Reblogging...","post_reblog":"Post Reblog","stats_query_args":"blog=95647059&v=wpcom&tz=0&user_id=0&subd=imn63896cdnqa","is_public":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://s0.wp.com/_static/??-eJyNj00SgjAMhS8kdkRGV45nqTFKamkqSUFub3EGRl2gmyZ5fV9+TB8L4KAY1DgxZ+wIMD7WTlbm7atJRfTpSkEMhQsF0mFOFrxSc6vAZ5SxubsnbIc1DODxb0g85azmvpj1b1ZrbLI5ppPRPgtDfn2HIx1sR1erxGFhIDbsaETf40+/Q40WbsV/7g8XBfBpuq+/8Mkh6HeLie/y/WysCOoLeNWxRZGFoWBbToJ+3nISMnNsDptqu6v2ZVmV7gly4sGv'></script>
<script type='text/javascript' src='https://platform.twitter.com/widgets.js?ver=20111117'></script>
<script type='text/javascript' src='https://s0.wp.com/_static/??-eJyVy7EOQEAMANAfUnViYBDfgmsupepyivh7VpMY3/DwjDCuaqSGyw5R9sC6oZ1sRgkG6cd54OQhMqHSQYnUs4Z82jL8c+P3YyEPoRehdL31rG5pXVXUTVO70k03DU5D1g=='></script>
<script type="text/javascript">
// <![CDATA[
(function() {
try{
  if ( window.external &&'msIsSiteMode' in window.external) {
    if (window.external.msIsSiteMode()) {
      var jl = document.createElement('script');
      jl.type='text/javascript';
      jl.async=true;
      jl.src='/wp-content/plugins/ie-sitemode/custom-jumplist.php';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(jl, s);
    }
  }
}catch(e){}
})();
// ]]>
</script>	<script type="text/javascript">
	var skimlinks_pub_id = "725X584219"
	var skimlinks_sitename = "imn63896cdnqa.wordpress.com";
	</script>
	<script type="text/javascript" src="https://s.skimresources.com/js/725X1342.skimlinks.js"></script><script type="text/javascript">
			jQuery.extend( infiniteScroll.settings.scripts, ["jquery","jquery-core","jquery-migrate","mobile-useragent-info","postmessage","jquery_inview","jetpack_resize","loggedout-subscribe","spin","jquery.spin","grofiles-cards","wpgroho","jquery.autoresize","highlander-comments","devicepx","the-neverending-homepage","jquery-cycle","jetpack-slideshow","twentytwelve-navigation","twemoji","jetpack-emoji","jetpack-emoji-init","swfobject","videopress","jetpack-carousel","twitter-widgets","twitter-widgets-infinity","twitter-widgets-pending","tiled-gallery"] );
			jQuery.extend( infiniteScroll.settings.styles, ["smileyproject","jetpack_likes","loggedout-subscribe","the-neverending-homepage","jetpack-slideshow","wpcom-core-compat-playlist-styles","mp6hacks","wpcom-bbpress2-staff-css","twentytwelve-style","twentytwelve-wpcom-style","jetpack-emoji-css","noticons","geo-location-flair","reblogging","infinity-twentytwelve","h4-global","twentytwelve-fonts","twentytwelve-ie","highlander-comments","highlander-comments-ie7","jetpack-carousel","tiled-gallery","jetpack-carousel-ie8fix"] );
		</script><script src="//stats.wp.com/w.js?47" type="text/javascript" async defer></script>
<script type="text/javascript">
_tkq = window._tkq || [];
_stq = window._stq || [];
_tkq.push(['storeContext', {'blog_id':'95647059','blog_tz':'0','user_lang':'en','blog_lang':'en','user_id':'0'}]);
_stq.push(['view', {'blog':'95647059','v':'wpcom','tz':'0','user_id':'0','subd':'imn63896cdnqa'}]);
_stq.push(['extra', {'crypt':'UE40eW5QN0p8M2Y/RE1LVmwrVi5vQS5fVFtfdHBbPyw1VXIrU3hWLHhmSm9QP3h4NWI3YSZLNDlfR0RhbU5GNF0uMmQyK11WbnBVai9GLm1hOGZkMjk3M2EvU1g1WHksRGtodEw9RGZhcTQ3eGIwVDVnSC0zZD8zdFotVFNfNkduUEpxb10sdT1JeUJ8S1NqOWI9LC9lek1rTnRnc11dQm18dEItbC05Mis9TnpKZktIeWNURVRdc09QJUhRenkvPXpfRERpUHI4Vkl2NUlRfE1YLkVqSGl5ZTNLWFh3YmsrLCZLUWRoS2hPeDAxb2Q0TVl4U05+bGpWTT9YLmFDNXM4WVA9Pyw2T19bLV1OUXNzUCV8WjB3eG1rJW0yWT1yeng3RVlUb1Z3WHJBaVAtQmVlPy5KenozM3QzXUxHa0hLeFZHbDdSTytILlNMMldGfEtuRmtEWlF1MDg5dk0wT0YzJg=='}]);
_stq.push([ 'clickTrackerInit', '95647059', '0' ]);
	</script>
<noscript><img src="https://pixel.wp.com/b.gif?v=noscript" style="height:0px;width:0px;overflow:hidden" alt="" /></noscript>
<script>
if ( 'object' === typeof wpcom_mobile_user_agent_info ) {

	wpcom_mobile_user_agent_info.init();
	var mobileStatsQueryString = "";
	
	if( false !== wpcom_mobile_user_agent_info.matchedPlatformName )
		mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;
	
	if( false !== wpcom_mobile_user_agent_info.matchedUserAgentName )
		mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;
	
	if( wpcom_mobile_user_agent_info.isIPad() )
		mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

	if( "" != mobileStatsQueryString ) {
		new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
	}
	
}
</script></body>
</html>
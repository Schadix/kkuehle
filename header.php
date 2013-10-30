<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s'), max( $paged, $page ) );

		?>
	</title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- test -->
	<script type="text/javascript" src="js/jqFancyTransitions.1.8.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".tab_content").hide(); 
			$("ul.tabs li:first").addClass("active").show(); 
			$(".tab_content:first").show(); 
			$("ul.tabs li").click(function() {
				$("ul.tabs li").removeClass("active"); 
				$(this).addClass("active"); 
				$(".tab_content, .tab_content1, .tab_content2").hide(); 
				var activeTab = $(this).find("a").attr("href"); 
				$(activeTab).fadeIn(); 
				return false;
			});
		});
	</script> 

</head>

<body id="start" <?php body_class(); ?>>
	<div id="container">
		<div id="logo-top">
			<a href="index.php"><img src="<?php bloginfo('template_url'); ?>/img/kk_logo.png" alt="kk_logo" width="117" height="58" /></a>
		</div>
		
		<div id="name">
			<img src="<?php bloginfo('template_url'); ?>/img/thk_name.png" alt="thk_name" width="224" height="24" /><br/><span class="underwrite">RECHTSANWALT &amp; FACHANWALT F&Uuml;R AGRARRECHT</span>
		</div>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Pyongyang
 * @since Pyongyang 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'pyongyang' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
	
	<table style="margin-bottom: 5px;">
		<tr>
			<td width="124px" style="padding: 9px 0 0 5px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/flag-dprk.gif" />
			</td>
			<td style="padding: 7px 0 0 2px;vertical-align:top">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Knewskage-t.gif" /><br />
				<span style="color:#0000b0;font-size:15px;">News From <span style="color:red;">K</span>OREAN <span style="color:red;">C</span>ENTRAL <span style="color:red;">N</span>EWS <span style="color:red;">A</span>GENCY of DPRK<span style="font-size:9px;">(Democratic People's Republic of Korea)</span></span>
			</td>
		</tr>
	</table>
	
	<script type="text/javascript">
	function koreaN()
	{
	alert("Only the Leader may view past news");
	}
	
	function koreaNN()
	{
	alert("K     C     N     AThe Korean Central News Agency is the state-run agency of the Democratic People's Republic of Korea.It speaks for the Workers' Party of Korea and the DPRK government.It was founded on December 5, 1946.It is located in the capital city of Pyongyang.It has branches in provincial seats and in some foreign countries.News is transmitted to other countries in English, Russian, and Spanish.The KCNA is in charge of uniform delivery of news and other informations to mass media of the country,including newspapers and radios.It develops the friendly and cooperative relations with foreign news agencies.");	
	}
	</script>
	
	<table class="mentable" cellpadding="0" cellspacing="0" border="0" style="font-size: 17px; background: #0000b0; color: white;">
		<tr>
			<td style="width:25%;font-weight:bold;text-align:center;"><a href="<?php echo home_url(); ?>" style="color:#fff;">HOME</a></td>
			<td style="width:25%;font-weight:bold;"><span onclick="koreaN()">Past News</span></td>
			<td style="width:25%;font-weight:bold;"><span onclick="koreaNN()">Introduction to KCNA</span></td>
			<td style="width:25%;font-weight:bold;text-align:right;padding-right:30px;"><a href="mailto:eng-info@kcna.co.jp">E-MAIL</a></td>
		</tr>
	</table>
	
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
	
	<div style="padding-bottom:15px;">
		<strong style="font-size:19px;"><?php echo pyongyang_currentdate(); ?></strong> <!-- Strong like the Supreme Leader. -->
	</div>
	
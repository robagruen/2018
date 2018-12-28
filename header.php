<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="/style.css?<?= time(); ?>" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--script-- type="text/javascript" src="<?php //echo get_stylesheet_directory_uri(); ?>/js/anime.min.js"></script-->
<!--script type="text/javascript" src="<?php //echo get_stylesheet_directory_uri(); ?>/js/confetti.js"></script-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php //_e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

        <div class="custom-header">

            <div class="custom-header-media">
                <div id="wp-custom-header" class="wp-custom-header"><img src="http://whatacool.website/wp-content/uploads/2018/10/cincinnati.jpg" alt="Rob A. Gruen" /></div>
            </div>

            <div class="site-branding">
                <div class="wrap">
                    <!--div id="logoContainer">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="337.5 179.991 187 295.557" width="187" height="295.557">
                            <path d=" M 339 408 L 339 219 Q 577 156 482 243 C 387 330 325 304 389 370 Q 453 436 482 463 Q 347 358 348 337 C 349 316 486 237 486 216 Q 486 195 348 229 L 339 408 Z " fill="#ff2c64" vector-effect="non-scaling-stroke" stroke-width="1" stroke="rgb(0,0,0)" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/>
                            <path d=" M 339 414.555 L 339 210.113 Q 596.445 141.966 493.684 236.074 C 390.922 330.182 323.856 302.058 393.085 373.45 Q 462.314 444.843 493.684 474.049 Q 347.654 360.47 348.735 337.754 C 349.817 315.038 498.01 229.584 498.01 206.868 Q 498.01 184.152 348.735 220.93 L 339 414.555 Z " fill="#FFC72C" vector-effect="non-scaling-stroke" stroke-width="1" stroke="#ff2c64" stroke-linejoin="miter" stroke-linecap="square" stroke-miterlimit="3"/>
                        </svg>
                    </div-->

                    <div class="site-branding-text">
                        <h1 class="site-title">
                            <a href="http://whatacool.website/" rel="home">
                                Rob A. Gruen
                            </a>
                        </h1>
                        <p class="site-description">I&#039;m a Front End Developer that Makes Stuff</p>
                    </div><!-- .site-branding-text -->


                </div><!-- .wrap -->
            </div><!-- .site-branding -->

        </div>

        <div class="navigation-top">
            <div class="wrap">
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
                        <svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg>Menu	</button>

                    <div class="menu-mymenu-container">
                        <ul id="top-menu" class="menu">
                            <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website">Home</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website#aboutMeSection">About Me</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website#skillsSection">Skills</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website#pastWorkSection">Portfolio</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website#contactMeSection">Contact Me</a></li>
                            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a class="menuLink" href="http://whatacool.website/blog/">Blog</a></li>
                        </ul>
                    </div>
                    <a href="#content" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">Scroll down to content</span></a>
                </nav><!-- #site-navigation -->
            </div><!-- .wrap -->
        </div><!-- .navigation-top -->

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
 show_admin_bar( false );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
    wp_head();
    $current_url = '/'.add_query_arg(array(),$wp->request);
     ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=RyoOggEQaM">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=RyoOggEQaM">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=RyoOggEQaM">
    <link rel="manifest" href="/manifest.json?v=RyoOggEQaM">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=RyoOggEQaM" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=RyoOggEQaM">
    <meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="grid-container">
            <div class="grid-inner">
                <div id="logo">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    	 viewBox="0 0 74.5 99.5" style="enable-background:new 0 0 74.5 99.5;" xml:space="preserve">
                    <path d="M20.7,69.8h8.2v1.8H3.1v-1.8h8.2V30.3H3.1v-1.8h17.6V69.8z M20,12.4c-1.1,1.1-2.4,1.6-4.1,1.6c-1.6,0-3-0.5-4.1-1.6
                    	c-1.1-1.1-1.6-2.4-1.6-4.1c0-1.6,0.5-3,1.6-4.1c1.1-1.1,2.4-1.6,4.1-1.6c1.6,0,3,0.5,4.1,1.6c1.1,1.1,1.6,2.4,1.6,4.1
                    	C21.6,9.9,21.1,11.3,20,12.4 M63.1,2.6c-2.8,0-5.3,0.5-7.6,1.6c-2.3,1.1-4.3,2.8-6.1,5.1c-1.8,2.4-5.7,9.2-7.8,19.2h-8.1l-0.5,1.9
                    	H41C40.2,34,39.8,36,38.7,42c-1.1,5.9-2.4,12.4-3.7,19.4c-1,5.3-2.1,10-3.2,14.2c-1.1,4.2-2.3,7.8-3.6,10.8c-1.3,3-2.7,5.3-4.2,6.9
                    	c-1.5,1.6-3.1,2.4-4.9,2.4c-0.9,0-1.4-0.2-1.4-0.5c0-0.3,0.3-0.9,0.7-1.1l0,0c1.2-0.9,2-2.3,2-3.9c0-2.7-2.2-4.8-4.8-4.8
                    	s-4.8,2.2-4.8,4.8c0,5.6,4.8,7.4,7.9,7.4c2.8,0,5.4-0.6,7.7-1.9c2.4-1.2,4.5-3.2,6.5-5.8c2-2.6,3.8-6,5.5-10.1
                    	c1.7-4.1,3.2-9.1,4.7-15c2.1-8.4,3.8-15.7,5-21.9c1.2-6.2,1.7-8.5,2.5-12.4h8.7l0.4-1.9H51c0.7-3.4,2.3-13.2,3.6-16.8
                    	c1-3.1,2.3-5.1,3.9-6c1.6-0.9,3-1.4,4.2-1.4c1.4,0,2.2,0.1,2.4,0.4c0.1,0.1,0.1,0.2,0.1,0.3c0,0.3,0,0.4-0.4,0.6c0,0,0,0,0,0
                    	c-1.4,0.8-2.4,2.4-2.4,4.2c0,2.7,2.2,4.8,4.8,4.8c2.7,0,4.8-2.2,4.8-4.8C72,7.8,70.6,2.6,63.1,2.6"/>
                    </svg>

                </div>
                <div id="mobile-btn">
                    <div class="back-circle">
                        <svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                             <circle class="dash" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="16" cy="16" r="15"/>
                        </svg>

                    </div>
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
                <div id="menu">
                    <div class="menu-container">
                    <?php
                    wp_nav_menu( array('theme_location'=>'main-nav','depth' => 1) );
                    ?>
                    </div>
                </div>
            </div>
        </div>

    </header>

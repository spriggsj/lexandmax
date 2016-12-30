<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lexandmax
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Lex and Max</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>

		<!--trial of nav locker insertion -->

		<nav class="navbar navbar-default">
		                    <div class="navbar navbar-static-top navbar-custom">
		                    <!-- Brand and toggle get grouped for better mobile display -->
		                        <div class="container-fluid">
		                            <div class="row">
		                                <div class="col-xs-12 col-sm-6 col-md-8 main-img">
		                                    <a href="<?php echo home_url(); ?>" class="main-logo">

		                                        <div>
		                                            <h1 class="main-name">lex and max </h1>
		                                        </div>
		                                    </a>
		                                </div>

		                                <div class="col-xs-12 col-sm-6 col-md-4">
		                                    <div class="row">
		                                         <div class="col-xs-12 col-md-12">
		                                            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		                                            <span class="icon-bar"></span>
		                                            <span class="icon-bar"></span>
		                                            <span class="icon-bar"></span>
		                                            </button>
		                                        </div>

		                                        <!-- Collect the nav links, forms, and other content for toggling -->
		                                        <div class="collapse navbar-collapse navHeaderCollapse">
		                                            <div class="col-xs-12 main-nav">
		                                                <?php /* Primary navigation */
		                                                    wp_nav_menu( array(
		                                                    'menu' => 'primary',
		                                                    'theme-location' => 'primary',
		                                                    'depth' => 2,
		                                                    // 'items_wrap' => my_nav_wrap(),
		                                                    'menu_class' => 'nav navbar-nav ',
		                                                    'fallback-cb' => 'wp_bootstrap_navwalker::fallback',
		                                                    //Process nav menu using our custom nav walker
		                                                    'walker' => new wp_bootstrap_navwalker())
		                                                    );

		                                                ?>
		                                            </div>
		                                        </div>
		                                    </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

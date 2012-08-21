<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.inc.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>

	<meta name="viewport" content="width=device-width">

	<!-- Le styles -->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap.min.css">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- Le Modernizer -->
	<script src="<?php get_theme_url(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	
	<?php get_header(); ?>
</head>
<body id="<?php get_page_slug(); ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php get_bootstrap_navigation(return_page_slug()); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
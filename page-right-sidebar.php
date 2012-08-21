<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      page-right-sidebar.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
include('header.inc.php'); 
?>
    <!-- Le Container
    ================================================== -->
    <div class="container">

      <div class="row">
        <div class="span9">
        <h1><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?>
        </div>
        
        <div class="span3">
        <?php include('sidebar.inc.php'); ?>
        </div>
      </div>
      
	</div><!--/.container -->
<?php include('footer.inc.php'); ?>
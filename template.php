<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
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
        <div class="span12">
        <h1><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?>
        </div>
      </div>
      
	</div><!--/.container -->
<?php include('footer.inc.php'); ?>
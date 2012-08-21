<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.inc.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
    <!-- Le Footer
    ================================================== -->
	<footer class="container">
	<?php get_footer(); ?>
      	<hr>
    	<p>&copy; Copyright <?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></p>
	</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php get_theme_url(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<script src="<?php get_theme_url(); ?>/js/libs/bootstrap/bootstrap.min.js"></script>

	<script src="<?php get_theme_url(); ?>/js/script.js"></script>
</body>
</html>
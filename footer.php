<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spsc
 */
$my_conf = pods('my_config');
?>


<?php wp_footer(); ?>

<div class="footer-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="copyright"><?php echo $my_conf->display('footer_text'); ?></div>
			</div>
			<div class="col-md-8">
				<ul class="social-icons">
					<li><a href="<?php echo $my_conf->display('facebook_page'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
				</ul>
			</div>
		</div>
	</div>
</div>

<!--page scroll start-->
<div class="page-scroll scrollToTop"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
<!--page scroll start-->


<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<!-- Load JS siles -->
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="<?php bloginfo('template_directory'); ?>/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


<!-- general script file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>

<!-- sticky script file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.sticky.js"></script>

<!-- smoothscroll script file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/smoothscroll.js"></script>

<!-- custom script file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>

</body>
</html>

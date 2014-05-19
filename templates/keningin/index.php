<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		<link rel="shortcut icon" href="<?php echo $this->baseurl?>/templates//images/favicon.ico" type="image/x-icon" />
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.0.2.js" ></script> 
		<script type="text/javascript">
			if (typeof (jQuery) === 'undefined') {
		        jQuery = jQuery.noConflict();
		    }
		    jQuery(document).ready(function($) {
				
		    	 });
		</script>
		<!--[if IE 7]>
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
	<body id="shadow">
		<div id="wrapper_page">
			<div id="page">
				<div id="header">
					<div class="left_head fL">
						<div class="logo">
							<a href="index.php?Itemid=101"><img src="images/Lgo_for_site/logo.png" alt="logo"/></a>
						</div>
						<a href="#" class="kitchen">
							<span>Виртуальная кухня</span>
						</a> 
					</div>
					<div class="right_head fR">
						<jdoc:include type="modules"  name="search" style="xhtml"/>
						<jdoc:include type="modules"  name="contact_teL_number" style="xhtml"/>
						<jdoc:include type="modules"  name="social" style="xhtml"/>
					</div>
					<div class="clear"></div>
				</div>
				<div class="navigation">
					<jdoc:include type="modules"  name="topmenu" style="xhtml"/>
					<div class="clear"></div>
				</div>
				<div class="wrapper_main">
					<div id="main">
						<div class="wrapper_top_slider">
							<div class="top_slider">
								<jdoc:include type="modules"  name="slider_top" style="xhtml"/>
							</div>
						</div>
						<div class="home_page_news">
						</div>
						<div class="box_works">
						</div>
						
						<jdoc:include type="component" />
					</div>
				</div>
				<div class="bottom_slider">
					<jdoc:include type="modules"  name="slider_bottom" style="xhtml"/>
				</div>
			</div>
		</div>
		
		<div id="footer">
			<div class="inner_footer">
				<div class="navigation_bottom">
					<jdoc:include type="modules"  name="main_menu" style="xhtml"/>
				</div>
				<div class="copyring">
					<div class="inner_copyring">
						<jdoc:include type="modules"  name="copyring" style="xhtml"/>
						<jdoc:include type="modules"  name="copyring_information" style="xhtml"/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

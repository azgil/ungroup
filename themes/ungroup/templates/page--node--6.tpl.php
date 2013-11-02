<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="other-container">
	  <div id="wrapper">
	  	<div id="left-side">
	  	  <div id="logo">
	  	  	<img src="/<?php print $path_to_ungroup ?>/assets/images/logo.png" />
	  	  </div>
	  	  <div id="main-menu" class="menu main-menu">
	  	  	<ul>
	  			<li><a href="/">Home</a></li>
	  			<li><a href="/photo/advertisement">Photography</a></li>
	  			<li><a href="/graphic/logo">Graphic</a></li>
	  			<li><a href="/gifts">Gifts</a></li>
	  			<li><a href="/contact-us">Contact</a></li>
	  			<li><a href="/about-us">About Us</a></li>
	  		</ul>
		  </div>
	  	</div>
	  	<div id="center-side" class="menu category">
	  		<ul>
	  			<li><a href="/photo/advertisement">advertisement</a></li>
	  			<li><a href="/photo/product">product</a></li>
	  		</ul>
	  	</div>
	  	<div id="right-side" class="col-lg-6 col-lg-offset-2">
		  <div class="node-content hidden-xs">
  			  <?php print render($page['content']); ?>
  		  </div>
  		  <div class="node-content visible-xs">  		  	
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			  	<?php
			  		$i = 0;
					foreach ($node->field_image_gallery['und'] as $image) {
						if($i == 0) {
							print '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'" class="active"></li>';

						}
						else {
							print '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
						}
						$i++;
					}
	  		  	?>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  	<?php
			  		$i = 0;
					foreach ($node->field_image_gallery['und'] as $image) {
						$pathtoimage = '/' . $path_to_file . '/styles/galleriffic_slide/public/' . $image['filename'];
						if($i == 0) {
							print '<div class="item active">';
						}
						else {
							print '<div class="item">';
						}
						print '<img src="'.$pathtoimage.'" alt="'.$image['alt'].'">';
						print '<div class="carousel-caption">';
						print '<h3>'.$image['title'].'</h3>';
						print '<p>'.$image['alt'].'</p>';
						print '</div>';
						print '</div>';
						$i++;
					}
					
	  		  	?>
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
  		  </div>
  		</div>
	  	<div class="push"></div>
	  </div>
	  <div class="footer visible-lg visible-md">
	  	<p class="menu">
	  	   <a href="#">home</a> 
	  	 | <a href="#">gifts</a>
	  	 | <a href="#">photo</a> 
	  	 | <a href="#">gallery</a> 
	  	 | <a href="#">contact us</a>
	  	</p>
  		<p class="company">&copy; Company 2012</p>
  	  </div>
  </div>

<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 150px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #D1D7DB;
}
.elgg-page-default .elgg-page-body { 
    background: url(<?php echo $vars['url']; ?>mod/awsome_theme/graphics/bg_shadow.png) repeat-x left top;
}

/***** TOPBAR ******/

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
    border-bottom: 1px solid #BBB;
    background: url(<?php echo $vars['url']; ?>mod/awsome_theme/graphics/gleron.jpg);
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/****CSS FOR NAV****/
.elgg-page-nav {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 40px;
	z-index: 9000;
}
.elgg-page-nav > .elgg-inner {
	padding: 0 10px;
}
.elgg-page-nav > .elgg-inner {
	position: relative;
}
/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 2000;
}
.elgg-system-messages li p {
	margin: 0;
}


/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
 background: none;
}
.elgg-layout-two-sidebar {
	background: none;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
   
	position: relative;
	padding: 22px 0 20px 20px;
	float: right;
	width: 210px;
	margin: 0 0 0 20px;
}
.elgg-sidebar-alt {
    
	position: relative;
	padding: 24px 20px 20px 0;
	float: left;
	width: 160px;
	margin: 0 20px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 20px 0 10px 0;
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	background: #4C4646;
	position: relative;
}
.elgg-page-footer {
	color: #999;
    background: #4C4646;
}
.elgg-page-footer a:hover {
	color: #666;
}
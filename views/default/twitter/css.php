<?php 
/**
 * Elgg Twitter CSS
 * 
 * @package ElggTwitter
 */    
?>

#twitter_widget {
	margin:0;
}
#twitter_widget ul {
	margin:0;
	padding:0;
}
#twitter_widget li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:none;
	margin:0 0 5px 0;
	padding:0 0 5px 0;
	overflow-x: hidden;
	border-bottom: 1px solid #D1D7DB;
}
#twitter_widget li span {
	padding:5px 0;
	display:block;
}
p.visit_twitter a {
	background:url(<?php echo elgg_get_site_url(); ?>mod/twitter/graphics/twitter16px.png) left no-repeat;
	padding:0 0 0 20px;
	margin:0;
}
p.twitter_username .input-text {
	width:200px;
}
.visit_twitter {
	padding:2px 0;
	margin:0 0 5px 0;
}
#twitter_widget li > a {
	display:block;
	margin:0;
}
#twitter_widget li span a {
	display:inline !important;
}